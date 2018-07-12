
<?php
require_once './config/config.php';

 

$sql = "DELETE FROM todos WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(':id', $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
        
            exit();
        
    }
     
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
} 

?>