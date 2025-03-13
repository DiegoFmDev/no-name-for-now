<?php
// Start session for cart functionality if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalin - Modern Fashion Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Top Bar -->
    <!-- <div class="container-fluid bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <small><i class="fas fa-envelope me-2"></i> example@example.com</small>
                    <small class="ms-3"><i class="fas fa-map-marker-alt me-2"></i> City, State, ZIP Code</small>
                </div>
                <div class="col-md-6 text-end">
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-sm text-white dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                        </ul>
                    </div>
                    <a href="#" class="text-white ms-2 social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white ms-2 social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white ms-2 social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white ms-2 social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white ms-2 social-icon"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm sticky-top">
        <div class="container">
            <div class="col-xl-2 col-lg-2 col-md-6">
                <a class="navbar-brand" href="index.php">
                    <span class="fw-bold">Minimal</span><span class="fw-bold text-primary">in</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home <span class="badge bg-danger ms-1">New</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="index.php">Home v1</a></li>
                                <li><a class="dropdown-item" href="#">Home v2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop <span class="badge bg-primary ms-1">Hot</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                                <li><a class="dropdown-item" href="shop.php">All Products</a></li>
                                <li><a class="dropdown-item" href="#">Product Details</a></li>
                                <li><a class="dropdown-item" href="cart.php">Cart</a></li>
                                <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <li><a class="dropdown-item" href="category.php?type=men">Men's Clothing</a></li>
                                <li><a class="dropdown-item" href="category.php?type=women">Women's Clothing</a></li>
                                <li><a class="dropdown-item" href="category.php?type=accessories">Accessories</a></li>
                                <li><a class="dropdown-item" href="category.php?type=footwear">Footwear</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                <li><a class="dropdown-item" href="blog.php">Blog List</a></li>
                                <li><a class="dropdown-item" href="blog-detail.php">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                                <li><a class="dropdown-item" href="404.php">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-3">
                            <button class="btn btn-sm dropdown-toggle" type="button" id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                US (USD $)
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                                <li><a class="dropdown-item" href="#">US (USD $)</a></li>
                                <li><a class="dropdown-item" href="#">EUR (€)</a></li>
                                <li><a class="dropdown-item" href="#">GBP (£)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="text-dark me-3 nav-icon"><i class="fas fa-search"></i></a>
                        <a href="account.php" class="text-dark me-3 nav-icon"><i class="fas fa-user"></i></a>
                        <a href="cart.php" class="text-dark position-relative nav-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary animate__animated animate__pulse animate__infinite">
                                <?php echo count($_SESSION['cart']); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>