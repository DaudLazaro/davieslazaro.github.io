<?php
 $connection=mysqli_connect("localhost","root","","moshi tech");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pnum=$_POST['pnum'];
$mail=$_POST['mail'];
$dob=$_POST['dob'];
$cv=$_POST['cv'];
$twtname=$_POST['twtname'];
$igname=$_POST['igname'];
$fbname=$_POST['fbname'];
$pwd=$_POST['pwd'];

$sql = "INSERT INTO register (FirstName,MiddleName,SurName,UserName,Phone,Email,DOB,CV,Twitter,Instagram,Facebook,Passwords) 
VALUES('$fname','$mname','$lname','$uname','$pnum','$mail','$dob','$cv','$twtname','$igname','$fbname','$pwd')";

if(mysqli_query($connection, $sql)){
    
    //header('location:register.html');
    echo"You have successful registered...";
   
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}



?>
