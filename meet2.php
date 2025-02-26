<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator by Agriffa</title>
    <style>
        .form{
            color: black;
        }
        .container{
            margin: auto;
            margin-top: 5rem;
            color: black;
            text-align: center;
            width: 200px;
            height: 200px;
            background-image: linear-gradient(90deg, rgba(104,249,232,1) 0%, rgba(118,9,121,1) 100%, rgba(0,212,255,1) 100%);
            padding: 2rem;
        }
        button{
            margin-top: 2rem;
            background-color: pink;
            font-weight: 600;
        }
        button:hover{
            color: blueviolet;
            background-color: white;
        }
        input{
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Calculator</p>
        <form class="form" method="post">
            <label>first numbers: </label>
            <input type="number" class="number" name="angka1" placeholder="input first number">
            <br>
            <label>second numbers: </label>
            <input type="number" class="number" name="angka2" placeholder="input second number"><br>
            <button name="button" value="+">+</button>
            <button name="button" value="-">-</button>
            <button name="button" value="/">/</button>
            <button name="button" value="*">x</button>
        </form>
        <?php
            // echo "hi";
            if(isset($_POST["button"])){
                $setButton = $_POST["button"];
                $angka1 = (int)$_POST["angka1"];
                $angka2 = (int)$_POST["angka2"];
                if ($setButton== "+"){
                    echo $angka1 + $angka2;
                }
                elseif ($setButton== "-"){
                    echo $angka1 - $angka2;
                }
                elseif ($setButton== "/"){
                    echo $angka1 / $angka2;
                }
                elseif ($setButton== "*"){
                    echo $angka1 * $angka2;
                }
            }
        ?>
    </div>

</body>
<!-- // if(isset($_POST["plus"])){
//     $angka1 = (int)$_POST["angka1"];
//     $angka2 = (int)$_POST["angka2"];
//     echo $angka1 + $angka2;
// }
// elseif(isset($_POST["minus"])){
//     $angka1 = (int)$_POST["angka1"];
//     $angka2 = (int)$_POST["angka2"];
//     echo $angka1 - $angka2;
// }
// elseif(isset($_POST["devide"])){
//     $angka1 = (int)$_POST["angka1"];
//     $angka2 = (int)$_POST["angka2"];
//     echo $angka1 / $angka2;
// }
// elseif(isset($_POST["multiplication"])){
//     $angka1 = (int)$_POST["angka1"];
//     $angka2 = (int)$_POST["angka2"];
//     echo $angka1 * $angka2;
// } -->

</html>