document.getElementById('startBooking').addEventListener('click', function () {
    var bookingForm = document.getElementById('bookingForm');

    if (!isAuthenticated) {
        window.location.href = '/login';
        return;
    }

    if (bookingForm.style.display === 'none') {
        bookingForm.style.display = 'block';
        this.textContent = 'Close Booking';
    } else {
        bookingForm.style.display = 'none';
        this.textContent = 'Start Booking';
    }
});