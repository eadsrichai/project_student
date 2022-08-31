<?php   
    session_start();
    if(isset($_SESSION['username']) ){
        header("location:index.php");
        exit(0);
    }else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../service/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../service/bootstrap-5.2.0/css/bootstrap-grid.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="chklogin.php" method="GET">
           
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-4">
                    <input type="text" class="form-control" name="username" placeholder="username" aria-label="username">
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center align-items-center">
                <div class="col-4">
                    <input type="password" class="form-control" name="password" placeholder="password" aria-label="password">
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center align-items-center" >
                <div class="col-4">
                    <input type="submit" class="form-control btn btn-primary" value="login" name="login" />
                </div>
            </div>
          
        </form>
    </div>
    
</body>

</html>

<?php  } ?>