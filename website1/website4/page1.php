<?php
if(isset($_POST['submit'])){
        session_start();//start session

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php');
        


}
?>
<!DOCTYPE html>
<html>
<head>
        <title>PHP SESSIONS</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name: '';?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: '';?>">
                </div>      
            <br>
            <input type="submit" name="submit" value="Submit">
 </form>

</body>
</html>