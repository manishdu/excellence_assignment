<?php
$firstnameerr=$lastnameerr=$emailerr=$doberr=$mobileerr=$desierr=$gendererr=$hobbieserr="";
$fname=$lname=$email=$dob=$mobile=$designation=$gender=$hobbies="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["fname"])){
        $firstnameerr= "First name is required.";
    }else
    {
        $fname= test_input($_POST["fname"]);
    }


    if (empty($_POST["lname"])){
        $lastnameerr= "Last name is required.";
    }else
    {
        $lname= test_input($_POST["lname"]);
    }


    if (empty($_POST["email"])){
        $emailerr= "Email is required.";
    }else
    {
        $email= test_input($_POST["email"]);
    }



    if (empty($_POST["dob"])){
        $doberr= "Date Of Birth is required.";
    }else
    {
        $dob= test_input($_POST["dob"]);
    }




    if (empty($_POST["mobile"])){
        $mobileerr= "Telephone/Mobile No. is required.";
    }else
    {
        $mobile= test_input($_POST["mobile"]);
    }



    if (empty($_POST["designation"])){
        $desierr= "Designation is required.";
    }else
    {
        $designation= test_input($_POST["designation"]);
    }




    if (empty($_POST["gender"])){
        $gendererr= "Gender is required.";
    }else
    {
        $gender= test_input($_POST["gender"]);
    }



    if (empty($_POST["hobbies"])){
        $hobbieserr= "Hobbies are required.";
    }else
    {
        $hobbies= test_input($_POST["hobbies"]);
    }

    
    
}

function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}






?>