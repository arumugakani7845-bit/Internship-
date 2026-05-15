<!DOCTYPE html>
<html>
<body>
    <form method ="Post">
     Number 1:
     <input type="number" name="num1"><br><br>
     Number 2:
     <input type="number" name="num2"><br><br>
    </form>
<?php
if(isset($_POST['add']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    echo"sum=".($a+$b);
}
?>
</body>
</html>