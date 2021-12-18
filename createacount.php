<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create_acount_style.css">
    <title>Document</title>
</head>
<body>
<?php 
 require_once 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $login = $_POST['login'];
      $password = $_POST['password'];
      if(preg_match("/.+/i",$firstname ) and
              preg_match("/.d+/i", $lastname) and
              preg_match("/.+@.+\..+/i", $email) and
              preg_match("/.{5}/i", $login) and
              preg_match("/.{5}/i", $password) ){

            echo '<script>alert("user adaugat")</script>';;
          
      } else{
        echo '<script>alert("date introduse incorect")</script>';;
      }
        
    }
?>
    <h1 id="header">Create acount</h1>
    <div class="container"> 
  
      <form action="createacount.php" name="registration" method="POST">
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" id="firstname" placeholder="first name">
      
          <label for="lastname">Last Name</label>
          <input type="text" name="lastname" id="lastname" placeholder="last name">

          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="exampe@mail.com">
      
          <label for="login">Login</label>
          <input type="text" name="login" id="login" placeholder="login">

          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="password">
          <button >Register</button>
          
          <a href="signin.php" id="index_ref"> LogIN</a>
        </form>

      </div>
      
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="../scripts/validation/acountval.js"></script>
</body>
</html>