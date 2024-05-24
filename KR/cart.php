<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'products');

if (mysqli_connect_errno()) {
    echo "Ошибка подключения к базе данных: " . mysqli_connect_error();
    exit();
}


$query = "SELECT * FROM products";
$result = mysqli_query($db, $query);


$products = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idcon = "id" . $row['id'];
        $products[$idcon] = array(
            'name' => $row['name'],
            'price' => $row['price'],
            'view' => $row['view'],
            'imgUrl' => $row['imgUrl']
        );
    }
}


mysqli_close($db);


?>
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
 <div class="main"><div class="content">
    <div class="productInCart"><h3>Общая сумма покупки:<?php echo ' '. sum($products); ?> ₽</h3></div>
    <?php
    for ($i = 1; $i <= 6; $i++) {
        $idName = "id".$i;      
            if ($_COOKIE[$idName] != 0) {
                echo '
                <div class="productInCart">
                <img class="productImgCart" src="img/'.$products[$idName]['imgUrl'].'" alt="" width="300px">
              <div class="info"> <div class="description"><h3>'.$products[$idName]['name'].'</h3></div>
                <div class="price"><p>'.$products[$idName]['price'].''.$products[$idName]['view'].'</p></div>
                <div class="formCartAdd">
                    <form action="getpost.php" method="post">
                        <button class="buttonClass" type="submit" name="'.$idName.'" value="'.$idName.'">Удалить из корзины</button>
                    </form>
                </div>
            </div> 
            <div class="count"><p>Количество выбранного товара: '.$_COOKIE[$idName].' шт</p></div></div>';
            }          
        }
        function sum($array) {
            $a = 0;
            for ($i = 1; $i <= 6; $i++) {
                $idNumber = "id".$i;
                $a += $array[$idNumber]['price'] * $_COOKIE[$idNumber];
            }
                return $a;
            }
     
    ?>
    
</div>
    <footer class="footerClass">
    </footer>
    </div>
</body>
</html>