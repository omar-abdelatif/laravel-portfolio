//! Navbar
window.addEventListener("scroll", () => {
    if (window.scrollY > 150) {
        document.querySelector(".navbar").classList.add("fixed");
    } else {
        document.querySelector(".navbar").classList.remove("fixed");
    }
});

//! ScrollUp
window.addEventListener("scroll", () => {
    const scrollBtn = document.querySelector(".scroll");
    if (window.scrollY > 100) {
        document.querySelector(".scrollup").classList.add("visible");
    } else {
        document.querySelector(".scrollup").classList.remove("visible");
    }
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});
