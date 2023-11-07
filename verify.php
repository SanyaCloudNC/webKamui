<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location: index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Weboard KMUTNB</h1>
    <hr>
    <div align="center">
        <?php
            $login=$_POST['login'];
            $pwd=$_POST['pwd'];
            if($login=="admin" && $pwd =="ad1234"){
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
                echo "ยินดีต้อนรับคุณ ADMIN <br>";
            }elseif
                ($login=="member" && $pwd =="mem1234"){
                    $_SESSION['username']='member';
                    $_SESSION['role']='m';
                    $_SESSION['id']=session_id();
                    echo "ยินดีต้อนรับคุณ MEMBER <br>";
            }else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูต้อง <br>";
            }
        ?>
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>
</body>
</html>