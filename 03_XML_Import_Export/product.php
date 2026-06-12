<?php

$xml = simplexml_load_file("products.xml");

if($xml == false)
{
    die("XML File Load Error");
}

$productsArray = array();

echo "<h2>Products List</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>PID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Qty</th>
      </tr>";

foreach($xml->product as $product)
{
    $row = array(
        "pid"   => (string)$product->pid,
        "pname" => (string)$product->pname,
        "price" => (string)$product->price,
        "qty"   => (string)$product->qty
    );

    $productsArray[] = $row;

    echo "<tr>";
    echo "<td>".$product->pid."</td>";
    echo "<td>".$product->pname."</td>";
    echo "<td>".$product->price."</td>";
    echo "<td>".$product->qty."</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h2>Array Output</h2>";
echo "<pre>";
print_r($productsArray);
echo "</pre>";

?>