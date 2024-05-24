<?php
setcookie ("id1", setter(1), time()+3600, '/');
setcookie ("id2", setter(2), time()+3600, '/');
setcookie ("id3", setter(3), time()+3600, '/');
setcookie ("id4", setter(4), time()+3600, '/');
setcookie ("id5", setter(5), time()+3600, '/');
setcookie ("id6", setter(6), time()+3600, '/');


function setter($n) {
    $idName = "ids".$n;
    $idNameDec = "id".$n;
    if (isset($_POST[$idNameDec]) and ($_POST[$idNameDec] = $idNameDec)) {
        $_COOKIE[$idNameDec] -= 1;
        return $_COOKIE[$idNameDec];
    }
    elseif(isset($_POST[$idName])) {
        $_COOKIE[$idNameDec] += $_POST[$idName];
        return $_COOKIE[$idNameDec];
    } 
    elseif ($_COOKIE[$idNameDec] != 0) {
        return $_COOKIE[$idNameDec];
    } 
    else
    {
        return 0;
    }

}
if(isset($_POST["ids1"]) or isset($_POST["ids2"]) or isset($_POST["ids3"]) or isset($_POST["ids4"]) or isset($_POST["ids5"]) or isset($_POST["ids6"])) {
    exit('<meta http-equiv="refresh" content="0; url=index.php" />');
}
if(isset($_POST["id1"]) or isset($_POST["id2"]) or isset($_POST["id3"]) or isset($_POST["id4"]) or isset($_POST["id5"]) or isset($_POST["id6"])) {
    exit('<meta http-equiv="refresh" content="0; url=cart.php" />');
}


?>