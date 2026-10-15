<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Solar Quote | Sun Son Solar</title>
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
    min-height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.7;
    color: #1d2b3a;
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

.quote-page {
    min-height: 100vh;
    padding: 30px 7% 70px;
    background: transparent;
}

.quote-navbar {
    max-width: none;
    margin: -30px -7.5% 45px;
    padding: 18px 7%;
    min-height: 105px;
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

.quote-brand {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 12px;
    color: #034f7d;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.2;
    text-decoration: none;
    flex-shrink: 0;
}

.quote-brand img {
    width: 68px;
    height: 68px;
    object-fit: contain;
    display: block;
}

.quote-home-link {
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

.quote-home-link:hover {
    background: #2385cf;
}

        .quote-layout {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, .85fr) minmax(0, 1.15fr);
            align-items: start;
            gap: 48px;
        }

        .quote-intro {
            padding: 24px 0;
        }

    
.quote-eyebrow {
    margin-bottom: 14px;
    color: #075985;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
}


.quote-intro h1 {
    margin: 0 0 20px;
    color: #075985;
    font-size: clamp(35px, 4vw, 49px);
    line-height: 1.15;
    letter-spacing: -.8px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.55);
}


.quote-highlight {
    color: #087eb8;
}


.quote-intro > p {
    margin: 0 0 28px;
     color: #000000;
    font-size: 16px;
    line-height: 1.85;
}


.quote-benefit strong {
    display: block;
    margin-bottom: 3px;
    color: #075985;
    font-size: 15px;
    font-weight: 800;
}


.quote-benefit p {
    margin: 0;
     color: #000000;
    font-size: 13px;
    line-height: 1.7;
}

.quote-card {
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

        .quote-card-heading {
            margin-bottom: 27px;
            padding-bottom: 22px;
            border-bottom: 1px solid #e4eef5;
        }

        .quote-card-heading .step-label {
            color: #087eb8;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .quote-card-heading h2 {
            margin: 8px 0 7px;
            color: #075985;
            font-size: 29px;
            line-height: 1.3;
        }

        .quote-card-heading p {
            margin: 0;
            color: #718096;
            font-size: 14px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 19px 16px;
        }

        .form-group {
            min-width: 0;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #334155;
            font-size: 13px;
            font-weight: 700;
        }

        .required-mark {
            color: #087eb8;
        }

        .optional {
            margin-left: 5px;
            color: #718096;
            font-size: 11px;
            font-weight: 400;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
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

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
            line-height: 1.7;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #91a2b1;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #087eb8;
            box-shadow: 0 0 0 3px rgba(8, 126, 184, .12);
        }

        .field-hint {
            display: block;
            margin-top: 6px;
            color: #718096;
            font-size: 11px;
        }

        .form-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 27px;
        }

        
.quote-button-primary {
    flex: 1 1 200px;
    background: linear-gradient(135deg, #ffd34d, #f5b800);
    color: #0b2545;
    box-shadow: 0 6px 16px rgba(245, 184, 0, 0.18);
}

.quote-button-primary:hover {
    background: linear-gradient(135deg, #ffe17a, #ffca28);
    box-shadow: 0 9px 22px rgba(245, 184, 0, 0.28);
}

        .quote-button-primary {
            flex: 1 1 200px;
            background: linear-gradient(135deg, #087eb8, #075985);
            color: #fff;
        }

        .quote-button-primary:hover {
            background: linear-gradient(135deg, #075985, #034f7d);
        }

        .quote-button-secondary {
            background: #eaf6fd;
            color: #075985;
        }

        .quote-button-secondary:hover {
            background: #dcecf7;
        }

        .quote-message {
            margin-bottom: 20px;
            padding: 13px 15px;
            border-radius: 8px;
            font-size: 13px;
            line-height: 1.6;
        }

        .quote-message-success {
            border: 1px solid #b5e5c6;
            background: #e8f8ee;
            color: #176534;
        }

        .quote-message-error {
            border: 1px solid #f2c4c4;
            background: #fff0f0;
            color: #9b2525;
        }

        .validation-errors {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        .field-error {
            margin-top: 5px;
            color: #b42318;
            font-size: 12px;
        }

        .quote-disclaimer {
            margin: 18px 0 0;
            color: #718096;
            font-size: 11px;
            line-height: 1.7;
            text-align: center;
        }

        .quote-footer {
            max-width: 1120px;
            margin: 30px auto 0;
            color: #718096;
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 900px) {
            .quote-layout {
                grid-template-columns: 1fr;
                gap: 25px;
                max-width: 680px;
            }

            .quote-intro {
                padding: 0;
            }

            .quote-intro h1 {
                max-width: 600px;
                font-size: 40px;
            }

            .quote-benefits {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 15px;
            }

            .quote-benefit {
                flex-direction: column;
            }

            .quote-navbar {
                margin-bottom: 35px;
            }
        }

        @media (max-width: 600px) {
            .quote-page {
                padding: 22px 14px 45px;
            }

            .quote-navbar {
                margin-bottom: 30px;
            }

            .quote-brand {
                gap: 8px;
                font-size: 16px;
            }

            .quote-brand img {
                width: 42px;
                height: 42px;
            }


.quote-home-link {
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

.quote-home-link:hover {
    background: #2385cf;
}

            .quote-intro h1 {
                font-size: 34px;
            }

            .quote-intro > p {
                font-size: 14px;
            }

            .quote-benefits {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .quote-benefit {
                flex-direction: row;
            }

            .quote-card {
                padding: 23px 18px;
            }

            .quote-card-heading h2 {
                font-size: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .form-group.full-width {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column;
            }

            .quote-button {
                width: 100%;
                flex-basis: auto;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }

            .quote-button:hover {
                transform: none;
            }
        }
    </style>
</head>
<body>
    <main class="quote-page">
        <header class="quote-navbar">
            <a href="<?= site_url('/') ?>" class="quote-brand">
                <img
                    src="<?= base_url('assets/images/solar-logo.jpg') ?>"
                    alt="Sun Son Solar logo"
                >
                <span>SUN SON SOLAR</span>
            </a>

            <a href="<?= site_url('/') ?>" class="quote-home-link">
                ← Back to Home
            </a>
        </header>

        <div class="quote-layout">
            <section class="quote-intro">
                <div class="quote-eyebrow">Your solar journey starts here</div>

                <h1>
                    Power Your Future with
                    <span class="quote-highlight">Solar.</span>
                </h1>

                <p>
                    Tell us about your property and electricity needs.
                    Our team can review your request and help you explore
                    solar options that may suit your home or business.
                </p>

                <div class="quote-benefits">
                    <div class="quote-benefit">
                        <div class="benefit-icon" aria-hidden="true">₱</div>
                        <div>
                            <strong>Explore potential savings</strong>
                            <p>Share your electricity bill to help us understand your energy use.</p>
                        </div>
                    </div>

                    <div class="quote-benefit">
                        <div class="benefit-icon" aria-hidden="true">☀</div>
                        <div>
                            <strong>Options for your property</strong>
                            <p>Property details help our team review your solar requirements.</p>
                        </div>
                    </div>

                    <div class="quote-benefit">
                        <div class="benefit-icon" aria-hidden="true">✓</div>
                        <div>
                            <strong>No obligation to proceed</strong>
                            <p>Submitting this form is a request, not a confirmed installation.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="quote-card">
                <div class="quote-card-heading">
                    <span class="step-label">FREE QUOTE REQUEST</span>
                    <h2>Let's talk solar.</h2>
                    <p>Fill in the details below so we can review your project.</p>
                </div>

                <?php if (session()->getFlashdata('quote_success')): ?>
                    <div class="quote-message quote-message-success" role="status">
                        <?= esc(session()->getFlashdata('quote_success')) ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($submission_error)): ?>
                    <div class="quote-message quote-message-error" role="alert">
                        <?= esc($submission_error) ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($validation)): ?>
                    <div class="quote-message quote-message-error" role="alert">
                        <strong>Please correct the following:</strong>
                        <ul class="validation-errors">
                            <?php foreach ($validation->getErrors() as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('free-quote') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="full_name">Full Name <span class="required-mark">*</span></label>
                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                maxlength="150"
                                autocomplete="name"
                                placeholder="Enter your full name"
                                value="<?= esc(old('full_name') ?? '') ?>"
                                required
                            >
                            <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                                <div class="field-error"><?= esc($validation->getError('full_name')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address <span class="required-mark">*</span></label>
                            
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
                                <div class="field-error"><?= esc($validation->getError('email')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group full-width">
                            <label for="phone_number">Phone Number <span class="required-mark">*</span></label>
                           
<input
    type="tel"
    id="phone_number"
    name="phone_number"
    maxlength="11"
    minlength="11"
    pattern="[0-9]{11}"
    title="Enter an 11-digit mobile number using numbers only."
    autocomplete="tel"
    placeholder="Enter your contact number"
    value="<?= esc(old('phone_number') ?? '') ?>"
    required
>

                            <?php if (isset($validation) && $validation->hasError('phone_number')): ?>
                                <div class="field-error"><?= esc($validation->getError('phone_number')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group full-width">
                            <label for="property_address">Property Address <span class="required-mark">*</span></label>
                            <textarea
                                id="property_address"
                                name="property_address"
                                rows="3"
                                autocomplete="street-address"
                                placeholder="Enter the address of the property"
                                required
                            ><?= esc(old('property_address') ?? '') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('property_address')): ?>
                                <div class="field-error"><?= esc($validation->getError('property_address')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group full-width">
                            <label for="property_type">Property Type <span class="required-mark">*</span></label>
                            <select id="property_type" name="property_type" required>
                                <option value="">Select property type</option>
                                <option value="House" <?= old('property_type') === 'House' ? 'selected' : '' ?>>House</option>
                                <option value="Apartment" <?= old('property_type') === 'Apartment' ? 'selected' : '' ?>>Apartment</option>
                                <option value="Commercial" <?= old('property_type') === 'Commercial' ? 'selected' : '' ?>>Commercial</option>
                                <option value="Other" <?= old('property_type') === 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                            <?php if (isset($validation) && $validation->hasError('property_type')): ?>
                                <div class="field-error"><?= esc($validation->getError('property_type')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group full-width">
                            <label for="monthly_electricity_bill">
                                Average Monthly Electricity Bill (₱)
                                <span class="optional">Optional</span>
                            </label>
                            <input
                                type="number"
                                id="monthly_electricity_bill"
                                name="monthly_electricity_bill"
                                min="0"
                                max="99999999.99"
                                step="0.01"
                                placeholder="e.g. 3500"
                                value="<?= esc(old('monthly_electricity_bill') ?? '') ?>"
                            >
                            <?php if (isset($validation) && $validation->hasError('monthly_electricity_bill')): ?>
                                <div class="field-error"><?= esc($validation->getError('monthly_electricity_bill')) ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group full-width">
                            <label for="project_details">
                                Additional Project Details
                                <span class="optional">Optional</span>
                            </label>
                            <textarea
                                id="project_details"
                                name="project_details"
                                rows="4"
                                placeholder="Tell us about your solar energy goals or questions."
                            ><?= esc(old('project_details') ?? '') ?></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="quote-button quote-button-primary">
                            Submit Quote Request
                        </button>

                    </div>

                    <p class="quote-disclaimer">
                        Your submission is a request for review and does not confirm
                        an installation or appointment.
                    </p>
                </form>
            </section>
        </div>

        <footer class="quote-footer">
            &copy; 2026 Sun Son Solar. All rights reserved.
        </footer>
    </main>
</body>
</html>