<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signinstyle.css">
    <title>Document</title>
</head>
<body>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];
            if($login == "admin" and $password == "admin"){
                header('Location: ../index.html',true,303); // redirectionare la pagina princimala
            } else{
                header('Location: signin.php',true,303); //intoarcerea la pagina principala
            }     
    }
?>
    <h1 id="header">Login</h1>
    <div class="container">
        <h2 class="title">Registration</h2>
        <form action="signin.php" name="registration" method="POST">
      
          <label for="login">First Name</label>
          <input type="text" name="login" id="login" placeholder="LOGIN">
      
          <label for="password">Last Name</label>
          <input type="password" name="password" id="password" placeholder="PASSWORD">
        
          <button type="submit">Register</button>
          <a href="createacount.php" id="create_ref">create acount</a>
        </form>
      </div>
      
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
      <script src="../scripts/validation/loginval.js"></script>
</body>
</html>