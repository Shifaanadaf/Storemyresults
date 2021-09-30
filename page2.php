<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>storemyresults</title>
</head>

<body style="min-height:100vh">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Store My results</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">

          </li>
          <li class="nav-item dropdown">

          </li>
          <li class="nav-item">

          </li>
        </ul>
        <form class="d-flex">
          <a style="margin-right: 3px;" class="btn btn-danger" href="index.php" role="button">Log Out</a>
          <a style="margin-right: 3px;" class="btn btn-success" href="profile.php" role="button">Edit Profile</a>
          <!-- <button class="btn btn-success" type="submit">Edit Profile</button> -->
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="3.jpg" class="d-block w-100" class="img-fluid" style="z-index: -1; height:685px; width:100%; opacity: 1;" alt="...">
        <div class="carousel-caption d-none d-md-block" style="margin-left:20%; margin-right:20%; margin-top:50%; margin-bottom:30%;">
          <!-- <a class="btn btn-danger" href="results.php" role="button">Update result</a>
          <a class="btn btn-danger" href="view.php" role="button">View result</a> -->
          <!-- <button type="button" class="btn btn-warning">View result</button> -->
          <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" style="margin-top: 8px;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select semester
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
              <li><a class="dropdown-item" href="#">3</a></li>
              <li><a class="dropdown-item" href="#">4</a></li>
              <li><a class="dropdown-item" href="#">5</a></li>
              <li><a class="dropdown-item" href="#">6</a></li>
              <li><a class="dropdown-item" href="#">7</a></li>
              <li><a class="dropdown-item" href="#">8</a></li>
            </ul>
          </div> -->
          <br>
          <div class="input-group">
  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Select Semester</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
  </select>
  <a role="button" class="btn btn-danger" type="button" href="results.php">Update Result</a>
  <a role="button" class="btn btn-success" type="button" href="view.php">View Result</a>
</div>





        </div>
      </div>

    </div>
    <footer class="bg-dark text-center text-lg-start sticky-footer" style="position:sticky; top:100%">
        <!-- Copyright -->
        <div class=" text-center p-3" style="color: white;">
          © 2021 Copyright
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>