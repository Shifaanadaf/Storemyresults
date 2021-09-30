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

if(isset($_POST["add"])){
      if(!empty($_POST["emailid"]) && !empty($_POST["sem"]) && !empty($_POST["subname"]) && !empty($_POST["score"]) && !empty($_POST["remarks"])){
          $emailid=$_POST["emailid"];
          $sem=$_POST["sem"];
          $subname=$_POST["subname"];
          $score=$_POST["score"];
          $remarks=$_POST["remarks"];
          // $phn=$_POST["phn"];
          // $pw=$_POST["pw"];
          // $cpw=$_POST["cpw"];
          

          $query="insert into marksheet(emailid,sem,subname,score,remarks) values('$emailid','$sem','$subname','$score','$remarks')";
          $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
          if($run){
            //   echo "form submitted";
            ?>
              <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/p2%20website/results.php"><?php
          }
          else{
              echo"not submitted";
          }
      }
      else{
          echo "all fields required";
      }
    }
  }
  ?>