<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "alumni";

$conn = mysqli_connect($servername, $username, $password, $database);
$user = $_SESSION['username']; //$_SESSION['loggedin'] = true;
$sql = "Select name from registration where email='$user'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $pm = $row['name'];
} 
?>
<?php $passerror="false";?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Welcome - <?php echo $pm;?></title>
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
              <a class="nav-link active" aria-current="page" href="logout.php">
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-3" >
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome - <?php echo $pm;?></h4>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="donate.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">DONATE</h5>
              <p class="card-text">As the Government Polytechnic Amravati authority we gurrentee you that your donation to our institute will be used for the wellfare of students and the institute.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  DONATE
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">DONATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="container my-3" method="post" action=payment_process.php>
                          <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="text"id ="amt" class="form-control" name="amt" placeholder="Amount" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Description (If any..)</label>
                            <input type="text"id ="des" class="form-control" name="des" placeholder="Description" required>
                          </div>
                        </form>
                        <script>
                            function pay_now(){
                              var name=jQuery('#name').val();
                              var amt=jQuery('#amt').val();
                              var des=jQuery('#des').val();
                              jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "&amt="+amt+"&name="+name,
                                success: function(result){
                                  var options = {
                                    "key": "rzp_test_kKbcxgQApjxo4l", 
                                    "amount": amt*100, 
                                    "currency": "INR",
                                    "name": "GPA Amravati",
                                    "description": des,
                                    "image": "https://www.gpamravati.ac.in/gpamravati_new/temp2018/images/logo.png",
                                    "handler": function (response){
                                      jQuery.ajax({
                                        type: 'post',
                                        url: 'payment_process.php',
                                        data: "payment_id="+response.razorpay_payment_id,
                                        success: function(result){
                                          window.location.href="thank_you.php";
                                        }
                                    });
                                  }
                                };
                                  var rzp1 = new Razorpay(options);
                                  rzp1.open();
                              }
                            });
                          }
                        </script>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type=button name="btn" id="btn" value="Pay Now" class="btn btn-primary" onclick="pay_now()"/>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card" style="width: 18rem;">
            <img src="student.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Contribution</h5>
              <p class="card-text">If you want to contribute anything to the institute then please visit the page.</p>
              <a href="contribute.php" class="btn btn-primary">Contribute</a>
            </div>
          </div>
        </div>
        <div class=col-md-1>
          <div class="card" style="width: 18rem;">
            <img src="images.png" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">Change Password</h5>
              <p class="card-text">You can change your password here.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#static">
                CHANGE
              </button>
              <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="static">Change Password</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="row g-3 my-3" action="welcome.php" method="post">
                        <div class="col-md-4" >
                          <label class="form-label">New Password</label>
                          <input type="password" class="form-control" required name="txt_pass">
                        </div>
                        <div class="col-md-4" >
                          <label class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" required name="txt_cpass">
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <?php
                        if($_SERVER['REQUEST_METHOD']== 'POST'){
                          $pass = $_POST['txt_pass'];
                          $cpass = $_POST['txt_cpass'];

                          if($pass==$cpass)
                          {
                            include 'partial/db.php';

                            $sql = "update registration set Pass ='$pass' where Name='$pm'";
                            $result = mysqli_query($conn, $sql);

                            if($result)
                            {
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Password Changed Successfully.</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                            }
                          }
                          else{
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Password and Confirm Password should match.</strong>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                          }
                        }
                        ?>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>