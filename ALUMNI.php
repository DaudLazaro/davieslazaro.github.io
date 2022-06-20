<?php
 $connection=mysqli_connect("localhost","root","","system_alumni");
if($connection == false){
    die("Couldn't connect". mysqli_connect_error());
}


$alname=$_POST['alname'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];
$hme=$_POST['hme'];
$hmg=$_POST['hmg'];
$ft=$_POST['ft'];
$sresults=$_POST['sresults'];
$occupation=$_POST['occupation'];
$address=$_POST['adress'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$pwd-repeat=$_POST['pwd-repeat'];

$sql = "INSERT INTO alumni (Names,YOE,YOG,HME,HMG,FTG,YR,OCCUPATION,ADDRESSS,EMAIL,PHONE,PASSWORDS,REPEATED) 
VALUES('$alname','$yoe','$yog','$hme','$hmg','$ft','$sresults','$occupation','$address','$email','$phone','$pwd','psw-repeat')";

if(mysqli_query($connection, $sql)){
    
    //header('location:register.html');
    echo"You have successful registered...";
   
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}



?>
