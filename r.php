<?php
include('conn.php');
if(isset($_GET['del']))
{
    $id=$_GET['del'];
    mysqli_query($con,"delete from user_info where id='$id'");
    header("location:user_info.php");
}
?>
