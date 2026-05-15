<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        feedback:
        <textarea name="feedback"></textarea><br><br>
        <input type="submit" name="send" vlue="submit">
    </form>
    <?php
if(isset($_POST['send']))
{
    echo"Thank you for feedfack";
}
?>
</body>
</html>