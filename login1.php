<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login page</title>

    <link href="login.css" rel="stylesheet">

    <!-- SCRIPT  -->

    <!-- <script>
        function lo() {
  var username = document.getElementById("username");
  var password1 = document.getElementById("password1");
  var password2 = document.getElementById("password2");
  var error = document.getElementById("error");

  if(username.value==null || username.value==""){
    alert("Plz Enter your details");

      return false;

  }
   else if(password1.value === password2.value){
     alert("Successfully Submitted");
       return true;
   }
  else {
    alert("Enter Correct Password");
    return false;
  }
}
    </script> -->

  </head>

  <?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname = $_POST['Email_Address'];
    $pwd = $_POST['Password'];

    $conn = mysqli_connect("localhost", "root", "", "book_shop");

    if(!$conn)
    die("connection failed...");

    $que = " SELECT 'password','Email Address' FROM `book_shop` WHERE 'Email Address'='$uname' ";

    $res = mysqli_query($conn,$que);

    if(mysqli_num_rows($res)){

      while($row=mysqli_fetch_assoc($res)){
        $pwd_db = $row['Password'];
        break;
      }
      if($pwd_db==$pwd){
        $_SESSION['Email Address'] = $uname;
        // header("Location:Homepage.php");
      }
      else
      echo "Invalid password...";
  
    }
    else
    echo "Invalid Username or password";
  }
  ?>

  <body class="text-center">

    <main class="form-signin">
      
      <form  action=" " method="POST" >


        <img class="mb-4" src="login_image.jpg" alt="" height="200" width="200">

        <h1 class="h3 mb-3 fw-normal"><b>Book shop</b> - Login</h1>
    
        
        <div class="form-floating">
          <input type="email" class="form-control" id="username" name="Email_Address" placeholder="email">
          <label for="floatingInput">Email address</label><br>
          <p id="hello"></p>
        </div>



        <div class="form-floating">
          <input type="password" class="form-control" id="password1" name="Password" placeholder="Password">
          <label for="floatingPassword">Password</label><br>
        </div>

        
    
        <!-- <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button> -->

        <input class="w-100 btn btn-lg btn-primary mt-3" type="Submit">

        <p class="mt-5 mb-3"><a href="login.html">GO TO SignUp Page</a></p>

      </form>

    </main>


    <script src="login.js"></script>  

  </body>
</html> 