<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location: index.php");
        die();
    }
?>
<?php
    $login = $_POST['login'];
    $passwd = sha1($_POST['pwd']);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","cddslcdhve","130H216G76Y5GH0F$");
    
    $sql = "SELECT * FROM user where login='$login'";
    
    $result=$conn->query($sql);

    if($result->rowCount()==1){
        $_SESSION['add_login']="error";
    } else
     {
    $sql1 = "INSERT INTO user (login, password, name, gender, email, role)
     VALUES ('$login','$passwd','$name','$gender','$email','m')";
    $conn->exec($sql1);
    $_SESSION['add_login']='success';
    }
    $conn = null;
    header("location: register.php");
    die();
?>