<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Son Solar | Power Your Future</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-snap-type: none;
            scroll-padding-top: 110px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: #1d2b3a;
            background: #f5fbff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 7%;
            background: #ffffff;
            border-bottom: 1px solid #dcecf7;
            box-shadow: 0 5px 18px rgba(0, 82, 140, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
            gap: 20px;
        }

        .logo {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 12px;
            color: #034f7d;
            flex-shrink: 0;
        }

        .logo img {
            width: 68px;
            height: 68px;
            object-fit: contain;
            display: block;
        }

        .logo .company-name {
            color: #034f7d;
            font-size: 21px;
            font-weight: 800;
            line-height: 1.2;
            white-space: nowrap;
        }

        .logo span {
            color: #087eb8;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }


.nav-links a {
    position: relative;
    color: #334155;
    font-size: 16px;
    font-weight: 600;
    transition: color 0.25s ease;
}

.nav-links a:not(.nav-button)::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 2px;
    background: #087eb8;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.25s ease;
}

.nav-links a:not(.nav-button):hover {
    color: #087eb8;
}

.nav-links a:not(.nav-button):hover::after {
    transform: scaleX(1);
}

.nav-links a:focus-visible {
    outline: 2px solid #087eb8;
    outline-offset: 5px;
    border-radius: 3px;
}


        .nav-links .nav-button {
            background: linear-gradient(135deg, #087eb8, #075985);
            color: #ffffff;
            padding: 11px 17px;
            border-radius: 9px;
        }

        .nav-links .nav-button:hover {
            background: linear-gradient(135deg, #075985, #034f7d);
            color: #ffffff;
        }

        .hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 48px;
            padding: 75px 7%;
            background: #f5fbff;
            color: #1d2b3a;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero .eyebrow {
            color: #087eb8;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .hero h1 {
            color: #034f7d;
            font-size: clamp(36px, 4vw, 54px);
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .hero p {
            color: #344b5e;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 26px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }



.hero-image {
    position: relative;
    min-width: 0;
    overflow: hidden;
    border-radius: 18px;
    box-shadow:
        0 18px 45px rgba(0, 82, 140, 0.16),
        0 0 0 1px rgba(8, 126, 184, 0.08);
    isolation: isolate;
}

.hero-image::before {
    content: "";
    position: absolute;
    inset: -2px;
    border-radius: inherit;
    background: linear-gradient(
        135deg,
        rgba(8, 126, 184, 0.3),
        transparent 45%,
        rgba(85, 184, 237, 0.25)
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
    z-index: 1;
}

.hero-image:hover::before {
    opacity: 1;
}


.hero-image img {
    display: block;
    width: 100%;
    height: auto;
    max-height: 480px;
    object-fit: cover;
    object-position: center;
    border-radius: 18px;
    transition: transform 0.6s ease;
}

.hero-image:hover img {
    transform: scale(1.045);
}

@media (prefers-reduced-motion: reduce) {
    .hero-image img {
        transition: none;
    }

    .hero-image:hover img {
        transform: none;
    }
}


        .image-caption {
            position: absolute;
            left: 16px;
            right: 16px;
            bottom: 16px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding: 15px 18px;
            border-radius: 9px;
            background: rgba(255, 255, 255, 0.94);
            color: #1d2b3a;
        }

        .image-caption span {
            font-size: 15px;
            line-height: 1.6;
            color: #344b5e;
        }

        .eyebrow {
            color: #087eb8;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            margin-bottom: 15px;
        }


.button {
    display: inline-block;
    padding: 13px 21px;
    border-radius: 9px;
    font-weight: bold;
    margin: 4px 8px 4px 0;
    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease,
        background 0.25s ease,
        color 0.25s ease;
}

.button:hover {
    transform: translateY(-3px);
    box-shadow: 0 9px 20px rgba(0, 82, 140, 0.16);
}

.button-primary {
    background: linear-gradient(135deg, #087eb8, #075985);
    color: #ffffff;
    border-color: #087eb8;
}

.button-primary:hover {
    background: linear-gradient(135deg, #096da0, #06496b);
}


.button:active {
    transform: translateY(0) scale(0.98);
}

.button:focus-visible {
    outline: 3px solid #55b8ed;
    outline-offset: 4px;
}

@media (prefers-reduced-motion: reduce) {
    .button {
        transition: none;
    }

    .button:hover,
    .button:active {
        transform: none;
    }
}


        .button-primary {
            background: linear-gradient(135deg, #ffd95a, #f5b800);
            color: #1d2b3a;
        }

        .button-primary:hover {
            box-shadow: 0 7px 18px rgba(255, 184, 0, 0.28);
            transform: translateY(-1px);
        }

        .button-secondary {
            color: #ffffff;
            border: 1px solid #ffffff;
        }

        .button-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .section {
            padding: 75px 7%;
        }

        .section-heading {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .section-heading h2 {
            font-size: 32px;
            color: #075985;
            margin-bottom: 12px;
        }

        .section-heading p {
            color: #718096;
        }

        .benefit-grid,
.service-grid,
.testimonial-grid,
.login-grid {
    display: grid;
    gap: 24px;
}

.benefit-grid,
.service-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.testimonial-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.login-grid {
    display: flex;
    justify-content: center;
    width: 100%;
    margin: 0 auto;
}

.login-card {
    width: 100%;
    max-width: 600px;
    text-align: center;
    padding: 40px;
}

.login-card .card-icon {
    margin: 0 auto 20px;
}

.login-card .button {
    margin-top: 18px;
}


        .info-card {
        background: #ffffff;
        padding: 27px;
        border: 1px solid #dcecf7;
        border-radius: 14px;
        box-shadow: 0 10px 28px rgba(0, 82, 140, 0.08);

        transition:
           transform 0.3s ease,
           box-shadow 0.3s ease,
           border-color 0.3s ease;
    }

        .info-card:hover {
        transform: translateY(-8px);
        border-color: #8ac9ed;
        box-shadow: 0 18px 38px rgba(0, 82, 140, 0.16);
    }

@media (prefers-reduced-motion: reduce) {
    .info-card {
        transition: none;
    }

    .info-card:hover {
        transform: none;
    }
}



.card-icon {
    width: 58px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    border-radius: 16px;
    background: linear-gradient(135deg, #eaf6fd, #d6efff);
    color: #087eb8;
    font-size: 25px;
    transition: transform 0.3s ease, background 0.3s ease;
}

.info-card:hover .card-icon {
    transform: scale(1.1) rotate(-3deg);
    background: linear-gradient(135deg, #d6efff, #b9e4fb);
}


        .info-card h3 {
            color: #075985;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .info-card p {
            color: #344b5e;
            font-size: 17px;
            line-height: 1.8;
        }

        .services,
        .login-section {
            background: #eaf6fd;
        }

        .service-number {
            color: #087eb8;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .testimonial-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .quote-mark {
            font-size: 36px;
            line-height: 1;
            color: #f5b800;
        }

        .testimonial-note {
            font-size: 12px;
            color: #718096;
            margin-top: 15px;
        }

        .testimonial-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .quote-icon {
            color: #087eb8;
            font-size: 28px;
        }

        .testimonial-stars {
            display: flex;
            gap: 3px;
            color: #f4b400;
            font-size: 14px;
        }

        .testimonial-stars .fa-star {
            color: #f4b400;
        }

        .testimonial-text {
            margin-bottom: 18px;
        }

        .testimonial-service {
            margin-top: 4px;
            padding: 10px 12px;
            background: #e4f3fb;
            border-left: 4px solid #087eb8;
            border-radius: 6px;
        }

        .testimonial-service span {
            display: inline-block;
            color: #075985;
            font-size: 14px;
            font-weight: 700;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 20px;
        }

        .testimonial-avatar {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e4f3fb;
            color: #075985;
            font-size: 15px;
            font-weight: 800;
        }

        .testimonial-author-info h3 {
            font-size: 16px;
            margin-bottom: 0;
        }

        .cta {
            text-align: center;
            background: linear-gradient(135deg, #034f7d, #087eb8);
            color: #ffffff;
            padding: 65px 7%;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .cta p {
            max-width: 650px;
            margin: 0 auto 24px;
            color: #e1f4ff;
        }

        .login-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            max-width: 850px;
            margin: auto;
        }

        .login-card {
            text-align: center;
        }

        .login-card .button {
            margin-top: 18px;
        }

        .login-button {
            background: linear-gradient(135deg, #087eb8, #075985);
            color: #ffffff;
        }

        .login-button:hover {
            background: linear-gradient(135deg, #075985, #034f7d);
        }


.faq-list summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    color: #075985;
    font-weight: bold;
    cursor: pointer;
    list-style: none;
}

.faq-list summary::-webkit-details-marker {
    display: none;
}

.faq-list summary::after {
    content: "+";
    flex-shrink: 0;
    font-size: 24px;
    font-weight: 400;
    color: #087eb8;
    transition: transform 0.25s ease;
}

.faq-list details[open] summary::after {
    content: "−";
    transform: rotate(180deg);
}

.faq-list details {
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

.faq-list details:hover,
.faq-list details[open] {
    border-color: #8ac9ed;
    box-shadow: 0 8px 22px rgba(0, 82, 140, 0.09);
}


        .faq-list details {
            padding: 18px 20px;
            margin-bottom: 12px;
            background: #ffffff;
            border: 1px solid #dcecf7;
            border-radius: 9px;
        }

        .faq-list summary {
            color: #075985;
            font-weight: bold;
            cursor: pointer;
        }

        .faq-list details p {
            margin-top: 12px;
            color: #657789;
        }

        footer {
            background: #034f7d;
            color: #e1f4ff;
            padding: 45px 7% 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 35px;
            margin-bottom: 30px;
        }

        footer h3,
        footer h4 {
            color: #ffffff;
            margin-bottom: 12px;
        }

        footer p,
        footer a {
            display: block;
            color: #e1f4ff;
            font-size: 14px;
            margin-bottom: 8px;
        }

        footer a:hover {
            color: #ffd95a;
        }

        .social-links {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 12px 0 18px;
}

footer .social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    margin: 0;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    font-size: 18px;
    transition: background 0.2s ease, transform 0.2s ease;
}

footer .social-links a:hover {
    background: #087eb8;
    color: #ffffff;
    transform: translateY(-3px);
}

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.22);
            padding-top: 18px;
            font-size: 12px;
            color: #e1f4ff;
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
                gap: 13px;
            }

            .benefit-grid,
            .service-grid,
            .testimonial-grid,
            .login-grid,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                grid-template-columns: 1fr;
                min-height: 450px;
                padding-top: 60px;
                padding-bottom: 60px;
            }

            .section-heading h2,
            .cta h2 {
                font-size: 27px;
            }
        }


/* Scroll-reveal animation */
.reveal {
    opacity: 0;
    transform: translateY(24px);
    transition:
        opacity 0.7s ease,
        transform 0.7s ease;
}

.reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

@media (prefers-reduced-motion: reduce) {
    .reveal,
    .reveal.is-visible {
        opacity: 1;
        transform: none;
        transition: none;
    }
}

.hero-highlight {
    background: linear-gradient(120deg, #087eb8, #38bdf8);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
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
                    Welcome, <?= esc(session()->get('customer_name')) ?>!
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
