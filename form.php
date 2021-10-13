<!doctype html>
<?php 

include("conn.php");
include("formvalidate.php");

?>
<html lang="en">
  <head>
      <style>
          h1{
              color:Green;
          }
      .error {
          color : #FF0000;
          font-weight:bold;
      }
      </style>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="row">
          
<div class="col-md-2">
    
    </div>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
    <br>
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form</h1>
    <br>
        <label for="">First Name</label>
        <input type="text" name="fname" id="">&nbsp;&nbsp;&nbsp;<span class="error"><?php echo $firstnameerr;?></span><br><br>
        <label for="">Last name</label>
        <input type="text" name="lname" id="">&nbsp;&nbsp;&nbsp;<span class="error"><?php echo $lastnameerr;?></span><br><br>
        <label for="">Email</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id=""><span class="error"><?php echo $emailerr;?></span><br><br>
        <label for="">Date of Birth</label>
        <input type="date" name="dob" id=""><span class="error"><?php echo $doberr;?></span><br><br>
        <label for="">Telephone/Mobile No.</label>
        <input type="number" name="mobile" id=""><span class="error"><?php echo $mobileerr;?></span><br><br>
        <label for="">Designation</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="designation" id=""><span class="error"><?php echo $desierr;?></span><br><br><br>
        <label for="">Gender:<span class="error"><?php echo $gendererr;?></label><br>
Male <input type="radio" name="gender" value="male" id="5"><br><br>
Female <input type="radio" name="gender"value="female" id="6"><br><br>
Others <input type="radio" name="gender"value="others" id="7"><br><br>

<label for="">Hobbies:<span class="error"><?php echo $hobbieserr;?></label><br>
<input type="checkbox" name="hobbies" value="Photography"id="1"> Photography<br><br>
<input type="checkbox" name="hobbies" value="Writing"id="2"> Writing<br><br>
<input type="checkbox" name="hobbies" value="Cooking"id="3"> Cooking<br><br>
<input type="checkbox" name="hobbies" value="Dance"id="4"> Dance<br><br>


<button type="submit" name="sub" class="btn btn-success">Submit</button><br>
<br>
</form>
    
</div>
<?php
if(isset($_POST['sub']))
{
    extract($_POST);
    $m=mysqli_query($con,"insert into user_info(firstname,lastname,email,dateofbirth,mobile,designation,gender,hobbies)values
    ('$fname','$lname','$email','$dob','$mobile','$designation','$gender','$hobbies')")
    or die(mysqli_error($con));
    
}




?>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
