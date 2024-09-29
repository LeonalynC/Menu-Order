<?php
date_default_timezone_set('Asia/Manila'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $menu = array(
        "burger" => 50,
        "fries" => 75,
        "steak" => 150
    );

    $total = $menu[$order] * $quantity;

    $style = "border:2px dotted black; padding:10px; width:100%; font-weight:bold; font-size:30px;";

    $style1 = "border:2px dotted red; padding:10px; width:100%; font-weight:bold; font-size:30px;";

    if ($cash >= $total) {
        $change = $cash - $total;
        $currentDateTime = date('m/d/Y h:i:s a', time());
        echo "<div style='$style'>
                <h2 style='text-align:center;'>RECEIPT</h2>
                <div style='text-align:left;'>
                    <p>Total Price: $total</p>
                    <p>You Paid: $cash</p>
                    <p>CHANGE: $change</p>
                    <p>$currentDateTime</p>
                </div>
              </div>";
    } else {
        echo "<div style='$style1'>
                <h2 style='text-align:left;'>Sorry, balance not enough.</h2>
              </div>";
    }
}
?>