<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 24.01.18
 * Time: 19:11
 */


$product_name = 'Paket 1';
$product_price = 19.99;
$product_category = 'Sportnahrung';
$product_description = 'Dieser Whey Protein Shake usw......';

$products[0]['name'] = 'Paket 1';
$products[0]['price'] = 19.99;
$products[0]['category'] = 'Sportnahrung';
$products[0]['description'] = 'blablatestest'

$products[0] = array (
    'name' => 'Paket 1',
    'price' => 19.99,
    'catergory' => 'Sportnahrung'
    'description' => 'Dieser Whey Protein Shake usw.';
);

$products[1] = array (
    'name' => 'Paket 2',
    'price' => 19.99,
    'catergory' => 'Sportnahrung'
    'description' => 'Das ist der Whey Protein Shake 2 und so';
);


echo "<h2 style='text-align:center;'>Health Plus Online Shop! </h2>
<h3> Our Products<h3/>
    <p>;
    foreach($products as $product) {
    echo "<span style='font-weight:bold;'>" . $product['name'] . "</span><br />" .
    "Price: $" . $product['price'] . <br /> .
    "Category: " . $product['category'] . <br /> .
    $product['description'] .
    </p> ;

    Category: " . $products[0]['category'] . "<br />
    Beschreibung: " . $products[0]['description'] . "<br />
    \"<br />
    " . $products[1]['name'] . "<br />
    Price: $" . $products[1]['price'] . "<br />
    Category: " . $products[1]['category'] . "<br />
    Beschreibung: " . $products[1]['description'] . "<br />

