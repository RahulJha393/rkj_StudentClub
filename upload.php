<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $cName=$_POST[''];

    $uploadQ="INSERT INTO `drill`( `name`, `enroll`, `phno`, `email`, `year`, `msg`, `date`) VALUES ('$cName','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')";
    
    $query=mysqli_query($con,$uploadQ);

    if($query){
        header('Location:../');
    }
}else{
    //If the form is not submitted one can't access upload.php
    header('Location:../');
}
?>