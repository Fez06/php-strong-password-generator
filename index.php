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
    
        
        $random = [''];
        $dato = $_GET['length'];
        for ($i = 0; $i < count($dato); $i++) {
            array_rand($random, $dato);
            $psw[] = $random[$i];
        }
        return $psw;
    }


    // creo un modo per triggerare la funzione
    
    if (!empty($length)) {
    $random = ['a','b','c','d','e', 'A', 'B', 'C', 'D', 'E', '1', '2', '3', '4', '5', '!', '@', '^', '*', '?'];    
    $psw = randomPsw( $random, $length);
    return $psw;    
    }
    ?>

    <p>La tua nuova password e': <?php echo $psw ?></p>

    

    
</body>
</html>