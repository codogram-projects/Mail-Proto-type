<?php
session_start();
$text="";
if(isset($_POST['username']) && isset($_POST['password'])){
$uname=$_POST['username'];
$pswrd=$_POST['password'];
if ($uname=='alex@sicsr.ac.in' and $pswrd=='alex!23'){
    $text="Login Success.";
    
    $_SESSION['login_name'] = $uname;
    header('location: main.php');
    
}
else{
   $text='Incorrect Credentials.';
   
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ankush Kumar </title>
</head>
<body>
    <div class="container" align="center" style="margin-top:20%;">
    <h1 style="margin-top:20px;">Mailing protocol </h1>
        <form action="#" method="post">
            <label>USERNAME: </lable><input type="text" placeholder="Enter Username" name="username" id="username" required/>
            <br>
            <br>
            <label>PASSWORD: </lable><input type="password" placeholder="Enter Password" name="password" id="password" required/>
            <br>
            <br>
            <button type="submit" name="submit">SUBMIT</button>
            <br>
            <?php echo $text; ?>
</form>
    </div>
    
</body>
</html>