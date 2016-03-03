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
    echo "<p>Your order is as follows: </p>";
    echo $tireqty . " tires<br />";
    echo $oilqty . " bottles of oil<br />";
    echo $sparkqty . " spark plugs<br />";
    ?>
</body>
</html>


