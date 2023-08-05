<?php
require_once "../classes/OrderLifecycle.php";
require_once "../classes/PigeonOrderLifecycle.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factory Method</title>
</head>
<body>

</body>
</html>

<?php
$order = '10025';
$postOfficeOrder = new OrderLifecycle();
$pigeonOrder = new PigeonOrderLifecycle();

$postOfficeOrder->processOrder($order);
$pigeonOrder->processOrder($order);
?>