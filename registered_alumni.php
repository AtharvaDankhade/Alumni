<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: admin_login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registered Alumni</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="welcome_admin.php">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <h1 class="text-center"><u>Registered Alumni List</u></h1><hr/>
    <div class=" my-4">
      <div class="table table-bordered my-5">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Dob</th>
                <th scope="col">Gender</th>
                <th scope="col">Branch</th>
                <th scope="col">Yop</th>
                <th scope="col">Address</th>
                <th scope="col">Organisation</th>
                <th scope="col">Designation</th>
                <th scope="col">Phone Number</th>
                <th scope="col">EMail</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
        <?php
        include 'partial/db.php';
        $sql = "select * from registration";
        $result = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $na = $row['Name'];
            $do = $row['Dob'];
            $ge = $row['Gender'];
            $br = $row['Branch'];
            $yp = $row['Yop'];
            $ad = $row['Address'];
            $or = $row['Organition'];
            $de = $row['Designation'];
            $pn = $row['PNumber'];
            $em = $row['EMail'];
            $pa = $row['Pass'];
            echo '<tbody>
              <tr>
                <td>'.$na.'</td>
                <td>'.$do.'</td>
                <td>'.$ge.'</td>
                <td>'.$br.'</td>
                <td>'.$yp.'</td>
                <td>'.$ad.'</td>
                <td>'.$or.'</td>
                <td>'.$de.'</td>
                <td>'.$pn.'</td>
                <td>'.$em.'</td>
                <td>'.$pa.'</td>
              </tr>
            </tbody>';
        }
        ?>
        </table>
      </div>
    </div>
    <form method="post" action="generate_pdf.php">
        <button class="btn btn-primary" type="submit">Generate PDF</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>