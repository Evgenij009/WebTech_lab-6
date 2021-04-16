<?php
session_start();
if (isset($_POST['colorBackground'])) {
    $_SESSION['colorBackground'] = $_POST['colorBackground'];
    echo "GET - получен<br>";
}

if (isset($_POST['colorFont'])) {
    $_SESSION['colorFont'] = $_POST['colorFont'];
}

if (isset($_POST['colorHead'])) {
    $_SESSION['colorHead'] = $_POST['colorHead'];
}

if (isset($_POST['sizeFont'])) {
    $_SESSION['sizeFont'] = $_POST['sizeFont'];
}

if (isset($_SESSION['colorBackground'])) {
    $colorBackground = $_SESSION['colorBackground'];
    echo "session is done";
}

if (isset($_SESSION['colorFont'])) {
    $colorFont = $_SESSION['colorFont'];
}

if (isset($_SESSION['colorHead'])) {
    $colorHead = $_SESSION['colorHead'];
}

if (isset($_SESSION['sizeFont'])) {
    $sizeFont = $_SESSION['sizeFont'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab-6</title>
</head>

<body>

    <div class="head">
        <h1>Заголовок</h1>
    </div>

    <form action="" method="POST">
        <label>Color background: <input type="color" name="colorBackground" value="<?php if (isset($_SESSION['colorBackground'])) {
                                                                                        echo $_SESSION['colorBackground'];
                                                                                    } else {
                                                                                        echo "#ffffff";
                                                                                    }  ?>"></label><br>
        <label>Color head: <input type="color" name="colorHead" value="<?php if (isset($_SESSION['colorHead'])) {
                                                                            echo $_SESSION['colorHead'];
                                                                        } else {
                                                                            echo "#ffffff";
                                                                        }  ?>"></label><br>
        <label>Color font: <input type="color" name="colorFont" value="<?php if (isset($_SESSION['colorFont'])) {
                                                                            echo $_SESSION['colorFont'];
                                                                        } else {
                                                                            echo "#000000";
                                                                        }  ?>"></label><br>
        <label>Size font: <input type="range" name="sizeFont" min="5" max="100" value="<?php if (isset($_SESSION['sizeFont'])) {
                                                                                            echo $_SESSION['sizeFont'];
                                                                                        } else {
                                                                                            echo "20";
                                                                                        }  ?>" step="5"> </label>
        <br><input type="submit">
    </form>

    <style>
        body {
            background-color: <?php echo $colorBackground ?>;
            color: <?php echo $colorFont ?>;
            font-size: 25px;
        }

        .head {
            background-color: <?php echo $colorHead ?>;
            font-size: <?php echo $sizeFont ?>;
        }
    </style>

</body>

</html>