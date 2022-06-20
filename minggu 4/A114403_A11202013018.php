<!--Versi 1-->

<?php
$value = 'username';
$password = 'password';
setcookie("username", $value, time() + 60);
setcookie("password", $password, time() + 60); 
?>

<?php
if(!isset($_POST['Submit'])) {
  echo "Cookie named 'user' is not set!";
} 
else {
  echo "Cookie named 'user' is set!<br>";
  echo "Value is: " . $_POST['username'];
}
?>

<html>
<head>
    <title>Cookie</title>
  </head>
  <body>
    <form action="" method ="Post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username" ><br>
      <label for="pwd">Password:</label><br>
      <input type="password" id="password" name="password"  ><br><br>
      <input type="submit" name = "Submit" value ="Submit">
      <input type="reset">
    </form>
  </body>
</html>




<!--Versi 2-->
<!-- <?php
if(!empty($_POST['remember'])) {
  setcookie("username", "");
  setcookie("password",""); 
  echo "Cookie named 'user' is set!<br>";
  echo "Value is: " . $_POST['username'];
} 
else {
  setcookie("username", $_POST["username"], time() + 60);
  setcookie("password", $_POST["password"], time() + 60); 
  echo "Cookie named 'user' is set!<br>";
  echo "Value is: " . $_POST['username'];
}
?>

<html>
<head>
    <title>Cookie</title>
  </head>
  <body>
    <form action="" method ="Post">
      <label for="username">User Name :</label>
      <input type="text" id="username" name="username" value="<?php
      if(isset($_COOKIE["username"])) { 
        echo $_COOKIE["username"]; 
      } ?>" class="input-field"> <br>

      <label for="pwd">Password :</label>
      <input type="password" id="password" name="password" value="<?php 
      if(isset($_COOKIE["password"])) { 
        echo $_COOKIE["password"]; 
      } ?>" class="input-field"> <br><br>

      <input type="checkbox" name="remember">  
      <label for="remember"> Remember me</label><br><br>

      <input type="submit" name = "submit" value ="Submit">
      <input type="reset">
    </form>
  </body>
</html>  -->



