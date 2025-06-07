<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Luxus - Váš dokonalý pobyt</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Banner -->
    <div class="banner" id="banner">
        <div class="banner-content">
            <i class="fas fa-gift"></i>
            <span>Speciální nabídka: 30% sleva na víkendové pobyty!</span>
            <button class="banner-close" onclick="closeBanner()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <!-- Sticky Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="images/logo.png" alt="Hotel Luxus">
                <h2>Hotel Luxus</h2>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#home" class="nav-link">Domů</a></li>
                <li><a href="#rooms" class="nav-link">Pokoje</a></li>
                <li><a href="#services" class="nav-link">Služby</a></li>
                <li><a href="#reviews" class="nav-link">Recenze</a></li>
                <li><a href="#faq" class="nav-link">FAQ</a></li>
                <li><a href="#contact" class="nav-link">Kontakt</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Vítejte v Hotel Luxus</h1>
            <p>Zažijte nezapomenutelný pobyt v srdci města</p>
            <a href="#reservation" class="cta-button">Rezervovat nyní</a>
        </div>
        
        <!-- Countdown Timer -->
        <div class="countdown-container">
            <h3>Speciální nabídka končí za:</h3>
            <div class="countdown" id="countdown">
                <div class="time-unit">
                    <span id="days">00</span>
                    <label>Dny</label>
                </div>
                <div class="time-unit">
                    <span id="hours">00</span>
                    <label>Hodiny</label>
                </div>
                <div class="time-unit">
                    <span id="minutes">00</span>
                    <label>Minuty</label>
                </div>
                <div class="time-unit">
                    <span id="seconds">00</span>
                    <label>Sekundy</label>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Rooms Carousel -->
    <section id="rooms" class="rooms-section">
        <div class="container">
            <h2>Naše prémiové pokoje</h2>
            <div class="swiper room-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="room-card">
                            <img src="images/luxury-suite.jpg" alt="Luxusní apartmá">
                            <div class="room-info">
                                <h3>Luxusní apartmá</h3>
                                <p>Prostorné apartmá s výhledem na město</p>
                                <div class="room-price">Od 3,500 Kč/noc</div>
                                <div class="room-features">
                                    <span><i class="fas fa-bed"></i> King size postel</span>
                                    <span><i class="fas fa-bath"></i> Luxusní koupelna</span>
                                    <span><i class="fas fa-wifi"></i> WiFi zdarma</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="room-card">
                            <img src="images/deluxe-room.jpg" alt="Deluxe pokoj">
                            <div class="room-info">
                                <h3>Deluxe pokoj</h3>
                                <p>Elegantní pokoj s moderním vybavením</p>
                                <div class="room-price">Od 2,200 Kč/noc</div>
                                <div class="room-features">
                                    <span><i class="fas fa-bed"></i> Queen size postel</span>
                                    <span><i class="fas fa-tv"></i> Smart TV</span>
                                    <span><i class="fas fa-coffee"></i> Minibar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="room-card">
                            <img src="images/standard-room.jpg" alt="Standardní pokoj">
                            <div class="room-info">
                                <h3>Standardní pokoj</h3>
                                <p>Komfortní ubytování za skvělou cenu</p>
                                <div class="room-price">Od 1,500 Kč/noc</div>
                                <div class="room-features">
                                    <span><i class="fas fa-bed"></i> Double postel</span>
                                    <span><i class="fas fa-shower"></i> Sprchový kout</span>
                                    <span><i class="fas fa-air-conditioner"></i> Klimatizace</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <h2>Naše služby</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-utensils"></i>
                    <h3>Restaurace</h3>
                    <p>Gurmánské zážitky v naší oceňované restauraci</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-spa"></i>
                    <h3>Wellness & SPA</h3>
                    <p>Relaxace a regenerace v našem wellness centru</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-car"></i>
                    <h3>Parkování</h3>
                    <p>Bezpečné parkování přímo u hotelu</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Fitness centrum</h3>
                    <p>Moderně vybavené fitness centrum 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews-section">
        <div class="container">
            <h2>Co říkají naši hosté</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-header">
                        <img src="images/avatar1.jpg" alt="Jana Nováková">
                        <div class="reviewer-info">
                            <h4>Jana Nováková</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Absolutně fantastický pobyt! Personál byl úžasný a pokoj krásně čistý. Určitě se vrátíme."</p>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <img src="images/avatar2.jpg" alt="Petr Svoboda">
                        <div class="reviewer-info">
                            <h4>Petr Svoboda</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Hotel splnil všechna očekávání. Snídaně byly výborné a lokalita ideální pro procházky po městě."</p>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <img src="images/avatar3.jpg" alt="Marie Krásná">
                        <div class="reviewer-info">
                            <h4>Marie Krásná</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Krásný hotel s výborným wellness centrem. Jediné mínus bylo trochu hlučné prostředí v noci."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="container">
            <h2>Často kladené otázky</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Jaké jsou check-in a check-out časy?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Check-in je možný od 15:00 hodin, check-out do 11:00 hodin. V případě potřeby je možné domluvit jiný čas.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Je možné zrušit nebo změnit rezervaci?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ano, rezervaci lze zrušit nebo změnit až do 24 hodin před příjezdem bez poplatku. Pro změny kontaktujte naši recepci.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Máte parkování pro hosty?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ano, poskytujeme bezplatné parkoviště přímo u hotelu. Parkování je třeba rezervovat předem.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Jsou domácí mazlíčci povoleni?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ano, domácí mazlíčci jsou vítáni za příplatek 500 Kč za noc. Prosíme o předchozí informování při rezervaci.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Form -->
    <section id="reservation" class="reservation-section">
        <div class="container">
            <h2>Rezervace pokoje</h2>
            
            <!-- Success/Error Messages -->
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    Děkujeme za vaši rezervaci! Brzy vás budeme kontaktovat.
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>
            
            <form class="reservation-form" id="reservationForm" method="POST" action="process_reservation.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="checkin">Datum příjezdu</label>
                        <input type="date" id="checkin" name="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Datum odjezdu</label>
                        <input type="date" id="checkout" name="checkout" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="room-type">Typ pokoje</label>
                        <select id="room-type" name="room_type" required>
                            <option value="">Vyberte typ pokoje</option>
                            <option value="standard">Standardní pokoj - 1,500 Kč</option>
                            <option value="deluxe">Deluxe pokoj - 2,200 Kč</option>
                            <option value="suite">Luxusní apartmá - 3,500 Kč</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="guests">Počet hostů</label>
                        <select id="guests" name="guests" required>
                            <option value="">Počet hostů</option>
                            <option value="1">1 host</option>
                            <option value="2">2 hosté</option>
                            <option value="3">3 hosté</option>
                            <option value="4">4 hosté</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Křestní jméno</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Příjmení</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="special-requests">Speciální požadavky</label>
                    <textarea id="special-requests" name="special_requests" rows="4" placeholder="Vaše speciální požadavky..."></textarea>
                </div>
                
                <button type="submit" class="submit-button">
                    <i class="fas fa-calendar-check"></i>
                    Odeslat rezervaci
                </button>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Kontakt</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Adresa</h4>
                            <p>Václavské náměstí 123<br>110 00 Praha 1</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telefon</h4>
                            <p>+420 123 456 789</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info@hotelluxus.cz</p>
                        </div>
                    </div>
                </div>
                
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.7758609154383!2d14.42478!3d50.0811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94e8fb8bee5b%3A0x2e43c3446f3b8b6c!2sV%C3%A1clavsk%C3%A9%20n%C3%A1m.%2C%20Praha!5e0!3m2!1scs!2scz!4v1617000000000!5m2!1scs!2scz" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Hotel Luxus</h3>
                    <p>Váš dokonalý pobyt v srdci Prahy</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Rychlé odkazy</h4>
                    <ul>
                        <li><a href="#home">Domů</a></li>
                        <li><a href="#rooms">Pokoje</a></li>
                        <li><a href="#services">Služby</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kontakt</h4>
                    <p><i class="fas fa-phone"></i> +420 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> info@hotelluxus.cz</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Hotel Luxus. Všechna práva vyhrazena.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
