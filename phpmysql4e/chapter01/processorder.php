<html>
<head>
    <title>Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
    echo "<p>Order processed at " . date('H:i, jS F Y') . "</p>";
    ?>

    <?php
    $tireqty = $_GET['tireqty'];
    $oilqty = $_GET['oilqty'];
    $sparkqty = $_GET['sparkqty'];

    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    echo "Items orderd: " . $totalqty. "<br />";
    $totalamount = 0.00;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

    echo "Subtotal: $" . number_format($totalamount, 2) . "<br />";

    $taxrate = 0.10;
    $totalamount = $totalamount * (1 + $taxrate);

    echo "Total including tax: $" . number_format($totalamount, 2) . "<br />";
    ?>
</body>
</html>


