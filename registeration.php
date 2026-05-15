<!DOCTYPE html>
<html>
<head>
 <title>Registeration form</title>
</head>
<body>
<form method="Post">
 Name:
  <input type="test"name="name"><br><br>
Email:
  <input type="email"name="email"><br><br>
password:
  <input type="password"name="password"><br><br>
  <input type="submit"name="submit"value="Register">
  </form>
  <?php
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    echo"Registeration successful<br>";
    echo"name:$name<br>";
    echo"email:$email";
  }
  ?>
</body>
</html>