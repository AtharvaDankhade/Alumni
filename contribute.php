<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partial/db.php';
  $fname = $_POST['txt_fname'];
  $id = $_POST['txt_id'];
  $address = $_POST['txt_address'];
  $contri = $_POST['txt_contri'];
  $number = $_POST['txt_number'];
  $email = $_POST['txt_email']; 
  
   
  $sql = "INSERT INTO `contribution` (`fullname`, `idcode`, `address`, `phone_number`, `email`, `contri`) VALUES ('$fname', '$id', '$address', '$number', '$email','$contri')";
  $result = mysqli_query($conn, $sql);
  if ($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you for taking intrest in contrubuting to our institute</strong> .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; 
    
  } 
  else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please try again after some time</strong> .
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

    <title>Contribution</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="welcome.php">Back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <h1 class="text-center my-5"><u>Contribution Form</u></h1>
        <form class="row g-3 my-3" action="contribute.php" method="post">
            <div class="col-md-4" >
                <label class="form-label">Full name</label>
                <input type="text" class="form-control" required name="txt_fname">
            </div>
            <div class="col-md-4">
                <label class="form-label">Year Of Passing</label>
                <input type="text" class="form-control" name="txt_id" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="txt_address" required></textarea>
            </div>
            <div class="col-md-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="txt_number" name="txt_number" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">EMail</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="email" class="form-control" name="txt_email" aria-describedby="inputGroupPrepend" required autocomplete="off">
                </div>
            </div>
            <div class="col-md-5">
                <label class="form-label">Contribution </label>
                <textarea class="form-control" name="txt_contri" required></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>