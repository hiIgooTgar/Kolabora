var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1, // Default untuk layar kecil
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2, // Untuk tablet
        },
        1024: {
            slidesPerView: 3, // Untuk layar besar (menampilkan 3 card per slide)
        }
    }
});



// Responsive Navbar
const navLinks = document.getElementById('navLinks');
const hambugerMenu = document.getElementById('hamburger-menu');
const closeMenu = document.getElementById('close');


hambugerMenu.addEventListener('click', function() {
    navLinks.style.right = '0px';
}); 

closeMenu.addEventListener('click', function() {
    navLinks.style.right = '-250px';
}); 

