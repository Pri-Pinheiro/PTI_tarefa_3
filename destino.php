<?php
$aluno = $_POST['aluno'];
$usuario = $_POST['email'];
$senha = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:rgb(241, 235, 235);">
    <center>
        <div style="border: 1px solid #ffff;
                    border-radius:5px; background-color:#ffff; 
                    width: 280px; height: 100px; padding: 15px; text-align: center; 
                    box-shadow: 1px 2px 5px; margin-top:50px; color:blue">
            <h1>
                Bem vindo(a),<br><?php echo $aluno ?>!
            </h1>
        </div>
    </center>
</body>

</html>