<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Alumni</title>
  <style>
    #more {
      display: none;
    }
  </style>
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
          </li>s
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="new_alumni.php">New Alumni</a>
          </li>
        </ul>
        <div class="mx-2">
          <li class="row mx-2">
            <a class="nav-link active" aria-current="page" href="admin_login.php"><img src="admin.png" width="30"
                height="30">
              <b>Admin</b></a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1 class="text-center">ALUMNI MANAGEMENT</h1>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="college3.jpeg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="college2.jpeg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="college1.jpeg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container table-responsive my-4">
    <table class="table ">
      <thead>
        <tr>
          <td scope="col" style="font-size:40px;">Vission & Mission</td>
        </tr>
        <tr>
          <td>
            <div class="container my-4">
              <div class="row">
                <div class="col-md-5">
                  <div class="card" style="width: 18rem;">
                    <img src="Vision.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Vission</h5>
                      <p class="card-text">To ensure an excellent education environment with the technical
                        capability in the field of IT engineering to serve the vibrant Industry
                        & Society.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card" style="max-width: 18rem;">
                    <img src="Mission.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Mission</h5>
                      <p class="card-text">• Faciliate Students to learn to basics of IT Engineering entailing
                        the technical gain.<br><span id="dots">...</span><span id="more">
                          • Train Students with technical skills with rational capacity to
                          meet the requirement of industry with technological aspect.<br>
                          • Motivate the Students for an advanced knowledge in IT
                          engineering and other value added programs for their holistic
                          development.<br>
                          • Imparting ethical values, leadership social values in students
                          which transforms them into good human being.<br>
                          • Provide an academic environment and consultancy services to
                          the industry and society in the area of IT & Computer
                          Engineering.</span></p>
                      <button onclick="myFunction()" id="myBtn" class="btn btn-light">Read more</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </thead>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>