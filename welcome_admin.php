<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: admin_login.php");
  exit;
}
include 'partial/db.php';
$user = $_SESSION['user'];
$sql = "Select name from admin where email='$user'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $pm = $row['name'];
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome <?php echo $pm;?></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="admin.png" width="30" height="30">
                <?php echo $pm;?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="bg-image" 
     style="background-image: url('11.webp');
      height: 91vh">
      <div class="container  text-center">
          <img src="admin2.png" width="70" height="70">
          <font size="20px">Admin</font><hr/>
          <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
            <br/><br/><input type="link" class="btn-check" id="btncheck1" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btncheck1"><font size="6px"><a href="registered_alumni.php"><font color="black">Registered Alumni List</font></a></font></label><br/><br/>

            <input type="link" class="btn-check" id="btncheck1" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btncheck1"><font size="6px"><a href="search_alumni.php"><font color="black">Search For Alumni</font></a></font></label><br/><br/>

            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btncheck2"><font size="6px"><a href="payement_done.php"><font color="black">Payment Done</font></a></font></label><br/><br/>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btncheck3"><font size="6px"><a href="new_admin.php"><font color="black">Add New Admin</font></a></font></label><br/><br/>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btncheck3"><font size="6px"><a href="contribution_list.php"><font color="black">Contribution List</font></a></font></label><br/><br/>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>