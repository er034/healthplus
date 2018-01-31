<?php
// include database configuration file
include 'db.php';

// initializ shopping cart class
include 'warenkorb.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: uebersicht_alt.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM benutzer WHERE b_id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container{width: 100%;padding: 50px;}
        .table{width: 65%;float: left;}
        .shipAddr{width: 30%;float: left;margin-left: 30px;}
        .footBtn{width: 95%;float: left;}
        .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container">
    <h1>Order Preview</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                ?>
                <tr>
                    <td><?php echo $item["p_name"]; ?></td>
                    <td><?php echo '$'.$item["p_preis"].' EURO'; ?></td>
                    <td><?php echo $item["wp_menge"]; ?></td>
                    <td><?php echo '$'.$item["w_gesamtpreis"].' EURO'; ?></td>
                </tr>
            <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' EURO'; ?></strong></td>
            <?php } ?>
        </tr>
        </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $custRow['b_vorname']; ?></p>
        <p><?php echo $custRow['b_nachname']; ?></p>
        <p><?php echo $custRow['b_email']; ?></p>
        <p><?php echo $custRow['b_strasse']; ?></p>
        <p><?php echo $custRow['b_hausnummer']; ?></p>
        <p><?php echo $custRow['b_plz']; ?></p>
        <p><?php echo $custRow['b_stadt']; ?></p>
    </div>
    <div class="footBtn">
        <a href="uebersicht_alt.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="warenkorb_action.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>
Order Success (orderSuccess.php)
The customer is redirected to this page if their order is submitted successfully.

<?php
if(!isset($_REQUEST['b_id'])){
    header("Location: uebersicht_alt.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <style>
        .container{width: 100%;padding: 50px;}
        p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>
</body>
</html>