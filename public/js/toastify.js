document.addEventListener("DOMContentLoaded", function () {
    const message = document.getElementById("toastMessage");
    const messageType = document.getElementById("toastType");

    // Solo muestra el toast si hay un mensaje
    if (message && message.value) {
        Toastify({
            text: message.value,
            duration: 4000,
            gravity: "top",
            position: "right",
            backgroundColor: messageType.value === "success" ? "#4caf50" : "#f44336",
            stopOnFocus: true
        }).showToast();
    }
});
