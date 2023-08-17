// ================================ toggle icon navbar ================================
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};


// ================================ scroll sections active link ================================
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop -150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id')

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });

    // ================================ sticky navbar ================================
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);
    // ================================ sticky navbar ================================
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};

// ================================ sticky navbar ================================


// Initialize ScrollReveal with options

const scrollRevealOptions = {
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
};

const sr = ScrollReveal(scrollRevealOptions);


// Apply reveal animation to elements
const elementsToRevealTop = document.querySelectorAll('.home-content, .heading');
sr.reveal(elementsToRevealTop, { origin: 'top' });

const elementsToRevealBottom = document.querySelectorAll('.home-image, .service_container, .portfolio-box, .contact form');
sr.reveal(elementsToRevealBottom, { origin: 'bottom' });

const elementsToRevealLeft = document.querySelectorAll('.home-content h1, .about_img');
sr.reveal(elementsToRevealLeft, { origin: 'left' });

const elementsToRevealRight = document.querySelectorAll('.home-content p, .about_content');
sr.reveal(elementsToRevealRight, { origin: 'right' });

// ================================ sticky navbar ================================

const typed = new Typed('.multiple-text', {
    strings: ['Frontend Developer', 'Backend Developer', 'Full Stack Developer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true,
});
