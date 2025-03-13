<?php
// Include header file
include 'includes/header.php';

// In a real application, you would fetch products from a database
// For this example, we'll use a static array
$products = [
    ['id' => 1, 'name' => 'Blue Checkered Shirt', 'price' => 49.99, 'image' => 'blue-shirt.jpg', 'category' => 'Shirts'],
    ['id' => 2, 'name' => 'Navy Chinos', 'price' => 59.99, 'image' => 'navy-pants.jpg', 'category' => 'Pants'],
    ['id' => 3, 'name' => 'Brown Leather Shoes', 'price' => 89.99, 'image' => 'brown-shoes.jpg', 'category' => 'Shoes'],
    ['id' => 4, 'name' => 'Red Plaid Shirt', 'price' => 45.99, 'image' => 'plaid-shirt.jpg', 'category' => 'Shirts'],
    ['id' => 5, 'name' => 'Black Formal Suit', 'price' => 199.99, 'image' => 'black-suit.jpg', 'category' => 'Suits'],
    ['id' => 6, 'name' => 'White Dress Shirt', 'price' => 39.99, 'image' => 'white-shirt.jpg', 'category' => 'Shirts'],
    ['id' => 7, 'name' => 'Khaki Chinos', 'price' => 54.99, 'image' => 'khaki-pants.jpg', 'category' => 'Pants'],
    ['id' => 8, 'name' => 'Black Leather Belt', 'price' => 29.99, 'image' => 'black-belt.jpg', 'category' => 'Accessories']
];

// Get category filter from URL if it exists
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

// Filter products by category if a filter is applied
if (!empty($categoryFilter)) {
    $filteredProducts = array_filter($products, function($product) use ($categoryFilter) {
        return $product['category'] === $categoryFilter;
    });
} else {
    $filteredProducts = $products;
}

// Get all unique categories
$categories = array_unique(array_column($products, 'category'));
?>

<!-- Shop Banner -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Shop</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Shop Content -->
<div class="container my-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3">
            <!-- Categories -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="mb-3">Categories</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 px-0">
                            <a href="shop.php" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">
                                All Categories
                                <span class="badge bg-secondary rounded-pill"><?php echo count($products); ?></span>
                            </a>
                        </li>
                        <?php foreach ($categories as $category): ?>
                            <li class="list-group-item border-0 px-0">
                                <a href="shop.php?category=<?php echo $category; ?>" class="text-decoration-none text-dark d-flex justify-content-between align-items-center">
                                    <?php echo $category; ?>
                                    <span class="badge bg-secondary rounded-pill">
                                        <?php 
                                        echo count(array_filter($products, function($product) use ($category) {
                                            return $product['category'] === $category;
                                        }));
                                        ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
            <!-- Price Filter -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="mb-3">Price Range</h5>
                    <div class="mb-3">
                        <input type="range" class="form-range" min="0" max="200" id="priceRange">
                        <div class="d-flex justify-content-between">
                            <span>$0</span>
                            <span id="priceValue">$100</span>
                            <span>$200+</span>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100">Apply Filter</button>
                </div>
            </div>
            
            <!-- Featured Product -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Featured Product</h5>
                    <div class="text-center">
                        <img src="assets/images/products/blue-shirt.jpg" alt="Featured Product" class="img-fluid mb-3">
                        <h6>Blue Checkered Shirt</h6>
                        <p class="text-primary fw-bold">$49.99</p>
                        <a href="product.php?id=1" class="btn btn-sm btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="col-lg-9">
            <!-- Sorting and View Options -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span>Showing <?php echo count($filteredProducts); ?> products</span>
                </div>
                <div class="d-flex align-items-center">
                    <select class="form-select me-3">
                        <option selected>Default Sorting</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Popularity</option>
                    </select>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary active"><i class="fas fa-th"></i></button>
                        <button type="button" class="btn btn-outline-secondary"><i class="fas fa-list"></i></button>
                    </div>
                </div>
            </div>
            
            <!-- Products -->
            <div class="row">
                <?php if (count($filteredProducts) > 0): ?>
                    <?php foreach ($filteredProducts as $product): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="assets/images/products/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                    <p class="card-text fw-bold text-primary">$<?php echo $product['price']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-primary">View Details</a>
                                        <button class="btn btn-sm btn-primary add-to-cart" data-id="<?php echo $product['id']; ?>">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center py-5">
                        <h3>No products found</h3>
                        <p>Try a different category or search term</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php
// Include footer file
include 'includes/footer.php';
?>

