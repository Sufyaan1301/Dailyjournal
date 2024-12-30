<?php
    session_start();
    include "koneksi.php";
    if(isset($_SESSION['username'])){
        header("location:admin.php");
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $stmt=$conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $hasil=$stmt->get_result();
        $row=$hasil->fetch_array(MYSQLI_ASSOC);
        //perintah login
        if(!empty($row)){
            $_SESSION['username']=$row['username'];
            header("location:admin.php");
        }else{
            header("location:login.php");
        }
        $stmt->close();
        $conn->close();
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card border-0 shadow rounded-5">
                <div class="card-body">
                    <div class="text-center mb-3 fs-3">
                        <img src="img/WEC_logos2.png" class="w-25 rounded-circle">
                        <p>login</p>
                        <hr/>
                    </div>
                    <form action="" method="post" name="form">
                        <input type="text" name="username" class="form-control my-4 py-2 rounded-3" placeholder="Username">
                        <input type="password" name="password" class="form-control my-4 py-2 rounded-3" placeholder="Password">
                        <div class="text-center my-3 d-grid">
                            <button class="btn btn-info rounded-4">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<?php
}
?>  