<?php 
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSW GEN</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="length">Definisci la lunghezza della password:</label><br>
        <input type="number" id="length" name="length" min="1" max="10">
        <button type="submit">invia</button>
    </form>

    <?php 
    $length = $_GET['length'];
    
    var_dump($_GET);
    $_SESSION['length'] = $length;
    
    //echo $_SESSION['legnth'];
    //var_dump($_SESSION['length']);
    
    // creo funzione

    function randomPsw($length, $array) {
        $psw = [''];
        

        for ($i = 0; $i < $length; $i++) {
            array_rand($length);
            $psw[] = $array[$i];
        }
        return $psw;
    }


    // creo un modo per triggerare la funzione

    if (!empty($length)) {
        $random = ['a','b','c','d','e', 'A', 'B', 'C', 'D', 'E', '1', '2', '3', '4', '5', '!', '@', '^', '*', '?'];
        randomPsw( $random, $length);
    }
    ?>

    <p>La tua nuova password e': <?php echo $psw ?></p>

    

    
</body>
</html>