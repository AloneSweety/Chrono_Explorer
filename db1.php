<?php
require_once 'db_conf.php';
try{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
    }
    else{
        echo "No result";
    }
}
catch(Exception $e){
    //die($e->getMessage());
}
?>
