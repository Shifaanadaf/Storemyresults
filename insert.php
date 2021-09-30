<?php

$servername="localhost";
$username="root";
$password="";
$dbname="p2";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
  if(isset($_POST["login"]))
  {
    if(!empty($_POST["email"]) && !empty($_POST["pw"]))
    {
      $emaill=$_POST["email"];
      $pwl=$_POST["pw"];
      $query=mysqli_query($conn,"select * from studentdetails where email='$emaill' and pw='$pwl'");
      if(mysqli_num_rows($query)>0)
      {
        echo"
        <script>
                    alert('logged in successfully');
                    window.location.href='page2.php';
                  </script>
        ";
       
      }
      
      else
      {
       
       
        echo"
        <script>
                    alert('email or password not registered');
                    window.location.href='index.php';
                  </script>
        
        ";
       
      }

    }
    else
    {
      echo "
      <script>
                    alert('All fields required');
                    window.location.href='index.php';
                  </script>
      ";
    }

  }
  if(isset($_POST["update"]))
  {
    if(!empty($_POST["email"]) && !empty($_POST["pw"]))
    {
      $emaillf=$_POST["email"];
      $npw=$_POST["pw"];
      $query4=mysqli_query($conn,"select * from studentdetails where email='$emaillf'"); 
      if(mysqli_num_rows($query4)>0)
      {
      $query3="UPDATE `studentdetails` SET `pw`='$npw',`cpw`='$npw' WHERE email='$emaillf'";
      if(mysqli_query($conn,$query3))
      {
        echo"
        <script>
        alert('updated successfully');
        window.location.href='index.php';
      </script>
        ";
      }
      else{
        echo"
        <script>
        alert('password or email not registered');
        window.location.href='index.php';
      </script>
        
        ";
      }
    }
    else
    {
      echo"
      <script>
        alert('password or email not registered');
        window.location.href='index.php';
      </script>
      
      ";
    }
    }
    else
    {
      echo"
      <script>
      alert('All fields required');
      window.location.href='index.php';
    </script>
      
      ";
    }
  }
  if(isset($_POST["signup"]))
  {
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["usn"]) && !empty($_POST["branch"]) && !empty($_POST["email"]) && !empty($_POST["phn"]) && !empty($_POST["pw"]) && !empty($_POST["cpw"]))
    {
      $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $usn=$_POST["usn"];
            $branch=$_POST["branch"];
            $email=$_POST["email"];
            $pw=$_POST["pw"];
            $cpw=$_POST["cpw"];
            $phn=$_POST["phn"];
           
            if($_POST["pw"] == $_POST["cpw"])
            {
              $query="insert into studentdetails(firstname,lastname,usn,branch,email,phn,pw,cpw) values('$firstname','$lastname','$usn','$branch','$email','$phn','$pw','$cpw')";
              $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
              echo "
              <script>
                    alert('Registration Successful');
                    window.location.href='page2.php';
                  </script>
              ";


            }
            else
            {
              echo "
              <script>
                    alert('incorrect password');
                    window.location.href='index.php';
                  </script>
              
              ";

            }


    }
    else 
    {
      echo "
          <script>
                alert('All fields required');
                window.location.href='index.php';
              </script>
          
          ";


    }

  }

}
?>