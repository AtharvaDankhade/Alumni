<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-info">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">New Alumni</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  include 'partial/db.php';
  ?>
  <?php
  $showAlert = false;
  $showError = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['txt_name'];
    $dob = $_POST['txt_dob'];
    $gender = $_POST['txt_gender'];
    $branch = $_POST['txt_branch'];
    $year_of_passing = $_POST['txt_yop'];
    $address = $_POST['txt_address'];
    $orginition = $_POST['txt_orgination'];
    $designation = $_POST['txt_designation'];
    $number = $_POST['txt_number'];
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $cpass = $_POST['txt_cpassword'];

    $existSql = "SELECT * FROM registration WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
      $showError = "Email Already Exists";
    } else {
      if (($pass == $cpass)) {
        $sql = "INSERT INTO `registration` (`Name`, `Dob`, `Gender`, `Branch`, `Yop`, `Address`, `Organition`, `Designation`, `PNumber`, `EMail`, `Pass`) VALUES ('$name', '$dob', '$gender', '$branch', '$year_of_passing', '$address', '$orginition', '$designation', '$number', '$email','$pass')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $showAlert = true;
        }
      } else {
        $showError = "Passwords do not match";
      }
    }
  }
  if ($showAlert) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showError . '
  </div> ';
  }
  ?>
  <center class="my-3">
    <h2><u>ALUMNI REGISTRATION FORM</u></h2>
  </center>
  <form class="row g-3 my-3" action="new_alumni.php" method="post">
    <div class="col-md-4">
      <label class="form-label">Full name</label>
      <input type="text" class="form-control" required name="txt_name">
    </div>
    <div class="col-md-3">
      <label class="form-label">DOB</label>
      <input type="date" class="form-control" name="txt_dob" required>
    </div>
    <div class="col-md-3">
      <label class="form-label">Gender</label>
      <select class="form-select" id="txt_gender" name="txt_gender" required>
        <option selected disabled value="">Choose...</option>
        <option>MALE</option>
        <option>FEMALE</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Branch</label>
      <select class="form-select" id="txt_branch" name="txt_branch" required>
        <option selected disabled value="">Choose...</option>
        <option>IT</option>
        <option>CS</option>
        <option>ME</option>
        <option>EE</option>
        <option>EXTC</option>
        <option>Civil</option>
        <option>Pharmcy</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Year Of Passing</label>
      <input type="text" class="form-control" name="txt_yop" required>
    </div>
    <div class="col-md-5">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="txt_address" required></textarea>
    </div>
    <div class="col-md-3">
      <label class="form-label">Organization</label>
      <input type="text" class="form-control" name="txt_orgination" required>
      <div class="form-text">Where you are working currently.</div>
    </div>
    <div class="col-md-3">
      <label class="form-label">Designation</label>
      <input type="text" class="form-control" name="txt_designation" required>
    </div>
    <div class="col-md-3">
      <label class="form-label">Phone Number</label>
      <input type="number" class="form-control" id="txt_number" name="txt_number" minlength="10" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">EMail</label>
      <div class="input-group has-validation">
        <span class="input-group-text">@</span>
        <input type="email" class="form-control" name="txt_email" aria-describedby="inputGroupPrepend" required
          autocomplete="off">
      </div>
    </div>
    <div class="col-md-3">
      <label class="form-label">Set Password</label>
      <input type="password" class="form-control" id="txt_pass" name="txt_pass" minlength="4" required>
    </div>
    <div class="col-md-3">
      <label class="form-label">Confirm Password</label>
      <input type="password" class="form-control" name="txt_cpassword" minlength="4" required>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>