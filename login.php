<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $Email = $_POST['Email'];
  $Password =  $_POST['Password'];

  if (!empty($Email) && !empty($Password)) {
    $query = "select * from customer where Email = '$Email' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['Password'] === $Password) {
          $_SESSION['user-id'] = $user_data['user-id'];

          header("Location: address.html#address");
          die;
        }
      }
    }
    $message = "Incorrect username or password!";
  } else {
    $message = "Incorrect username or password!";
  }
}
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Get what you want">
  <title>Vape</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/48d684c0c9.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



</head>


<body>
  <nav style="text-align:center;">
 <h4>"CHOOSE THE BEST E-JUICE FOR YOU NOW!"</h4>
    <a href="home.html#home">Home</a>
    <a href="signin.php">Sign Up</a>
    <a href="about.html#about">About us</a>
  </nav>
  <div class="container">

    <div class="top">
      <div class="text">
        <p style="text-align:center; font-size:30px; color:white;">Log In</p>
      </div>

    </div>


    <div style="max-width: 400px;
    height: 300px;
    position: absolute;
    top: 65%;
   left: 50%;
    bottom: 20%;
    transform: translate(-50%,-50%);
    background-color: rgba(238, 130, 238, 0.407);;
    padding: 20px 30px 30px;
    text-align: center;
    color: white;
    " class="input-container">
      <form method="post">

        <div style="
    align-items: center;
    padding: 3px 5px 4px;
    width:230px;
    transition: max-hieght 0.5s;
    overflow: hidden;
    text-align:center;
    " class="inputbox">
          <label style="text-align:center" for="Email">Email</label> <br>
          <input style="border: 1px solid black;" type="text" class="form-control" id="text" name="Email" required>
        </div>
        <br>
        <div style="
    align-items: center;
    padding: 3px 5px 4px;
    width:230px;
    transition: max-hieght 0.5s;
    overflow: hidden;
    text-align:center;
    " class="inputbox">
          <label for="Password">Password</label>
          <input style="border: 1px solid black;" type="password" class="form-control" id="text" name="Password" required>
        </div>


        <br>

        <div class="create">
          <input type="submit" id="button" style="text-decoration: none;" value="Log in">

        </div>
      </form>
    </div>
  </div>
</body>


</html>
<style>
.input-container{
  color: white;
}

.inputbox::after{
  color: white;
}
.btn-field button{
    flex-basis: 48%;
    background-color: gray;
    color: #fff;
    height: 40px;
    border-radius: 20px;
    align-items: center;
    border:0;
     outline: 0;
     cursor: pointer;
     transition: background 1s; 
     position: relative;
     margin-left: 50px;
    }
.i{
    margin-left: 15px;
    color: black;
}
h3{
    color: rgb(248, 240, 240);
	align-items: center;
    text-align: center;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
}
.btn-field{
    width: 100%;
    display: flex;
    justify-content: space-between;
}

h1 {
	color: rgb(248, 240, 240);
	align-items: center;
    text-align: center;
    font-size: 50px;
    font-family: 'Times New Roman', Times, serif;
}
h2{
    color: #fff;
	align-items: center;
    text-align: center;
    font-size: 40px;
    font-family: 'Times New Roman', Times, serif;
    padding-top: 70px;
}
header {
	background-color:  rgba(238, 130, 238, 0.279);
	position: relative;
    align-items: center;
}
nav {
    background-color:rgba(0, 0, 0, 0.346) ;
    text-align: center;
    padding-top: 14px;
    padding-bottom: 14px;
    font-size: 15px;
    width: 600px;

}
nav a {
    text-decoration: none;
    color: white;
    padding-left: 10px;
    padding-right: 10px;
    letter-spacing: 1x;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
}
nav a:hover{
   background-color: rgba(128, 128, 128, 0.489);
}
h2 {
	font-size: 48px;
	margin: 0;
}
footer {
	background-color: rgba(0, 0, 0, 0.5);
	color: #fff;
	padding: 10px;
	text-align: center;
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
}
h4{
    color: gainsboro;
	align-items: center;
    text-align: center;
    font-size: 19px;
    font-family: 'Times New Roman', Times, serif;
    padding-top: 10px;
}
</style>