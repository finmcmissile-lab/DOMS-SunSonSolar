<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Son Solar | Power Your Future</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
:root {
    --navy: #0b2545;
    --blue: #075985;
    --bright-blue: #087eb8;
    --gold: #f5b800;
    --gold-light: #ffd34d;
    --text: #1d2b3a;
    --muted: #536579;
    --border: #dce7f0;
    --surface: #ffffff;
    --page: #f5f9fc;
    --shadow: 0 12px 32px rgba(11, 37, 69, 0.09);
}

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    color: var(--text);
    background-color: #f5f9fc;
    background-image:
        linear-gradient(
            rgba(245, 249, 252, 0.35),
            rgba(245, 249, 252, 0.35)
        ),
        url("<?= base_url('assets/images/solarsun-background.jpg') ?>");
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    line-height: 1.6;
}

img {
    display: block;
    max-width: 100%;
}

a {
    color: var(--blue);
}

button,
input,
select,
textarea {
    font: inherit;
}

/* NAVIGATION */
.navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    min-height: 82px;
    padding: 14px 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 28px;
    background: var(--navy);
    border-bottom: 3px solid var(--gold);
    box-shadow: 0 5px 20px rgba(11, 37, 69, 0.15);
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
    color: #ffffff;
    text-decoration: none;
    font-size: 19px;
    font-weight: 800;
    letter-spacing: 0.5px;
}

.logo img {
    width: 48px;
    height: 48px;
    flex: 0 0 48px;
    object-fit: contain;
    border-radius: 50%;
    background: #ffffff;
}

.logo .company-name,
.logo span {
    color: #ffffff;
}

.nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 22px;
}

.nav-links a:not(.nav-button) {
    position: relative;
    color: #e8f2fb;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: color 0.2s ease;
}

.nav-links a:not(.nav-button):hover {
    color: var(--gold-light);
}

.nav-links a:not(.nav-button)::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0;
    height: 2px;
    background: var(--gold);
    transition: width 0.2s ease;
}

.nav-links a:not(.nav-button):hover::after {
    width: 100%;
}

.nav-links > span {
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
}

.nav-links .nav-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 10px 17px;
    border-radius: 8px;
    background: var(--gold);
    color: var(--navy);
    font-weight: 800;
    text-decoration: none;
    transition: background 0.2s ease, transform 0.2s ease;
}

.nav-links .nav-button:hover {
    background: var(--gold-light);
    color: var(--navy);
    transform: translateY(-1px);
}

/* HERO / WELCOME SECTION */
.hero {
    min-height: 540px;
    padding: 70px 7%;
    display: grid;
    grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
    align-items: center;
    gap: 55px;
    background:
        radial-gradient(
            circle at 85% 15%,
            rgba(245, 184, 0, 0.08),
            transparent 32%
        ),
        linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.18),
            rgba(234, 244, 251, 0.18)
        );
}

.hero-content {
    min-width: 0;
    max-width: 650px;
}

.eyebrow {
    margin-bottom: 18px;
    color: var(--blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
}

.hero h1 {
    margin: 0 0 22px;
    color: var(--navy);
    font-size: clamp(38px, 4.5vw, 62px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -1.5px;
}

.hero-highlight {
    color: var(--bright-blue);
}

.hero-content > p {
    max-width: 560px;
    margin: 0 0 28px;
    color: var(--muted);
    font-size: 17px;
    line-height: 1.8;
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 14px;
}

.button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 48px;
    padding: 12px 20px;
    border: 1px solid transparent;
    border-radius: 9px;
    font-size: 14px;
    font-weight: 800;
    line-height: 1.4;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition:
        background 0.2s ease,
        color 0.2s ease,
        border-color 0.2s ease,
        box-shadow 0.2s ease,
        transform 0.2s ease;
}

.button:hover {
    transform: translateY(-2px);
}

.button-primary,
.login-button {
    border-color: var(--gold);
    background: var(--gold);
    color: var(--navy);
    box-shadow: 0 5px 14px rgba(245, 184, 0, 0.18);
}

.button-primary:hover,
.login-button:hover {
    background: var(--gold-light);
    color: var(--navy);
    box-shadow: 0 8px 20px rgba(245, 184, 0, 0.24);
}

.button-secondary {
    border-color: var(--blue);
    background: rgba(255, 255, 255, 0.65);
    color: var(--blue);
}

.button-secondary:hover {
    background: #e8f3fa;
    color: var(--navy);
}

.hero-image {
    position: relative;
    min-width: 0;
    overflow: hidden;
    border-radius: 20px;
    background: #dcebf5;
    box-shadow: 0 20px 45px rgba(11, 37, 69, 0.18);
}

.hero-image > img {
    width: 100%;
    height: 390px;
    object-fit: cover;
    object-position: center;
}

.image-caption {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    gap: 3px;
    padding: 22px 24px;
    background: linear-gradient(
        transparent,
        rgba(11, 37, 69, 0.92)
    );
    color: #ffffff;
}

.image-caption strong {
    font-size: 17px;
}

.image-caption span {
    color: #e8f2fb;
    font-size: 13px;
}

/* GENERAL SECTIONS */
.section {
    padding: 78px 7%;
    scroll-margin-top: 85px;
}

.section-heading {
    max-width: 760px;
    margin: 0 auto 42px;
    text-align: center;
}

.section-heading h2 {
    margin: 0 0 14px;
    color: var(--navy);
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 800;
    line-height: 1.25;
}

.section-heading p {
    margin: 0;
    color: var(--muted);
    font-size: 16px;
    line-height: 1.8;
}

/* BENEFITS AND CARDS */
.benefit-grid,
.service-grid,
.login-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
}

.info-card {
    min-width: 0;
    padding: 28px;
    border: 1px solid var(--border);
    border-radius: 15px;
    background: var(--surface);
    box-shadow: var(--shadow);
    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease,
        border-color 0.2s ease;
}

.info-card:hover {
    transform: translateY(-4px);
    border-color: #c2d9e9;
    box-shadow: 0 18px 38px rgba(11, 37, 69, 0.13);
}

.card-icon {
    width: 54px;
    height: 54px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    background: #eaf4fb;
    color: var(--blue);
    font-size: 23px;
}

.info-card h3 {
    margin: 0 0 12px;
    color: var(--navy);
    font-size: 20px;
    line-height: 1.4;
}

.info-card p {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
    line-height: 1.8;
}

/* SERVICES */
.services {
    background: rgba(237, 245, 250, 0.25);
}

.service-number {
    margin-bottom: 17px;
    color: var(--blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

/* TESTIMONIALS */
.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 24px;
}

.testimonial-card {
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

.testimonial-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 18px;
}

.quote-icon {
    color: var(--blue);
    font-size: 25px;
}

.testimonial-stars {
    display: flex;
    gap: 3px;
    color: var(--gold);
    font-size: 13px;
}

.testimonial-text {
    flex: 1;
    margin-bottom: 20px !important;
}

.testimonial-service {
    align-self: flex-start;
    margin-bottom: 22px;
    padding: 7px 11px;
    border-left: 3px solid var(--gold);
    border-radius: 0 6px 6px 0;
    background: #f1f7fb;
}

.testimonial-service span {
    color: var(--navy);
    font-size: 12px;
    font-weight: 700;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: auto;
}

.testimonial-avatar {
    width: 43px;
    height: 43px;
    flex: 0 0 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff3c4;
    color: var(--navy);
    font-size: 13px;
    font-weight: 800;
}

.testimonial-author-info h3 {
    margin: 0;
    font-size: 15px;
}

/* CALL TO ACTION */
.cta {
    padding: 68px 7%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 16px;
    background: linear-gradient(135deg, var(--navy), var(--blue));
    color: #ffffff;
    text-align: center;
    scroll-margin-top: 85px;
}

.cta h2 {
    flex: 0 0 100%;
    margin: 0;
    color: #ffffff;
    font-size: clamp(28px, 3vw, 38px);
    line-height: 1.25;
}

.cta > p {
    flex: 0 1 720px;
    margin: 0 0 12px;
    color: #e8f2fb;
    line-height: 1.8;
}

.cta .button-secondary {
    border-color: #ffffff;
    color: #ffffff;
}

.cta .button-secondary:hover {
    background: rgba(255, 255, 255, 0.12);
    color: #ffffff;
}

/* ACCOUNT ENTRY */
.login-section {
    background: rgba(237, 245, 250, 0.25);
}

.login-grid {
    grid-template-columns: minmax(0, 420px);
    justify-content: center;
}

.login-card {
    text-align: center;
}

.login-card .card-icon {
    margin-right: auto;
    margin-left: auto;
}

.login-card .button {
    width: 100%;
    margin-top: 22px;
}

/* FAQ */
.faq-list {
    width: 100%;
    max-width: 850px;
    margin: 0 auto;
}

.faq-list details {
    margin-bottom: 12px;
    padding: 0 20px;
    border: 1px solid var(--border);
    border-radius: 11px;
    background: #ffffff;
    box-shadow: 0 4px 14px rgba(11, 37, 69, 0.04);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.faq-list details:hover,
.faq-list details[open] {
    border-color: var(--gold);
    box-shadow: 0 7px 20px rgba(11, 37, 69, 0.07);
}

.faq-list summary {
    position: relative;
    padding: 19px 30px 19px 0;
    color: var(--navy);
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    list-style: none;
}

.faq-list summary::-webkit-details-marker {
    display: none;
}

.faq-list summary::after {
    content: "+";
    position: absolute;
    top: 50%;
    right: 0;
    color: var(--blue);
    font-size: 23px;
    transform: translateY(-50%);
}

.faq-list details[open] summary::after {
    content: "−";
}

.faq-list details p {
    margin: 0;
    padding: 0 0 20px;
    color: var(--muted);
    font-size: 14px;
    line-height: 1.8;
}

/* FOOTER */
footer {
    padding: 45px 7% 35px;
    border-top: 4px solid var(--gold);
    background: #071b33;
    color: #e8f2fb;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 50px;
    max-width: 1200px;
    margin: 0 auto;
}

footer h3,
footer h4 {
    margin: 0 0 15px;
    color: #ffffff;
}

footer p {
    max-width: 470px;
    color: #d7e5f2;
    font-size: 14px;
    line-height: 1.8;
}

footer a {
    color: #d7e5f2;
    text-decoration: none;
}

footer a:hover {
    color: var(--gold-light);
}

.social-links {
    display: flex;
    gap: 12px;
    margin-top: 12px;
}

.social-links a {
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 50%;
    transition: background 0.2s ease, color 0.2s ease;
}

.social-links a:hover {
    background: var(--gold);
    color: var(--navy);
}

/* KEYBOARD ACCESSIBILITY */
a:focus-visible,
summary:focus-visible {
    outline: 3px solid var(--gold);
    outline-offset: 4px;
}

/* OPTIONAL SCROLL REVEAL */
.reveal {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.55s ease, transform 0.55s ease;
}

.reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* TABLETS */
@media (max-width: 1000px) {
    .navbar {
        padding-right: 4%;
        padding-left: 4%;
        gap: 18px;
    }

    .nav-links {
        gap: 14px;
    }

    .hero {
        padding-right: 5%;
        padding-left: 5%;
        gap: 30px;
    }

    .section {
        padding-right: 5%;
        padding-left: 5%;
    }

    .benefit-grid,
    .service-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

/* MOBILE */
@media (max-width: 700px) {
    html {
        scroll-padding-top: 20px;
    }

    .navbar {
        position: relative;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        padding: 17px 5%;
    }

    .logo {
        justify-content: center;
    }

    .nav-links {
        width: 100%;
        justify-content: center;
        gap: 12px 18px;
    }

    .nav-links a:not(.nav-button),
    .nav-links > span {
        font-size: 13px;
    }

    .nav-links .nav-button {
        min-height: 38px;
        padding: 8px 12px;
    }

    .hero {
        min-height: auto;
        grid-template-columns: minmax(0, 1fr);
        padding: 48px 6%;
        gap: 32px;
        background: rgba(255, 255, 255, 0.18);
    }

    .hero h1 {
        font-size: clamp(35px, 9vw, 48px);
    }

    .hero-content > p {
        font-size: 15px;
    }

    .hero-actions {
        align-items: stretch;
    }

    .hero-actions .button {
        flex: 1 1 100%;
    }

    .hero-image > img {
        height: 290px;
    }

    .section {
        padding: 55px 6%;
    }

    .section-heading {
        margin-bottom: 30px;
    }

    .benefit-grid,
    .service-grid,
    .testimonial-grid,
    .login-grid,
    .footer-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .info-card {
        padding: 23px;
    }

    .cta {
        padding: 52px 6%;
        flex-direction: column;
    }

    .cta > p {
        flex-basis: auto;
        margin-bottom: 12px;
    }

    .cta > .button {
        width: 100%;
        max-width: 340px;
    }

    footer {
        padding: 38px 6%;
    }

    .footer-grid {
        gap: 28px;
    }
}

/* REDUCED MOTION */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        scroll-behavior: auto !important;
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }

    .reveal {
        opacity: 1;
        transform: none;
    }
}


.hero > div p,
.hero > div small,
.hero > div .eyebrow,
.hero > div .hero-badge,
.services > p,
.services > .section-subtitle,
.services > .section-heading p,
.login-section > p,
.login-section > .section-subtitle {
    color: #000000 !important;
    font-weight: 500;
}


.service-card,
.service-card *,
button,
button *,
.btn,
.btn *,
input,
select,
textarea {
    text-shadow: none;
}

.hero p,
.login-section p,
.testimonials p,
.account-section p,
.getting-started p {
    color: #000000 !important;
}

.benefits p,
.benefit-card p,
.services .service-card p,
.service-card .description,
.service-card .service-description {
    color: #d6d6d6 !important;
}
</style>

</head>

<body>

    <!-- Navigation -->
    <header class="navbar">
        <a href="#home" class="logo">
            <img src="<?= base_url('assets/images/solar-logo.jpg') ?>" alt="Sun Son Solar Logo">
            <span class="company-name">SUN SON SOLAR</span>
        </a>

        <nav class="nav-links">
            <a href="#home">Home</a>

            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#testimonials">Testimonials</a>

        
<?php if (session()->get('isLoggedIn')): ?>
    <span>
        Welcome,
        <?= esc(
            session()->get('user_type') === 'Employee'
                ? session()->get('employee_name')
                : session()->get('customer_name')
        ) ?>!
    </span>
    <a href="<?= site_url('logout') ?>" class="nav-button">Logout</a>
<?php else: ?>
                <a href="<?= site_url('login') ?>">Login</a>
                <a href="<?= site_url('register') ?>" class="nav-button">Create Account</a>
            <?php endif; ?>

        </nav>
    </header>

    <main>

        <!-- Hero Banner -->
        <section class="hero" id="home">
            <div class="hero-content">
                <div class="eyebrow">SOLAR SOLUTIONS AND SERVICES</div>


<h1>Power Your Future with <span class="hero-highlight">Solar.</span></h1>


                <p>
                    Discover solar energy solutions for your home or business.
                    Our services cover consultation, installation, and maintenance
                    to help you explore a cleaner and more energy-efficient future.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="button button-primary">
                        Explore Our Services
                    </a>

                    <a href="#contact" class="button button-secondary">
                        Contact Our Team
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img
                    src="<?= base_url('assets/images/solar-house.jpg') ?>"
                    alt="Solar panels installed on a rooftop"
                >

                <div class="image-caption">
                    <strong>Make the switch to solar</strong>
                    <span>Explore solutions for your energy needs.</span>
                </div>
            </div>
        </section>

        <!-- About the Company -->
        <section class="section" id="about">
            <div class="section-heading">
                <h2>Energy for a Better Tomorrow</h2>
                <p>
                    Sun Son Solar aims to help customers understand and
                    adopt solar energy through practical solutions,
                    professional guidance, and dependable service.
                </p>
            </div>

            <div class="benefit-grid">
                <article class="info-card">
                    <div class="card-icon">
    <i class="fa-solid fa-piggy-bank" aria-hidden="true"></i>
</div>
                    <h3>Save on Energy Costs</h3>
                    <p>
                        Explore how solar energy may help reduce your
                        dependence on electricity from the grid over time.
                    </p>
                </article>

                <article class="info-card">
                    <div class="card-icon">
    <i class="fa-solid fa-leaf" aria-hidden="true"></i>
</div>
                    <h3>Support Sustainability</h3>
                    <p>
                        Make use of renewable energy from the sun and
                        contribute to a cleaner energy future.
                    </p>
                </article>

                <article class="info-card">
                    <div class="card-icon">
    <i class="fa-solid fa-solar-panel" aria-hidden="true"></i>
</div>
                    <h3>Greater Energy Independence</h3>
                    <p>
                        Learn how a suitable solar setup can give your
                        household or business more control over its energy.
                    </p>
                </article>
            </div>
        </section>

        <!-- Services -->
        <section class="section services" id="services">
            <div class="section-heading">
                <h2>Our Solar Services</h2>
                <p>
                    From your first questions to long-term system care,
                    we help you understand the next step toward solar.
                </p>
            </div>

            <div class="service-grid">
                <article class="info-card">
                    <div class="service-number">SERVICE 01</div>
                    <div class="card-icon">
    <i class="fa-solid fa-comments" aria-hidden="true"></i>
</div>
                    <h3>Solar Consultation</h3>
                    <p>
                        Discuss your energy needs and explore solar options
                        that may suit your property and budget.
                    </p>
                </article>

                <article class="info-card">
                    <div class="service-number">SERVICE 02</div>
                    <div class="card-icon">
    <i class="fa-solid fa-solar-panel" aria-hidden="true"></i>
</div>
                    <h3>Solar Installation</h3>
                    <p>
                        Get guidance on installing a solar energy system
                        planned around your property's requirements.
                    </p>
                </article>

                <article class="info-card">
                    <div class="service-number">SERVICE 03</div>
                    <div class="card-icon">
    <i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i>
</div>
                    <h3>Maintenance</h3>
                    <p>
                        Help keep your solar system in good condition
                        through appropriate inspection and maintenance.
                    </p>
                </article>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section" id="testimonials">
            <div class="section-heading">
                <h2>What Our Customers Say</h2>
                <p>
                    Explore customer experiences with the solar services
                    offered by Sun Son Solar.
                </p>
            </div>

            <div class="testimonial-grid">

                <article class="info-card testimonial-card">
                    <div class="testimonial-top">
                        <i class="fa-solid fa-quote-left quote-icon" aria-hidden="true"></i>

                        <div class="testimonial-stars" aria-label="5 out of 5 stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        The solar consultation helped me understand how solar
                        energy could work for my home. The explanations were
                        clear and helpful throughout the process.
                    </p>

                    <div class="testimonial-service">
                        <span>Solar Consultation</span>
                    </div>

                    <div class="testimonial-author">
                        <div class="testimonial-avatar">KL</div>
                        <div class="testimonial-author-info">
                            <h3>Kenneth Dave Lamboloto</h3>
                        </div>
                    </div>
                </article>

                <article class="info-card testimonial-card">
                    <div class="testimonial-top">
                        <i class="fa-solid fa-quote-left quote-icon" aria-hidden="true"></i>

                        <div class="testimonial-stars" aria-label="4 out of 5 stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        I appreciated learning about the available solar options.
                        The installation service was explained clearly, although
                        I would have liked more updates during the process.
                    </p>

                    <div class="testimonial-service">
                        <span>Solar Panel Installation</span>
                    </div>

                    <div class="testimonial-author">
                        <div class="testimonial-avatar">AC</div>
                        <div class="testimonial-author-info">
                            <h3>Ara Camela</h3>
                        </div>
                    </div>
                </article>

                <article class="info-card testimonial-card">
                    <div class="testimonial-top">
                        <i class="fa-solid fa-quote-left quote-icon" aria-hidden="true"></i>

                        <div class="testimonial-stars" aria-label="5 out of 5 stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        The maintenance service helped me better understand how
                        to care for a solar energy system. The guidance was
                        straightforward and easy to follow.
                    </p>

                    <div class="testimonial-service">
                        <span>Solar System Maintenance</span>
                    </div>

                    <div class="testimonial-author">
                        <div class="testimonial-avatar">EC</div>
                        <div class="testimonial-author-info">
                            <h3>Eunyu Cipria</h3>
                        </div>
                    </div>
                </article>

                <article class="info-card testimonial-card">
                    <div class="testimonial-top">
                        <i class="fa-solid fa-quote-left quote-icon" aria-hidden="true"></i>

                        <div class="testimonial-stars" aria-label="4 out of 5 stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        Requesting a solar quotation gave me a clearer idea of
                        the possible costs and options for my property. I found
                        the information useful when comparing solutions.
                    </p>

                    <div class="testimonial-service">
                        <span>Solar Quotation Request</span>
                    </div>

                    <div class="testimonial-author">
                        <div class="testimonial-avatar">GM</div>
                        <div class="testimonial-author-info">
                            <h3>Gloria Mendoza</h3>
                        </div>
                    </div>
                </article>

            </div>
        </section>

        <!-- Call to Action -->
       <!-- Call to Action -->
<section class="cta" id="contact">
    <h2>Ready to Go Solar?</h2>

    <p>
        Whether you're exploring solar energy for your property
        or need help with an existing system, Sun Son Solar is here
        to help.
    </p>

    <a href="<?= site_url('free-quote') ?>"
       class="button button-primary">
        Get a Free Quote
    </a>

    <a href="<?= site_url('schedule-service') ?>"
       class="button button-secondary">
        Schedule a Service
    </a>
</section>

        <!-- Customer and Employee Account Entry Points -->
        <?php if (! session()->get('isLoggedIn')): ?>
        <section class="section login-section" id="login">
            <div class="section-heading">
                <h2>Welcome to Sun Son Solar</h2>
                <p>
                    Choose the account area that matches your role.
                    Account access will be connected to the secure login
                    functionality in a later implementation step.
                </p>
            </div>

            <div class="login-grid">
                <article class="info-card login-card">
<div class="card-icon">
    <i class="fa-solid fa-user" aria-hidden="true"></i>
</div>
                    <h3>Customer Access</h3>

                    <p>
                        Access your customer account and stay connected
                        with Sun Son Solar services.
                    </p>

                    <a href="<?= site_url('register') ?>" class="button login-button">
                        Customer Registration
                    </a>
                </article>

            </div>
        </section>
        <?php endif; ?>

        <!-- Frequently Asked Questions -->
        <section class="section">
            <div class="section-heading">
                <h2>Frequently Asked Questions</h2>
                <p>Some helpful starting points for your solar journey.</p>
            </div>

            <div class="faq-list">
                <details>
                    <summary>How does solar energy work?</summary>
                    <p>
                        Solar panels convert sunlight into electricity.
                        A properly designed system uses that electricity
                        to help meet your property's energy needs.
                    </p>
                </details>

                <details>
                    <summary>Can solar energy help reduce my electricity bill?</summary>
                    <p>
                        It may reduce electricity costs, depending on your
                        energy usage, system size, installation cost,
                        sunlight, and applicable utility arrangements.
                    </p>
                </details>

                <details>
                    <summary>Does a solar system need maintenance?</summary>
                    <p>
                        Yes. Appropriate inspections and maintenance can
                        help identify issues and support system performance.
                    </p>
                </details>

                <details>
                    <summary>How can I get started?</summary>
                    <p>
                        Create a customer account or contact Sun Son Solar
                        to discuss your energy needs and available services.
                    </p>
                </details>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div>
                <h3>SUN SON SOLAR</h3>
                <p>
                    Helping customers explore solar energy solutions
                    for a brighter and more sustainable future.
                </p>
            </div>

      <div>
    <h4>Contact Us</h4>
    <p>Have questions about solar energy or our services?</p>
    <a href="#contact">Get in Touch</a>

    <p>Follow Sun Son Solar</p>
    <div class="social-links">
        <a href="#" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a href="#" aria-label="Instagram">
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="#" aria-label="TikTok">
            <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const revealElements = document.querySelectorAll(
            '.section-heading, .info-card, .faq-list, .cta'
        );

        if (
            window.matchMedia('(prefers-reduced-motion: reduce)').matches ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }

        revealElements.forEach((element) => {
            element.classList.add('reveal');
        });

        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            }
        );

        revealElements.forEach((element) => {
            revealObserver.observe(element);
        });
    });
</script>
</body>
</html>
