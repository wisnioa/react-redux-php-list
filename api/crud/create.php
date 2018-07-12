<?php


// Include config file
require_once './config/config.php';
 
// Define variables and initialize with empty values
$task = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_task = trim($_POST["task"]);
   
        $name = $input_task;

    
        // Prepare an insert statement
        $sql = "INSERT INTO todos (tasks) VALUES (:task)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':task', $param_task);
           
            // Set parameters
            $param_task = $task;
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
              
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);


}

?>