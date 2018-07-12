<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
require_once './config/config.php';
   
    
    // Prepare a select statement
    $sql = "SELECT * FROM todos WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(':id', $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
               
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    echo json_encode($row);                          
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
}

?>