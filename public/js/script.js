document.addEventListener("DOMContentLoaded", () => {

    // 1. Core Interactivity & Preloader Handler
    const preloader = document.getElementById("preloader");
    if (preloader) {
        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.style.visibility = "hidden";
        }, 1200); 
    }

    // 2. Dynamic Year Updater for Footer
    const yearSpan = document.getElementById("year");
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // 3. Interactive Filterable Projects Tab
    const filterButtons = document.querySelectorAll(".btn-filter");
    const projectItems = document.querySelectorAll(".project-item");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            const filterValue = button.getAttribute("data-filter");

            projectItems.forEach(item => {
                if (filterValue === "all" || item.getAttribute("data-category") === filterValue) {
                    item.style.display = "block";
                    item.classList.add("animate-fade");
                } else {
                    item.style.display = "none";
                    item.classList.remove("animate-fade");
                }
            });
        });
    });

    // 4. Contact Form Loading Feedback UI
    const contactForm = document.getElementById("portfolio-contact-form");
    if (contactForm) {
        contactForm.addEventListener("submit", () => {
            const submitBtn = contactForm.querySelector("button[type='submit']");
            if (submitBtn) {
                // UI feedback when standard form POST submits
                submitBtn.innerHTML = `<i class="fa-solid fa-spinner fa-spin me-2 fs-7"></i>Sending Consultation Request...`;
            }
        });
    }

    console.log("M. Lateef Professional Portfolio | Engineered for Clarity & Precision.");
});