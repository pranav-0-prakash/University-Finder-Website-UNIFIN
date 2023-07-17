<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="signup.css" />
<link rel="website icon" type="png" href="https://lh3.googleusercontent.com/uXmBzx5DIc3i4pWyoDAEIYVe9fNKzFSVdHLcnziVYio_ItGDYA8P60jFZ0c2kpSWCe-cI_LvxbvUugnG2n_Snbh9Jnq4N39kYs-eAZE" />
    
    <title>Unifin Sign Up Page</title>
<style>
        #GFG {
            text-decoration: none;
        }
    </style>
  </head>
  <body background = "https://i.pinimg.com/originals/b1/6d/90/b16d909fa4fbf4f57c549e8a956ae81c.jpg"> 
<header>
  <button data-text="Awesome" class="button">
    <span class="actual-text">&nbsp;Unifin&nbsp;</span>
    <span class="hover-text" aria-hidden="true">&nbsp;Unifin&nbsp;</span>
   </button><br>
<br><h4> University Finder</h4>
    </header>
    <main>
      <form  method="post">
        <h2>Sign Up</h2>
        <input type="text" placeholder="Username" name="username" />
  <input type="text" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
  <input type="phoneNumber" placeholder="Contact" name="phone" />


        <button> 
  <a id="GFG" href="login.html"><span class="button_top" onclick="formlog();"> Submit
  </span></a>
</button>
<p align = "center" > Already have an account? <a href ="login.php"> Login </a></p>
      </form>
    </main>

    <footer>
           <span class="copyright_text">Copyright © 2023 <a href="#">University Finder </a>  All rights reserved </span><br>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
    </footer>

  </body>
</html>

<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];


$conn = new mysqli('localhost','root','','contact_us');

if($conn->connect_error) {
    die('Unable to connect, please try again '.$conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO signup(username, email, password, phone)
        VALUES(?, ?, ?, ?)");
    $stmt->bind_param("sssi",$username, $email, $password, $phone);
    $stmt->execute();
    header('location: login.php');
    
    $stmt->close();
    $conn->close();
}
?>