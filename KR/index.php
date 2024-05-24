
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <title>Курсовая</title>
</head>
<body>
    <header class="header">
        <div class="flexbox">
            <div class="logo">
                <h1><span style="color: rgb(44, 219, 211);">И</span>нтернет <span style="color: rgb(44, 219, 211);">М</span>агазин</h1>
            </div>
            <div class="products">
                <a href="index.php">Список товаров</a>
            </div>
            <div class="cart">
             <a href="cart.php"><img src="img/cart-w.png" alt="" height="25px" style="padding-top: 7px;"></a> <p style="padding-left: 10px;"><a href="cart.php">Корзина</a></p>
            </div>
        </div>
    </header>
    <div class="container">
        <?php 
            $id = '1';
            include 'card.php';
        ?>
       <?php 
            $id = '2';
            include 'card.php';
        ?>
        <?php 
            $id = '3';
            include 'card.php';
        ?>
    </div>
    <div class="container">
    <?php 
            $id = '4';
            include 'card.php';
        ?>
       <?php 
            $id = '5';
            include 'card.php';
        ?>
        <?php 
            $id = '6';
            include 'card.php';
        ?>
        </div>
    <footer class="footerClass">
    </footer>
</body>
</html>
