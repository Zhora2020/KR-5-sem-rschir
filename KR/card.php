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
        $products[$row['id']] = array(
            'name' => $row['name'],
            'price' => $row['price'],
            'view' => $row['view'],
            'imgUrl' => $row['imgUrl']
        );
    }
}


mysqli_close($db);


    echo '
    <div class="product">
            <img class="productImg" src="img/'.$products[$id]['imgUrl'].'" alt="" width="300px">
            <div class="description"><h3>'.$products[$id]['name'].'</h3></div>
            <div class="price"><p>'.$products[$id]['price'].''.$products[$id]['view'].'</p></div>
            <div class="formCart">
                <form action="getpost.php" method="post">
                    <button class="buttonClass" type="submit" name="ids'.$id.'" value="1"> В корзину </button>
                </form>
            </div>
            
        </div>
    ';
?>