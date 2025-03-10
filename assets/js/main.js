// Main JavaScript file for Minimalin E-commerce

document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Shopping cart functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            addToCart(productId);
        });
    });

    function addToCart(productId) {
        // In a real application, this would use AJAX to add the product to the cart
        console.log(`Product ${productId} added to cart`);
        
        // Show a success message
        alert('Product added to cart successfully!');
        
        // Update cart count (this is just a simple example)
        const cartBadge = document.querySelector('.fa-shopping-cart + .badge');
        if (cartBadge) {
            let count = parseInt(cartBadge.textContent);
            cartBadge.textContent = count + 1;
        }
    }

    // Newsletter form submission
    const newsletterForm = document.querySelector('form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput && emailInput.value) {
                // In a real application, this would use AJAX to submit the form
                console.log(`Subscribed with email: ${emailInput.value}`);
                alert('Thank you for subscribing to our newsletter!');
                emailInput.value = '';
            }
        });
    }

    // Product image gallery (for product details page)
    const productThumbnails = document.querySelectorAll('.product-thumbnail');
    if (productThumbnails.length > 0) {
        productThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const mainImage = document.querySelector('.product-main-image');
                if (mainImage) {
                    mainImage.src = this.src;
                }
                
                // Remove active class from all thumbnails
                productThumbnails.forEach(thumb => {
                    thumb.classList.remove('active');
                });
                
                // Add active class to clicked thumbnail
                this.classList.add('active');
            });
        });
    }
});

