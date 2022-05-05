<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

    if(isset($_GET['ex1'])){
        $a = $_GET['ex1'];
        for ($i = 0; $i <= $a; $i++){
            echo $i;
        }
    }

    ?>

</head>
<body>
    <h2>1)</h2>
    <form action="index.php" method="get">
        <input type="number" id="ex1" name="ex1">
        <input type="submit">
    </form>
    
</body>
</html>