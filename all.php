<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=yokokawa_shop;charset=utf8', 
    'yokokawa_madoka', 'Wert3333-');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach ($pdo->query('select * from product') as $row) {
	echo "<p>$row[id]:$row[name]:$row[price]</p>";
}

    
?>
<?php require 'footer.php'; ?>