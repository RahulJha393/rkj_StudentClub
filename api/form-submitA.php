<?php
    $con = new mysqli("localhost", "root", "", "dyna");
    $form_name=$_POST["form_name"];
    $form_enroll_num=$_POST["form_enroll_num"];
    $form_num=$_POST["form_num"];
    $form_email=$_POST["form_email"];
    $form_year=$_POST["form_year"];
    $form_skills=$_POST["form_skills"];
    if($con->query("SELECT count(*) as cou from `drill` where `email`='$form_email'")->fetch_assoc()["cou"]==0){
        $uploadQ="INSERT INTO `drill`( `name`, `enroll`, `phno`, `email`, `year`, `msg`) VALUES ('$form_name','$form_enroll_num',$form_num,'$form_email','$form_year','$form_skills')";
        $con->query($uploadQ);
        echo "ok";
    }else{
        echo "email-exist";
    }