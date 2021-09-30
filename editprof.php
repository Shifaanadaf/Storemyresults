<?php
include('insert.php');
//error_reporting(0);
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$usn=$_GET['usn'];
$branch=$_GET['branch'];
$email=$_GET['email'];
$phn=$_GET['phn'];
$pw=$_GET['pw'];
 ?>

<html>
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
            </form>
          </div>
        </div>
      </nav>
<div  style="margin-top:2%; margin-left:auto; margin-right:auto; width:70%">
<form action="editprof.php">
                <div class="mb-3">
                <p class="form-label"> First Name</p> <input type="text" value="<?php echo $firstname?>"  class="form-control"  name="firstname">
                </div>
                <div class="mb-3">
                <p class="form-label"> Last Name</p> <input type="text" value="<?php echo $lastname?>" class="form-control"  name="lastname">
                </div>
                <div class="mb-3">
                <p class="form-label"> USN</p> <input type="text" value="<?php echo $usn?>" class="form-control" name="usn">
                </div>
                <div class="mb-3">
                <p class="form-label"> Branch</p> <input type="text" value="<?php echo $branch?>" class="form-control" name="branch">
                </div>
                <div class="mb-3">
                <p class="form-label"> Email</p> <input type="email" value="<?php echo $email?>" class="form-control" name="email">
                </div>
                <div class="mb-3">
                <p class="form-label"> Phone Number</p> <input type="text" value="<?php echo $phn?>" class="form-control" name="phn">
                </div>
                <div class="mb-3">
                <p class="form-label"> Password</p> <input type="text" value="<?php echo $pw?>" class="form-control" name="pw">
                </div>
                <button class="btn btn-primary" type="submit" name="updateprof" style="text-align:center">Update Profile</button>
</form>
</div>
<footer class="bg-dark text-center text-lg-start sticky-footer" style="position:sticky; top:100%">
        <!-- Copyright -->
        <div class=" text-center p-3" style="color: white;">
          © 2021 Copyright
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
 
<?php
// include('insert.php');
// //error_reporting(0);


if($_POST["updateprof"]){
    // $sub=$_GET['sub'];
    // $un=$_GET['un'];
    // $rm=$_GET['rm'];
    // $sc=$_GET['sc'];
      if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"])){
        $firstnam=$_POST["firstname"];
        $lastnam=$_POST["lastname"];
        $us=$_POST["usn"];
        $branc=$_POST["branch"];
        $emai=$_POST["email"];
        $ph=$_POST["phn"]; 
        $psw=$_POST["pw"];
        
          $query3="UPDATE studentdetails SET firstname='$firstnam',lastname='$lastnam',usn='$us',branch='$branc', email='$emai', phn='$ph', pw='$psw' WHERE studentdetails.email='$emai'";
          $run3=mysqli_query($conn,$query3) or die(mysqli_error($conn));
          if($run3){
               echo "<script>alert('Profile updated successfully')</script>";
        ?>
               <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/p2%20website/profile.php">
    <?php
          }
          else{
              echo"Could not update profile";
          }
      }
      else{
          echo "all fields required";
      }
    }
  
  ?>
  </body>
  </html>