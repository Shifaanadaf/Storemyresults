<?php
include('insert.php');
error_reporting(0);
$sub=$_GET['sub'];
$un=$_GET['un'];
$rm=$_GET['rm'];
$sc=$_GET['sc'];
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
<div  style="margin-top:8%; margin-left:auto; margin-right:auto; width:70%">
<form action="edit.php"  method="post">
                <div class="mb-3">
                <p class="form-label"> Username</p> <input type="email" value="<?php echo $un?>"  class="form-control"  name="emailid">
                </div>
                <div class="mb-3">
                <p class="form-label"> Subject/Project Name</p> <input type="text" value="<?php echo $sub?>" class="form-control"  name="subname">
                </div>
                <div class="mb-3">
                <p class="form-label"> Score</p> <input type="text" value="<?php echo $sc?>" class="form-control" name="score">
                </div>
                <div class="mb-3">
                <p class="form-label"> Remarks</p> <input type="text" value="<?php echo $rm?>" class="form-control" name="remarks">
                </div>
                
                <button class="btn btn-primary" type="submit" name="update" style="text-align:center">Update Result</button>
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


if(isset($_POST["update"])){
    // $sub=$_GET['sub'];
    // $un=$_GET['un'];
    // $rm=$_GET['rm'];
    // $sc=$_GET['sc'];
      if(!empty($_POST["emailid"]) && !empty($_POST["subname"]) && !empty($_POST["score"]) && !empty($_POST["remarks"])){
          $emailid=$_POST["emailid"];
          //$sem=$_POST["sem"];
          $subname=$_POST["subname"];
          $score=$_POST["score"];
          $remarks=$_POST["remarks"];
          // $phn=$_POST["phn"];
          // $pw=$_POST["pw"];
          // $cpw=$_POST["cpw"];      
          $query2="UPDATE marksheet SET emailid='$emailid',subname='$subname',score='$score',remarks='$remarks' WHERE emailid='$emailid' AND subname='$subname'";
          $run2=mysqli_query($conn,$query2) or die(mysqli_error($conn));
          if($run2){
               echo "<script>alert('Result updated successfully')</script>";
        ?>
               <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/p2%20website/results.php">
    <?php
          }
          else{
              echo"Could not update result";
          }
      }
      else{
          echo "all fields required";
      }
    }
  
  ?>
  </body>
  </html>