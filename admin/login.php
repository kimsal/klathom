<?php
    ob_start(); // Initiate the output buffer
?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Login</title>
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block .btn {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block .btn:hover {
    background: #ff7b81;
}

</style>
<link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
    include('admin/checklogin.php');
    echo $checklogin;
    if($checklogin==1){
        ?>
        <script type="text/javascript">
           location.href = "<?php echo $domain; ?>?admin=1";
        </script>
        <?php
    }
?>

<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post">
    <input type="text" value="" placeholder="ឈ្មោះ" name="username" required/>
    <input type="password" value="" placeholder="លេខកូដ" name="password" required/>
    <input type="hidden" name="ch"/>
    <input type="submit" class="btn" value="Login"/>
    </form>
    <?php 
    if(isset($_POST['ch'])){
        include('config/config.php');
        $username=$_POST['username'];
        $password=$_POST['password'];
      
        $rs=mysqli_query($con,"Select uid from tbuser Where login_name='".$username."' AND password='".md5($password)."'");
        $count=0;
        $uid=0;
        while($row=mysqli_fetch_array($rs)){
            $uid=$row[0];
            $count=1;
        }
        if($count==0){
            echo '<h4 style="color:red;">Invalid username or Password!</h4>';
        }
        else{
            //password will expired in 30 days afte login in
            setcookie("khlathom_username", $username, time() + (86400 * 30),'/'); // 86400 = 1 day
            setcookie("khlathom_password", $password, time() + (86400 * 30),'/'); // 86400 = 1 day
            setcookie("khlathom_userid", $uid, time() + (86400 * 30),'/'); // 86400 = 1 day
           // echo 'user name = '.$_COOKIE['khlathom_username'].' pwd ='.$_COOKIE['khlathom_password'];
            ?>
            <script type="text/javascript">
               location.href = "<?php echo $domain; ?>?admin=1";
            </script>
            <?php
        }           
    }
    
    ?>
</div>
</body>

</html>

<?php
    ob_end_flush(); // Flush the output from the buffer
?>