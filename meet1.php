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
    </style>
</head>
<body>
    <form method="POST" class="login">
        <p>Name</p>
        <input name="name" placeholder="masukan nama anda">
        <p>Umur</p>
        <input name="Umur" placeholder="masukan umur anda" required>
        <br>
        <button name="button" class="button">Klik</button>
        <p><?php
// kalo get ga private, kalo post private
    if (isset($_POST['button'])){
        $nama= $_POST['name'];
        $Umur= $_POST['Umur'];
        echo "Halloooo $nama umur kamuu  $Umur, <br>Kamu harus semangat ya hari ini😊";
         // Ganti "index.php" dengan nama file
    exit();
    }
?> </p>
    </form>
</body>

</html>