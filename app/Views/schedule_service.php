<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule a Service | Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<style>
* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.7;
    color: #000000;
    background-color: #f5f9fc;
    background-image:
        linear-gradient(
            rgba(245, 249, 252, 0.55),
            rgba(245, 249, 252, 0.55)
        ),
        url("<?= base_url('assets/images/solarsun-background.jpg') ?>");
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

a {
    text-decoration: none;
}


.schedule-page {
    min-height: 100vh;
    padding: 30px 7% 70px;
    background: transparent;
}


.schedule-navbar {
    max-width: none;
    min-height: 74px;
    margin: -30px -7.5% 45px;
    padding: 18px 7%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    background: #ffffff;
    border-bottom: 1px solid #dcecf7;
    box-shadow: 0 5px 18px rgba(0, 82, 140, 0.08);
    position: sticky;
    top: 0;
    z-index: 100;
}

.schedule-navbar img {
    width: 68px;
    height: 68px;
    object-fit: contain;
    display: block;
}

.schedule-home-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    padding: 9px 17px;
    border: 1px solid #60b8ff;
    border-radius: 7px;
    background: #1769AA;
    color: #ffffff !important;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
    transition: background 0.2s ease;
}

.schedule-home-button:hover {
    background: #2385cf;
}


.schedule-layout {
    max-width: 1120px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(0, .85fr) minmax(0, 1.15fr);
    align-items: start;
    gap: 48px;
}

.schedule-intro {
    padding: 24px 0;
}

.schedule-eyebrow {
    margin-bottom: 14px;
    color: #000000;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.schedule-intro h1 {
    margin: 0 0 20px;
    color: #034f7d;
    font-size: clamp(35px, 4vw, 49px);
    line-height: 1.15;
    letter-spacing: -.8px;
}

.schedule-highlight {
    color: #087eb8;
}

.schedule-intro > p {
    margin: 0 0 28px;
    color: #000000;
    font-size: 16px;
    line-height: 1.85;
}

.schedule-benefits {
    display: grid;
    gap: 18px;
    margin-top: 30px;
}

.schedule-benefit {
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.schedule-benefit-icon {
    flex: 0 0 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    background: linear-gradient(135deg, #eaf6fd, #d6efff);
    color: #087eb8;
    font-size: 21px;
    font-weight: 800;
}

.schedule-benefit strong {
    display: block;
    margin-bottom: 3px;
    color: #075985;
    font-size: 15px;
}

.schedule-benefit p {
    margin: 0;
    color: #000000;
    font-size: 13px;
    line-height: 1.7;
}

.schedule-notice {
    margin-top: 25px;
    padding: 15px;
    border: 1px solid #dcecf7;
    border-radius: 9px;
    background: #eaf6fd;
    color: #000000;
    font-size: 13px;
    line-height: 1.7;
}

.schedule-card {
    min-width: 0;
    padding: 34px;
    border: 1px solid #dce7f0;
    border-top: 4px solid #f5b800;
    border-radius: 18px;
    background: #ffffff;
    box-shadow:
        0 22px 55px rgba(11, 37, 69, 0.12),
        0 3px 12px rgba(8, 126, 184, 0.05);
}

.schedule-card-heading {
    margin-bottom: 27px;
    padding-bottom: 22px;
    border-bottom: 1px solid #e4eef5;
}

.schedule-brand {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 12px;
    color: #034f7d !important;
    flex-shrink: 0;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.2;
    text-decoration: none;
    white-space: nowrap;
}

.schedule-step-label {
    color: #087eb8;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1px;
}

.schedule-card-heading h2 {
    margin: 8px 0 7px;
    color: #075985;
    font-size: 29px;
    line-height: 1.3;
}

.schedule-card-heading p {
    margin: 0;
    color: #718096;
    font-size: 14px;
}

.schedule-form-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 19px 16px;
}

.schedule-field {
    min-width: 0;
}

.schedule-field.full-width {
    grid-column: 1 / -1;
}

.schedule-field label {
    display: block;
    margin-bottom: 8px;
    color: #334155;
    font-size: 13px;
    font-weight: 700;
}

.schedule-required {
    color: #087eb8;
}

.schedule-optional {
    margin-left: 5px;
    color: #718096;
    font-size: 11px;
    font-weight: 400;
}

.schedule-field input,
.schedule-field select,
.schedule-field textarea {
    display: block;
    width: 100%;
    min-height: 46px;
    padding: 12px 13px;
    border: 1px solid #ccdce8;
    border-radius: 8px;
    outline: none;
    background: #fbfdff;
    color: #1d2b3a;
    font: inherit;
    font-size: 14px;
    transition: border-color .2s, box-shadow .2s;
}

.schedule-field textarea {
    min-height: 110px;
    resize: vertical;
    line-height: 1.7;
}

.schedule-field input:focus,
.schedule-field select:focus,
.schedule-field textarea:focus {
    border-color: #087eb8;
    box-shadow: 0 0 0 3px rgba(8, 126, 184, .12);
}

.schedule-error {
    margin-top: 5px;
    color: #b42318;
    font-size: 12px;
}

.schedule-alert {
    margin-bottom: 20px;
    padding: 13px 15px;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.6;
}

.schedule-success {
    color: #166534;
    background: #dcfce7;
    border: 1px solid #86efac;
}

.schedule-failure {
    color: #991b1b;
    background: #fee2e2;
    border: 1px solid #fca5a5;
}

.schedule-submit {
    display: block;
    width: 100%;
    min-height: 50px;
    margin-top: 18px;
    padding: 12px 18px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #ffd34d, #f5b800);
    color: #0b2545;
    font-family: inherit;
    font-size: 15px;
    font-weight: 800;
    cursor: pointer;
    box-shadow: 0 6px 16px rgba(245, 184, 0, 0.22);
    transition: transform 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
}

.schedule-submit:hover {
    background: linear-gradient(135deg, #ffe17a, #ffca28);
    box-shadow: 0 9px 22px rgba(245, 184, 0, 0.28);
    transform: translateY(-2px);
}

.schedule-submit:active {
    transform: translateY(0);
}

.hero p,
.testimonials p,
.account-section p,
.getting-started p {
    color: #000000;
}
</style>
</head>
<body>
<div class="schedule-page">
<header class="schedule-navbar">
    <a href="<?= site_url('/') ?>" class="schedule-brand" aria-label="Sun Son Solar home">
        <img
            src="<?= base_url('assets/images/solar-logo.jpg') ?>"
            alt="Sun Son Solar logo"
        >
        <span>SUN SON SOLAR</span>
    </a>

    <a href="<?= site_url('/') ?>" class="schedule-home-button">
        ← Back to Home
    </a>
</header>

    <main class="schedule-layout">
    <section class="schedule-intro">
    <div class="schedule-eyebrow">Reliable solar care starts here</div>

    <h1>
        Keep Your Solar System
        <span class="schedule-highlight">Running Strong.</span>
    </h1>

    <p>
        Tell us what kind of solar service you need. Our team will review
        your request and contact you about the next steps for your home
        or business.
    </p>

    <div class="schedule-benefits">
        <div class="schedule-benefit">
            <div class="schedule-benefit-icon" aria-hidden="true">☀</div>
            <div>
                <strong>Choose Your Service</strong>
                <p>Request a consultation, installation, maintenance, or inspection.</p>
            </div>
        </div>

        <div class="schedule-benefit">
            <div class="schedule-benefit-icon" aria-hidden="true">✓</div>
            <div>
                <strong>Tell Us Your Preferred Date</strong>
                <p>Share a date that works for you. It remains subject to confirmation.</p>
            </div>
        </div>

        <div class="schedule-benefit">
            <div class="schedule-benefit-icon" aria-hidden="true">↗</div>
            <div>
                <strong>Our Team Will Follow Up</strong>
                <p>We'll review your request and contact you about the next steps.</p>
            </div>
        </div>
    </div>

    <div class="schedule-notice">
        <strong>Please note:</strong> Submitting this form sends a service
        request to our team. Your preferred date is not confirmed until
        our team contacts you.
    </div>
</section>

        <section class="schedule-card">
            <h2>Schedule a Service</h2>
            <p>Complete the form below to send your request.</p>

            <?php if (session()->getFlashdata('service_success')): ?>
                <div class="schedule-alert schedule-success" role="status">
                    <?= esc(session()->getFlashdata('service_success')) ?>
                </div>
            <?php endif; ?>

        
<?php if (isset($validation)): ?>
    <div class="schedule-alert schedule-failure" role="alert">
        <strong>Please correct the following:</strong>
        <ul>
            <?php foreach ($validation->getErrors() as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

            <form action="<?= site_url('schedule-service') ?>" method="post">
                <?= csrf_field() ?>

                <div class="schedule-field">
                    <label for="full_name">Full Name *</label>
                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        maxlength="150"
                        value="<?= esc(old('full_name') ?? '') ?>"
                        autocomplete="name"
                        required
                    >
                    <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('full_name')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="email">Email Address *</label>
                    
<input
    type="email"
    id="email"
    name="email"
    maxlength="150"
    autocomplete="email"
    placeholder="you@example.com"
    title="Enter a valid email address, such as you@example.com."
    value="<?= esc(old('email') ?? '') ?>"
    required
>

                    <?php if (isset($validation) && $validation->hasError('email')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('email')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="phone_number">Phone Number *</label>
                    
 <input
    type="tel"
    id="phone_number"
    name="phone_number"
    maxlength="11"
    minlength="11"
    pattern="[0-9]{11}"
    title="Enter an 11-digit mobile number using numbers only."
    value="<?= esc(old('phone_number') ?? '') ?>"
    autocomplete="tel"
    required
>
               <?php if (isset($validation) && $validation->hasError('phone_number')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('phone_number')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="service_address">Service Address *</label>
                    <textarea
                        id="service_address"
                        name="service_address"
                        required
                    ><?= esc(old('service_address') ?? '') ?></textarea>
                    <?php if (isset($validation) && $validation->hasError('service_address')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('service_address')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="service_type">Service Type *</label>
                    <select id="service_type" name="service_type" required>
                        <option value="">Select a service</option>
                        <?php
                        $services = [
                            'Solar Consultation',
                            'Solar Installation',
                            'Solar Maintenance',
                            'Inspection',
                        ];
                        $selectedService = old('service_type') ?? '';
                        ?>
                        <?php foreach ($services as $service): ?>
                            <option
                                value="<?= esc($service) ?>"
                                <?= $selectedService === $service ? 'selected' : '' ?>
                            >
                                <?= esc($service) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($validation) && $validation->hasError('service_type')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('service_type')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="preferred_date">Preferred Date (Optional)</label>
                    <input
                        type="date"
                        id="preferred_date"
                        name="preferred_date"
                        min="<?= date('Y-m-d') ?>"
                        value="<?= esc(old('preferred_date') ?? '') ?>"
                    >
                    <?php if (isset($validation) && $validation->hasError('preferred_date')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('preferred_date')) ?></div>
                    <?php endif; ?>
                </div>

                <div class="schedule-field">
                    <label for="additional_notes">Additional Notes (Optional)</label>
                    <textarea
                        id="additional_notes"
                        name="additional_notes"
                        placeholder="Describe your concern or any details we should know."
                    ><?= esc(old('additional_notes') ?? '') ?></textarea>
                    <?php if (isset($validation) && $validation->hasError('additional_notes')): ?>
                        <div class="schedule-error"><?= esc($validation->getError('additional_notes')) ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="schedule-submit">
                    Submit Service Request
                </button>
            </form>

        </section>
    </main>
</div>
</body>
</html>
