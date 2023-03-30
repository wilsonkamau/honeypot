<?php

session_start(); 
$_SESSION;
?>

<!DOCTYPE html>
<html lang="">
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>singup</title>

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

.container {
  background: linear-gradient(to bottom, rgb(250,250,250) 0%, rgb(200,200,200) 100%), url(art.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 20px;
  padding: 20px;
  margin:auto;
  margin-top: 20px;
  width: 80%;
  position: relative;
  box-shadow: 5px 5px 5px rgb(200,200,200);
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border-radius: 20px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

a {
  color: #4CAF50;
}

.hero-img {
    position: absolute;
    right: 10%;
    top: 200px;
    width: 400px;
}
input {
  width: 50%;
}
@media only screen and (max-width: 650px) {
  .hero-img {
    display: none;
  }
}
</style>

    </head>
    <body>
        
        <div id="box" class="container">
            <h1>Signup</h1>
        <form action="submit-form.php" method="POST">
        <img src="./art.png" alt="hero image" class="hero-img" />
  <label for="mac-address">MAC Address:</label><br>
  <input type="text" id="mac-address" name="mac_address"><br><br>

  <label for="ip-address">IP Address:</label><br>
  <input type="text" id="ip-address" name="ip_address"><br><br>

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br><br>

  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id"><br><br>

  <input type="submit" value="Submit"><br><br>
  <a href="login.php"> click to login</a><br></br>
        </form>
            
             
        

        </div>
    </body>
</html>