const totalPriceElement = document.getElementById('total-price');
const proceedBtn = document.getElementById('proceed-btn');

const urlParams = new URLSearchParams(window.location.search);
const totalPrice = urlParams.get('totalPrice');

totalPriceElement.textContent = `Total Amount: ₹${totalPrice}`;

proceedBtn.addEventListener('click', () => {
    // Add your logic for payment processing here
    alert('Payment processing initiated. Please wait...');
    window.location.href = 'payment.html';

});