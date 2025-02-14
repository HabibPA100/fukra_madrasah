document.addEventListener("DOMContentLoaded", function () {
    // Select all toggle buttons
    const modalToggleButtons = document.querySelectorAll("[data-modal-toggle]");
    
    modalToggleButtons.forEach(button => {
        button.addEventListener("click", function () {
            const modalId = this.getAttribute("data-modal-toggle");
            const modal = document.getElementById(modalId);
            
            if (modal) {
                if (modal.classList.contains("hidden")) {
                    modal.classList.remove("hidden");
                    modal.classList.add("flex"); // Show modal
                } else {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex"); // Hide modal
                }
            }
        });
    });

    // Close modal when clicking outside the content area
    document.addEventListener("click", function (event) {
        const modals = document.querySelectorAll("[id^='crud-modal']");
        modals.forEach(modal => {
            if (!modal.classList.contains("hidden") && !modal.querySelector(".relative").contains(event.target)) {
                modal.classList.add("hidden");
                modal.classList.remove("flex");
            }
        });
    });
});
