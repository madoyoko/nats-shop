<?php require 'header.php';?>
<?php
foreach($_REQUEST['genre']as $item){
    echo '<P>',$item,'<P>';
}
echo'に関するお買い得情報をお送りさせて頂きます｡';
echo implode ($_POST['genre']);
?>
<?php require 'footer.php'; ?>  