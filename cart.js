// cart.js
let cart = [];

function addToCart(productId) {
    cart.push(productId);
}

function purchase() {
    // Verzend de 'cart' array naar de server met behulp van AJAX (bijvoorbeeld met fetch).
    // Voer een PHP-script uit om de gegevens naar de database te schrijven.
}
<button class="purchase" onclick="purchase();">Purchase</button>
