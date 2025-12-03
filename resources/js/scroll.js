// Enhanced Navbar scroll effect
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const navLinks = document.querySelectorAll(".nav-link");
    
    if (window.scrollY > 100) {
        navbar.classList.add("scrolled");
        navLinks.forEach(link => {
            link.style.color = '#2E8B57';
        });
    } else {
        navbar.classList.remove("scrolled");
        navLinks.forEach(link => {
            link.style.color = '';
        });
    }
    
    // Parallax effect for sections
    document.querySelectorAll('.site-section').forEach(section => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        section.style.transform = `translate3d(0px, ${rate}px, 0px)`;
    });
});

// Enhanced smooth scrolling