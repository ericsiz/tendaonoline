// filterProducts.js

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
}

function filterProducts(type) {
    const products = document.querySelectorAll('#producte');
    products.forEach(product => {
        if (product.getAttribute('data-type') === type) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

function allProducts() {
    const products = document.querySelectorAll('#producte'); // Seleccionar todos los productos individuales
    products.forEach(product => {
        product.style.display = 'block'; // Configurar cada producto para que se muestre
    });
}
