<!--?php
include 'config.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$login    = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    header("location:home.php");
}else{
    header("location:index.php");
}
?-->



