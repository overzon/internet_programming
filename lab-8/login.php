<?php

include("connectdb.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $myusername = mysqli_real_escape_string($conn,$_POST['UserLogin']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['PassLogin']);

  $sql = mysqli_query($conn,"SELECT * FROM customer WHERE username = '$myusername' AND password = '$mypassword' ");
  $num = mysqli_num_rows($sql);

  if($num == 1) {
    // session_register("myusername");
    $_SESSION['login_user'] = $myusername;

    header("location: Lab8_59523206016-9.php");
 }else {
    $error = "Your Login Name or Password is invalid";
 }
}
 ?>
<html>
<head>
  <style>
  body{
    background-color: #9CA0B7;
  }
  .body{
    border: 5px solid black;
    border-radius: 25px;
    margin: 100px auto;
    background-color: #FF99CC;
    width: 450px;
    height: 500px;
  }
  .col{
    margin: 0px 12%;
    /* background-color: #000000; */

  }
  .imglogin{
    margin: 10px 35%;
  }

  input[type=text] {
    border: 5px solid black;
    border-radius: 15px;
     width: 300px;
     height: 50px;
      padding: 12px 20px;
      margin: 10px 20px;
      box-sizing: border-box;
      border: none;
      border: 5px solid #E0E0E0;
      box-shadow: 5px 10px 5px grey;
  }
  input[type=text]:focus {
      background-color: lightblue;
  }

  input[type=password] {
    border: 5px solid black;
    border-radius: 15px;
      padding: 12px 20px;
      width: 300px;
      height: 50px;
      margin: 10px 20px;
      box-sizing: border-box;
      border: none;
      border: 5px solid #E0E0E0;
      box-shadow: 5px 10px 5px grey;
  }
  input[type=password]:focus {
      background-color: lightblue;
  }
  input[type=submit] {

    background-color: #8592E6;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    display: inline-block;
    font-size: 24px;
      padding: 5px 20px;
      width: 300px;
      height: 50px;
      margin: 10px 20px;
      box-sizing: border-box;
      border: 5px solid black;
      border-radius: 15px;
      border: 5px solid #D8DDFF;
      box-shadow: 5px 10px 5px grey;
  }

  input[type=submit]:hover{
    cursor: pointer;
  }
  input[type=submit]:active {
  background-color: #8592E6;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  H1{
    margin: center;
  }
  </style>
</head>

<body>
<div class="body">

    <form method="post" name="loginform" action="">
      <div class="col">
        <H1>Login</H1>
        <div>
          <img src="login.png" class="imglogin" width="125" height="125">
        </div>
      <input type="text" name="UserLogin" placeholder="Username" required/><br>
      <input type="password" name="PassLogin" placeholder="Password" required/>
      <input type="submit" name="sm" placeholder="login" value="Login"/>
      </div>
    </form>
</div>
</body>
</html>
