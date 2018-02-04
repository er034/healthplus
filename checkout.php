<?php
// include database configuration file
include 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// initializ shopping cart class
include 'warenkorb.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: uebersicht.php");
}

// set customer ID in session
$id = "id";
$email    = "email";
$firstname    = "firstname";
$lastname    = "lastname";
$street    = "street";
$housenumber   = "housenumber";
$postcode    = "postcode";
$city    = "city";

        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['username']);
            header("location:/~er034/abmelden.php");
        }
        ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index_alt.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>

<?php
$results = mysqli_query($db, "SELECT * FROM users"); ?>


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
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
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
        <?php while ($row = mysqli_fetch_array($results)) { ?>

                <p><?php echo $row['firstname']; ?></p>
                <p><?php echo $row['lastname']; ?></p>
                <p><?php echo $row['email']; ?></p>
                <p><?php echo $row['street']; ?></p>
                <p><?php echo $row['housenumber']; ?></p>
                <p><?php echo $row['postcode']; ?></p>
                <p><?php echo $row['city']; ?></p>
        <?php } ?>

    </div>
    <div class="footBtn">
        <a href="uebersicht.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="warenkorb_funktion.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
    <?php
    //Bezahlmethode Auswahl durch Radio Checkbox:
    ?>
    Wähle deine Bezahlmethode:
    <br />

    <input type="radio" name="bezahlmethode"
        <?php if (isset($bezahlmethode) && $bezahlmethode=="nachname") echo "checked";?>
           value="nachname">Nachname
    <input type="radio" name="bezahlmethode"
        <?php if (isset($bezahlmethode) && $bezahlmethode=="paypal") echo "checked";?>
           value="paypal">Paypal




</div>
</body>
</html>