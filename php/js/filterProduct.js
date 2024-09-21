

function showProduct(productData) {

// Ocultar todos los elementos con la clase 'product-name'
const titols = document.querySelectorAll('.product-name');
titols.forEach(titol => {
    titol.style.display = 'none';
});

const products = document.querySelectorAll('#producte');

// Ocultar todos los productos
products.forEach(product => {
    product.style.display = 'none';
});

document.querySelector('#anunci').style.display = 'none';

// Mostrar el producto seleccionado
productData.style.display = 'block';
productData.classList.add('selected');

// Cambiar la estética de #productes
const divproducts = document.querySelector('#productes');
divproducts.classList.add('selected');

// Mostrar el botón de retroceso
const backArrow = document.querySelector('.back-arrow');
backArrow.style.display = 'block';

// Ocultar la barra lateral (mySidebar)
const lateral = document.querySelector('#menuBtn');
if (lateral) { // Asegurar que el elemento existe
    lateral.style.display = 'none';
    console.log("HOLA");
} else {
    console.log("El elemento #mySidebar no se encontró.");
}

// Mostrar todos los elementos con id 'plus'
const plusElements = document.querySelectorAll('#plus');
plusElements.forEach(element => {
    element.style.display = 'block';
});
plusElements.classList.add('selected')



}

function addToCart(productId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'index.php?action=add_to_cart', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            showUserNotificationDot();
        }
    };
    xhr.send('product_id=' + productId);
}



function showUserNotificationDot() {
    var notificationDot = document.getElementById('notification-dot');
    notificationDot.style.display = 'block';
}

