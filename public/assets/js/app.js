
const App = () => {
   let less = document.querySelector('#less');
   let plus = document.querySelector('#plus');

   let piece = document.querySelector('#piece');
   let price = document.querySelector('#price');
    const PriceOnePiece = document.querySelector('#PriceOnePiece').value;
    let score = 0;
   // Add price and piece
   plus.onclick = () => {
    score++;
    piece.value = score;
    price.value = PriceOnePiece * piece.value + '.000';
   }

    // Less price and piece
    less.onclick = () => {
       if (score < 2) return;
        score--;
        piece.value = score;
        price.value = price.value - PriceOnePiece + '.000';
    }

    // Toppings

    const toppingsLabel = document.querySelectorAll('.form-group label');
    const toppingsCheck = document.querySelectorAll('.form-group input');

    toppingsCheck.forEach((topping,i) => {
       topping.onclick = () => {
           if (topping.checked) {
               toppingsLabel[i].classList.remove('text-muted');
           }else  {
               toppingsLabel[i].classList.add('text-muted');
           }
        }
    });
}

//Run function
App();
