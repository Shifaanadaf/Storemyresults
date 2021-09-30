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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Store My Results</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                </ul>
                <form class="d-flex">
                    
            </div>
            
            <div style="margin-right: 3px;"><button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                login
            </button>
            </form>
             <!-- Button trigger modal -->
<button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#example1Modal">
    Sign up
  </button></div>
        </div>

        </div>
    </nav>
    
  
  <!-- Modal -->
  <div class="modal fade" id="example1Modal" tabindex="-1" aria-labelledby="example1ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="example1ModalLabel">Sign up</h5>
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- <form action="insert.php" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                  </div>
                  <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                  </div>
                  <div class="mb-3">
                    <label for="usn" class="form-label">USN</label>
                    <input type="text" class="form-control" name="usn" id="usn">
                  </div>
                  <div class="mb-3">
                    <label for="branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" name="branch" id="branch">
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phoneno" class="form-label">Phone number</label>
                    <input type="number" class="form-control" name="phoneno" id="phoneno" aria-describedby="phoneHelp">
                    <div id="phoneHelp" class="form-text">Enter your 10 digit phone number.</div>
                  </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp">
                  <div id="passwordHelp" class="form-text">Maximum 8 characters allowed.</div>
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                  </div> -->
                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="tnc" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I accept the Terms of Use & Privacy Policy</label>
                </div> -->
                <!-- <a class="btn btn-primary" href="page2.html" role="button">Sign Up</a> -->
                <!-- <a href="page2.html"><button class="btn btn-primary" type="submit" name="submit">Sign up</button></a>

              </form> -->

              <form action="insert.php"  method="post">
                <div class="mb-3">
                <p class="form-label"> First Name</p> <input type="text" class="form-control" placeholder="firstname" name="firstname">
                </div>
                <div class="mb-3">
                <p class="form-label"> Last Name</p> <input type="text" class="form-control" placeholder="lastname" name="lastname">
                </div>
                <div class="mb-3">
                <p class="form-label"> USN</p> <input type="text" class="form-control" placeholder="usn" name="usn">
                </div>
                <div class="mb-3">
                <p class="form-label"> Branch</p> <input type="text" class="form-control" placeholder="branch" name="branch">
                </div>
                <div class="mb-3">
                <p class="form-label"> Email</p> <input type="email" class="form-control" placeholder="email" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                <p class="form-label"> Phone No.</p> <input type="text" class="form-control" placeholder="phone no." name="phn">
                <div id="phoneHelp" class="form-text">Enter your 10 digit phone number.</div>
                </div>
                <div class="mb-3">
                <p class="form-label"> Password</p> <input type="password" class="form-control" placeholder="password" name="pw">
                </div>
                <div class="mb-3">
                <p class="form-label"> Confirm Password</p> <input type="password" class="form-control" placeholder="confirm password" name="cpw">
                <div id="passwordHelp" class="form-text">Maximum 8 characters allowed.</div>
                </div>
                
                <button class="btn btn-primary" type="submit" name="signup" style="text-align:center">Sign up</button>
              </form>

        </div>
        <div class="modal-footer">
          <p>Already have an account?</p>
          <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                login
            </button>
        </div>
      </div>
    </div>
  </div>

  <!-- 
//   $server="localhost";
//   $username="root";
//   $password="";
//   $dbname="p2";

//   if (isset($_POST['submit'])){ 
//   $conn=mysqli_connect($server, $username, $password, $dbname);
//   if($conn){
//       echo "Connection made";
//   }
//   else{
//       echo "Failed".mysql_connect_error();
//   }
//   }
    // $firstname= $_POST['$firstname'];
    // $lastname= $_POST['$lastname'];
    // $usn=$_POST['$usn'];
    // $branch= $_POST['$branch'];
    // $email= $_POST['$email'];
    // $phoneno= $_POST['$phoneno'];
    // $password= $_POST['$password'];
    // $confirmpassword= $_POST['$confirmpassword'];

    // $sql= "INSERT INTO `studentdetails`(`$firstname`,`$lastname`,`$usn`,`$branch`,`$email`,`$phoneno`,`$password`,`$confirmpassword`) VALUES('$firstname','$lastname','$usn','$branch','$email','$phonenumber','$password','$confirmpassword')";
    // $sql=mysql_query("INSERT INTO studentdetails (`fn`, `ln`, `mis`, `vb`, `stat`, `total`)
    // VALUES ('".$reg."', '".$name."', '".$mis."', '".$vb."', '".$stat."', '".$tm."')")
    //$sql->bind_param("sssssiss",$firstname,$lastname,$usn,$branch,$email,$phonenumber,$password,$confirmpassword);
    // $sql->execute();
    // $data=mysqli_query('$conn','$sql');
    // if(!$data){
    //     echo "data not inserted";
    // }
 // ?> -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="insert.php"  method="post">
                <div class="mb-3">
                <p class="form-label"> email</p> <input type="text" class="form-control" placeholder="email" name="email">
                </div>
                <div class="mb-3">
                <p class="form-label"> password</p> <input type="text" class="form-control" placeholder="password" name="pw">
                </div>
               <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example4Modal">
  Forgot password
</button>
                <button class="btn btn-primary" type="submit" name="login" style="text-align:center">login</button>
              </form>
                    

                </div>
                <div class="modal-footer" style="text-align: center;">
                    <p>Not a member?</p>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#example1Modal">
    Sign up
  </button>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="2.jpg" class="d-block w-100" class="img-fluid" style="z-index: -1;  height :500px; width:100%; opacity: 1;" alt="...">
                <div class="carousel-caption d-none d-md-block" >
                    <h3 ><b>Welcome to storemyresults.com</b></h3>
                    <p >Some representative placeholder to store your results</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addresultModal" style="color: white;  opacity: 150%;">
                        Add result
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editresultModal" style="color: white;  opacity: 150%;">
                        Edit result
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#viewresultModal" style="color: white;  opacity: 150%;">
                        View result
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteresultModal" style="color: white;  opacity: 100%;">
                        Delete result
                    </button>
                </div>
            </div>

        </div>



        <!-- Modal -->
        <div class="modal fade" id="addresultModal" tabindex="-1" aria-labelledby="addresultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addresultModalLabel">Kindly login to add your result.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="viewresultModal" tabindex="-1" aria-labelledby="viewresultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewresultModalLabel">Kindly login to view your result.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteresultModal" tabindex="-1" aria-labelledby="deleteresultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteresultModalLabel">Kindly login to delete your result.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="editresultModal" tabindex="-1" aria-labelledby="editresultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editresultModalLabel">Kindly login to edit your result.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                </div>
            </div>
        </div>
       
<!-- Modal -->
<div class="modal fade" id="example4Modal" tabindex="-1" aria-labelledby="example4ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="example4ModalLabel">Forgot Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="insert.php"  method="post">
                <div class="mb-3">
                <p class="form-label"> email</p> <input type="text" class="form-control" placeholder="email" name="email">
                </div>
                <div class="mb-3">
                <p class="form-label"> new password</p> <input type="text" class="form-control" placeholder="new password" name="pw">
                </div>
                <button class="btn btn-primary" type="submit" name="update" style="text-align:center">update</button>
              </form>
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
            crossorigin="anonymous">
            
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>