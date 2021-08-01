
const Cart = () => {
    // Open Cart
    let cart = document.querySelector('.cart')
    let Btn = document.querySelector('#cart');

    Btn.onclick = () => {
        if (cart.classList.contains('show')) {
            cart.classList.remove('show');
        }else {
            cart.classList.add('show');
        }
    }
}

// Run Function
Cart();
