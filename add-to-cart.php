<?php
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if product_id is set
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    
    // In a real application, you would fetch product details from the database
    // For this demo, we'll use sample data
    $products = [
        1 => [
            'id' => 1, 
            'name' => 'Blue Checkered Shirt', 
            'price' => 49.99, 
            'image' => 'assets/images/products/blue-shirt.jpg',
            'category' => 'Men'
        ],
        2 => [
            'id' => 2, 
            'name' => 'Navy Chinos', 
            'price' => 59.99, 
            'image' => 'assets/images/products/navy-pants.jpg',
            'category' => 'Men'
        ],
        3 => [
            'id' => 3, 
            'name' => 'Brown Leather Shoes', 
            'price' => 89.99, 
            'image' => 'assets/images/products/brown-shoes.jpg',
            'category' => 'Footwear'
        ],
        4 => [
            'id' => 4, 
            'name' => 'Red Plaid Shirt', 
            'price' => 45.99, 
            'image' => 'assets/images/products/plaid-shirt.jpg',
            'category' => 'Men'
        ]
    ];
    
    // Check if product exists
    if (isset($products[$product_id])) {
        // Check if product is already in cart
        $found = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $product_id) {
                $_SESSION['cart'][$key]['quantity']++;
                $found = true;
                break;
            }
        }
        
        // If product is not in cart, add it
        if (!$found) {
            $product = $products[$product_id];
            $product['quantity'] = 1;
            $_SESSION['cart'][] = $product;
        }
        
        // Set success message
        $_SESSION['message'] = 'Product added to cart successfully!';
        $_SESSION['message_type'] = 'success';
    } else {
        // Set error message
        $_SESSION['message'] = 'Product not found!';
        $_SESSION['message_type'] = 'danger';
    }
} else {
    // Set error message
    $_SESSION['message'] = 'Invalid request!';
    $_SESSION['message_type'] = 'danger';
}

// Redirect back to previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>

