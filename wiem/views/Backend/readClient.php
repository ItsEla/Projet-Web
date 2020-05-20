<?php
// Check existence of id parameter before processing further
if(isset($_GET["ID"]) && !empty(trim($_GET["ID"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM client WHERE ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $Nom = $row["Nom"];
                $Prenom = $row["Prenom"];
                $Telephone = $row["Telephone"];
                $Email = $row["Email"];
                $Mdp = $row["Mdp"];
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="page-header">
                        
                        <h1>Afficher La liste des  Client</h1>
                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <p class="form-control-static"><?php echo $row["Nom"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Prenom</label>
                        <p class="form-control-static"><?php echo $row["Prenom"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <p class="form-control-static"><?php echo $row["Telephone"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $row["Email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <p class="form-control-static"><?php echo $row["Mdp"]; ?></p>
                    </div>
                    <p><a href="AfficherClient.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>