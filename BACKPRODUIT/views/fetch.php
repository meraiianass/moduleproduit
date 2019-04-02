<?php
//fetch.php
require('../config.php');

try{
    $pdo = new PDO("mysql:host=localhost;dbname=bbn", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

try{
    if(isset($_REQUEST['term'])){
        // create prepared statement
        $sql = "SELECT * FROM users WHERE username LIKE :term
        or phone like :term
        or email like :term
        or address like :term ";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST['term'] . '%';
        // bind parameters to statement
        $stmt->bindParam(':term', $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row['username'] . "</p>";
                echo '
                      <div class="col-md-6 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>USER_ID: '.$row['id'].'</i></h4>
                            <div class="left col-xs-7">
                              <h2>User:  '.$row['username'].' </h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope-o"></i> Email: '.$row['email'].' </li>
                                <li><i class="fa fa-building"></i> Address:'.$row['address'].' </li>
                                <li><i class="fa fa-phone"></i> Phone : '.$row['phone'].' </li>  </li>
                                <li><i class="fa fa-check"></i> Etat : '.$row['etat'].' </li>  </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src= '.$row['image'].'  alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          </div>


                ';
            }
        } else{
            echo "<p>No matches found</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>