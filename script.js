const startDateInput = document.getElementById('start-date');
const endDateInput = document.getElementById('end-date');
const calculatePriceButton = document.getElementById('calculate-price');

const carPricePerDay =2000

calculatePriceButton.addEventListener('click', () => {
    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);

    if (endDate <= startDate) {
        alert('End date must be after start date.');
        return;
    }

    const timeDiff = endDate.getTime() - startDate.getTime();
    const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
    const totalPrice = daysDiff * carPricePerDay;

    // Redirect to the new page with the total price
    window.location.href = `total-amount.html?totalPrice=${totalPrice}`;
});