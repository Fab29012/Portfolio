window.addEventListener("scroll", function () {
    const scrollY = window.scrollY;
    const body = document.body;

    if (scrollY < 500) {
        body.style.background = "#19100A";  
    } else if (scrollY < 1000) {
        body.style.background = "#BAB1AA";  
    } else {
        body.style.background = "#CCC7C3";  
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const text = "Hello. I'm Fabienne Halloin.";
    const textElement = document.getElementById("intro-text");
    const dotsElement = document.querySelector(".dots");

    let index = 0;

    function typeText() {
        if (index < text.length) {
            textElement.textContent = text.substring(0, index + 1); // Type one letter at a time
            index++;
            setTimeout(typeText, 100); // Adjust typing speed
        } else {
            // Start the dots animation by adding a class
            dotsElement.classList.add("animate-dots");
        }
    }

    typeText();
});

document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("star-container");

    container.addEventListener("mousemove", (event) => {
        createStar(event.clientX, event.clientY, container);
    });
});

function createStar(x, y, container) {
    const star = document.createElement("div");
    star.classList.add("star");

    // Get the position of the container
    const rect = container.getBoundingClientRect();
    star.style.left = `${x - rect.left}px`;
    star.style.top = `${y - rect.top}px`;

    // Add random animation delay for each star
    const delay = Math.random() * 2; // Random delay between 0s to 2s
    star.style.animationDelay = `${delay}s`;

    container.appendChild(star);

    // Remove the star after animation
    setTimeout(() => {
        star.remove();
    }, 2000); // Time should match the longest duration (fadeOut + floatStar)
}


window.addEventListener("scroll", function() {
    let scrollPosition = window.scrollY;
    document.querySelector(".about-me").style.backgroundPositionY = `${scrollPosition * 0.5}px`;
});

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("active");
});


document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".buttons button");
    const cards = document.querySelectorAll(".card");

    // Ensure the first button and card are active on load
    buttons[0].classList.add("active");
    cards[0].classList.add("active");

    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            // Remove active class from all buttons and cards
            buttons.forEach(btn => btn.classList.remove("active"));
            cards.forEach(card => card.classList.remove("active"));

            // Add active class to the clicked button and corresponding card
            button.classList.add("active");
            cards[index].classList.add("active");
        });
    });
});

window.history.replaceState({}, document.title, window.location.pathname);

document.querySelectorAll('.smooth-scroll').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Function to open the project modal
function openProject(projectId) {
    const modal = document.getElementById(projectId + "-modal");
    if (modal) {
        modal.classList.add("show");  // Adds the show class
        modal.style.display = "flex"; // Ensures it's visible
        document.body.style.overflow = "hidden"; // Prevent scrolling
    } else {
        console.log("Modal not found for:", projectId);
    }
}

// Function to close the project modal
function closeProject(projectId) {
    const modal = document.getElementById(projectId + "-modal");
    if (modal) {
        modal.classList.remove("show");  // Removes the show class
        setTimeout(() => {
            modal.style.display = "none"; // Hides it after transition
            document.body.style.overflow = "auto"; // Restore scrolling
        }, 300); // Matches the CSS transition time
    }
}

function scrollCarousel(direction) {
    const carousel = document.querySelector(".project-deck");
    const scrollAmount = 220; // Adjust based on project size
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: "smooth",
    });
}

let touchStartX = 0;
let touchEndX = 0;

const carousel = document.querySelector(".project-deck");

// Detect touch start
carousel.addEventListener("touchstart", (e) => {
    touchStartX = e.touches[0].clientX;
});

// Detect touch end
carousel.addEventListener("touchend", (e) => {
    touchEndX = e.changedTouches[0].clientX;
    handleSwipe();
});

function handleSwipe() {
    const threshold = 50; // Minimum swipe distance
    if (touchStartX - touchEndX > threshold) {
        scrollCarousel(1); // Swipe left → next project
    } else if (touchEndX - touchStartX > threshold) {
        scrollCarousel(-1); // Swipe right → previous project
    }
}

document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent page refresh

    let formData = new FormData(this);

    fetch("contact.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            document.getElementById("successMessage").classList.remove("hidden");
            this.reset(); // Clear the form
        } else {
            alert("There was an error. Please try again.");
        }
    })
    .catch(error => console.error("Error:", error));
});
