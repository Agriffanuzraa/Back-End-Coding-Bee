<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: black;
            font-weight: 900;
        }
        .login{
            background-color: pink;
            border: 1px solid whitesmoke;
            width: 400px;
            padding: 2rem;
            text-align: center;
            margin: auto;
            margin-top: 10rem;
        }
        input{
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }
        .button{
            margin-top: 2rem;
            border-radius: 5px;
            background-color: lightsalmon;
            width: 4rem;
        }
        .button:hover{
            background-color: white;
        }
        .hi{
            color:purple;
        }
    </style>
</head>
<body>
    <form method="POST" class="login">
        <p>Username</p>
        <input name="name" placeholder="masukan username anda">
        <p>Password</p>
        <input name="Pass" placeholder="masukan password anda" required>
        <br>
        <button name="button" class="button">Login</button>
        <p><?php
// kalo get ga private, kalo post private
    if (isset($_POST['button'])){
        $nama= $_POST['name'];
        $Pass= $_POST['Pass'];
        $username = "Agriffa";
        $password = "codingbee123";
        if ($nama == $username && $Pass == $password){
            echo "Hallo! $nama,<br>Login Succefully! <br>Kamu harus semangat ya hari ini😊";
        } else{
            echo"<p class='hi'>oh no username or password you wrong!</p>";
        }
         // Ganti "index.php" dengan nama file
    exit();
    }
?> </p>
    </form>
</body>

</html>