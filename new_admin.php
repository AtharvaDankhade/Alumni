<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partial/db.php';
  $fname = $_POST['txt_name'];
  $pass = $_POST['txt_pass'];
  $email = $_POST['txt_email']; 
  
   
  $sql = "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ('$fname', '$email','$pass')";
  $result = mysqli_query($conn, $sql);
  if ($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>New Admin Successfully Regestred.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; 
    
  } 
  else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!! Admin not register.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; 
  }
}   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register New Admin</title>
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="welcome_admin.php">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="container">
        <h1 class="text-center my-5">New Admin Form</h1>
        <form class="row g-3 my-3" action="new_admin.php" method="post">
            <div class="col-md-4" >
                <label class="form-label">Name</label>
                <input type="text" class="form-control" required name="txt_name">
            </div>
            <div class="col-md-4">
                <label class="form-label">EMail</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="email" class="form-control" name="txt_email" aria-describedby="inputGroupPrepend" required autocomplete="off">
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">Set Password</label>
                <input type="password" class="form-control" id="txt_pass" name="txt_pass" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>