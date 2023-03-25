const navbar = document.getElementById("navbar");
const logo = document.querySelector(".navbar-brand img");

window.addEventListener("load", () => {
    const img = new Image();
    img.crossOrigin = "Anonymous";
    img.src = logo.src;

    img.onload = () => {
        const vibrant = new Vibrant(img);
        const swatches = vibrant.swatches();

        if (swatches.hasOwnProperty("Vibrant")) {
            const color = swatches.Vibrant.getHex();
            navbar.style.backgroundColor = `#${color}`;
        }
    };
});

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});


