<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Product</title>
</head>
<body>
    <?php 
    $products = [
        'electronics' => "product 1 details: A cool product",
        'furniture' => "product 2 details: Another cool product",
        'toys' => "product 3 details: A really cool product",
        'mobile' => "product 4 details: A great product",
    ];

    if (isset($_GET['category']) && isset($products[$_GET['category']])) {
        $productId = $_GET['category']; // Retrieves the product ID from the URL

        // Display the product details if the ID exists in the array
        if (isset($products[$productId])) {
            echo "<h1>Product Details</h1>";
            echo "<p>" . $products[$productId] . "</p>";
        } else {
            echo "<h1>product not found</h1>";
        }
    } else {
        echo "<h1>No product selected.</h1>";
    }

    ?>
    
</body>
</html>