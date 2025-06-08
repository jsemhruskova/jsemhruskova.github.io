// Hladké scrollování
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Mobilní menu
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// Zavírání mobilního menu při kliku na link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
    });
});

// Navbar scroll efekt
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Countdown Timer
function startCountdown() {
    // Set countdown date (7 days from now)
    const countdownDate = new Date().getTime() + (1 * 24 * 60 * 60 * 1000);
    
    const timer = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById('countdown').innerHTML = '<p>Nabídka skončila!</p>';
        }
    }, 1000);
}

// Start countdown when page loads
document.addEventListener('DOMContentLoaded', startCountdown);

// Carousel functionality
let currentSlide = 0;
const slides = document.querySelectorAll('.room-card');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

document.getElementById('nextBtn').addEventListener('click', nextSlide);
document.getElementById('prevBtn').addEventListener('click', prevSlide);

// Auto-advance carousel
setInterval(nextSlide, 5000);

// FAQ Toggle
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        const isActive = faqItem.classList.contains('active');
        
        // Close all FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
        
        // Open clicked item if it wasn't active
        if (!isActive) {
            faqItem.classList.add('active');
        }
    });
});

// Form validation and submission
document.getElementById('rezervaceForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Basic validation
    const requiredFields = ['jmeno', 'email', 'checkin', 'checkout'];
    let isValid = true;
    
    requiredFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (!field.value.trim()) {
            field.style.borderColor = '#ff4444';
            isValid = false;
        } else {
            field.style.borderColor = '#ddd';
        }
    });
    
    // Check if checkout is after checkin
    const checkinDate = new Date(document.getElementById('checkin').value);
    const checkoutDate = new Date(document.getElementById('checkout').value);
    
    if (checkoutDate <= checkinDate) {
        alert('Datum odjezdu musí být později než datum příjezdu.');
        return;
    }
    
    if (isValid) {
        // In a real application, this would submit to the server
        alert('Rezervace byla odeslána! Brzy vás budeme kontaktovat.');
        this.reset();
    } else {
        alert('Prosím vyplňte všechna povinná pole.');
    }
});

// Set minimum date for check-in to today
document.getElementById('checkin').min = new Date().toISOString().split('T')[0];

// Update minimum checkout date when checkin changes
document.getElementById('checkin').addEventListener('change', function() {
    const checkinDate = new Date(this.value);
    checkinDate.setDate(checkinDate.getDate() + 1);
    document.getElementById('checkout').min = checkinDate.toISOString().split('T')[0];
});


