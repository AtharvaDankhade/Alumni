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
    <h1 class="text-center">Registered Alumni List</h1>
    <div class="table-responsive my-5">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Payment Id</th>
                <th scope="col">Added On</th>
                <th scope="col">Contribution</th>
              </tr>
            </thead>
        <?php
        include 'partial/db.php';
        $sql = "select * from contribution";
        $result = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $na = $row['fullname'];
            $do = $row['idcode'];
            $ge = $row['address'];
            $br = $row['phone_number'];
            $yp = $row['email'];
            $cc = $row['contri'];
            echo '<tbody>
              <tr>
                <td>'.$na.'</td>
                <td>'.$do.'</td>
                <td>'.$ge.'</td>
                <td>'.$br.'</td>
                <td>'.$yp.'</td>
                <td>'.$cc.'</td>
              </tr>
            </tbody>';
        }
        ?>
        </table>
    </div>
    <form method="post" action="pdf_contribution.php">
        <button class="btn btn-primary" type="submit">Generate PDF</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>