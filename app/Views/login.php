<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sun Son Solar</title>

  
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
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    min-height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    color: var(--text);
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

/* Header */
.navbar {
    position: relative;
    z-index: 5;
    width: 100%;
    min-height: 78px;
    padding: 14px 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    background: var(--navy);
    color: #ffffff;
    border-bottom: 3px solid var(--gold);
    box-shadow: 0 5px 20px rgba(11, 37, 69, 0.14);
}

.logo {
    color: #ffffff;
    font-size: 20px;
    font-weight: 800;
    text-decoration: none;
}

.home-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 10px 17px;
    border: 1px solid var(--gold);
    border-radius: 8px;
    background: var(--gold);
    color: var(--navy) !important;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    transition: background 0.2s ease, transform 0.2s ease;
}

.home-link:hover {
    background: var(--gold-light);
    transform: translateY(-1px);
}

/* Page layout */
.page-wrapper {
    min-height: calc(100vh - 78px);
    padding: 55px 6%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
}

/* Main login card */
.login-card {
    width: 100%;
    max-width: 960px;
    min-width: 0;
    display: grid;
    grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    overflow: hidden;
    border: 1px solid var(--border);
    border-radius: 20px;
    background: #ffffff;
    box-shadow: 0 22px 55px rgba(11, 37, 69, 0.14);
}

/* Welcome panel */
.welcome-panel {
    min-width: 0;
    padding: 48px 36px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    background: linear-gradient(
        145deg,
        var(--navy) 0%,
        var(--blue) 65%,
        var(--bright-blue) 100%
    );
    color: #ffffff;
}

.welcome-panel h1,
.welcome-panel h2 {
    margin: 0 0 18px;
    color: #ffffff;
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 800;
    line-height: 1.2;
}

.welcome-panel p {
    margin: 0 0 18px;
    color: #e8f2fb;
    font-size: 15px;
    line-height: 1.8;
}

.welcome-panel a {
    color: var(--gold-light);
}

/* Login form panel */
.form-panel {
    min-width: 0;
    padding: 44px 42px;
    background: #ffffff;
}

.form-heading {
    margin-bottom: 28px;
}

.form-heading h1,
.form-heading h2 {
    margin: 0 0 10px;
    color: var(--navy);
    font-size: 30px;
    font-weight: 800;
    line-height: 1.25;
}

.form-heading p {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
    line-height: 1.7;
}

/* Validation and error messages */
.alert {
    margin-bottom: 20px;
    padding: 12px 15px;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.6;
}

.alert.alert-warning {
    border: 1px solid #f5d58a;
    background: #fff8e5;
    color: #765600;
}

/* Form fields */
.form-group {
    min-width: 0;
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--navy);
    font-size: 14px;
    font-weight: 700;
}

.form-group input {
    display: block;
    width: 100%;
    min-width: 0;
    min-height: 48px;
    padding: 12px 14px;
    border: 1px solid #cbddea;
    border-radius: 9px;
    outline: none;
    background: #f7fafc;
    color: var(--text);
    font-size: 15px;
    transition:
        border-color 0.2s ease,
        box-shadow 0.2s ease,
        background 0.2s ease;
}

.form-group input:focus {
    border-color: var(--bright-blue);
    outline: none;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(8, 126, 184, 0.13);
}

.form-group input::placeholder {
    color: #8797a7;
}

/* Password toggle */
.toggle-password {
    color: var(--blue);
    cursor: pointer;
}

/* Login button */
.login-button {
    display: flex;
    width: 100%;
    min-height: 50px;
    align-items: center;
    justify-content: center;
    padding: 13px 18px;
    border: 1px solid var(--gold);
    border-radius: 9px;
    background: linear-gradient(
        135deg,
        var(--gold-light),
        var(--gold)
    );
    color: var(--navy);
    font-size: 15px;
    font-weight: 800;
    cursor: pointer;
    box-shadow: 0 6px 16px rgba(245, 184, 0, 0.22);
    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease,
        background 0.2s ease;
}

.login-button:hover {
    background: linear-gradient(135deg, #ffe17a, #ffca28);
    box-shadow: 0 9px 22px rgba(245, 184, 0, 0.30);
    transform: translateY(-1px);
}

/* Register link and footer */
.register-text {
    margin: 22px 0 0;
    color: var(--muted);
    font-size: 14px;
    text-align: center;
    line-height: 1.7;
}

.register-text a {
    color: var(--bright-blue);
    font-weight: 700;
    text-decoration: none;
}

.register-text a:hover {
    text-decoration: underline;
}

.form-footer {
    margin-top: 24px;
    text-align: center;
}

.form-footer a {
    color: var(--muted);
    font-size: 13px;
    text-decoration: none;
}

.form-footer a:hover {
    color: var(--blue);
    text-decoration: underline;
}

/* Tablet and mobile */
@media (max-width: 760px) {
    .navbar {
        min-height: 70px;
        padding: 13px 5%;
    }

    .page-wrapper {
        min-height: calc(100vh - 70px);
        padding: 32px 5%;
    }

    .login-card {
        max-width: 520px;
        grid-template-columns: minmax(0, 1fr);
    }

    .welcome-panel {
        padding: 28px 28px;
    }

    .welcome-panel h1,
    .welcome-panel h2 {
        font-size: 28px;
    }

    .welcome-panel p {
        margin-bottom: 0;
    }

    .form-panel {
        padding: 32px 28px;
    }

    .form-heading h1,
    .form-heading h2 {
        font-size: 27px;
    }
}

@media (max-width: 420px) {
    .navbar {
        gap: 12px;
    }

    .logo {
        font-size: 17px;
    }

    .home-link {
        padding: 9px 12px;
        font-size: 13px;
    }

    .page-wrapper {
        padding: 22px 4%;
    }

    .login-card {
        border-radius: 14px;
    }

    .welcome-panel,
    .form-panel {
        padding: 25px 21px;
    }
}


/* Keep the header logo small and consistent */
.logo {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #ffffff;
    font-size: 20px;
    font-weight: 800;
    text-decoration: none;
}

.logo img {
    display: block;
    width: 40px;
    height: 40px;
    max-width: 40px;
    object-fit: contain;
    flex-shrink: 0;
}

.company-name {
    display: inline-block;
    line-height: 1.2;
}

@media (max-width: 420px) {
    .logo img {
        width: 32px;
        height: 32px;
    }

    .company-name {
        font-size: 16px;
    }
}


</style>


</head>

<body>
    <header class="navbar">
        <a href="<?= base_url('/') ?>" class="logo">
            <img
                src="<?= base_url('assets/images/solar-logo.jpg') ?>"
                alt="Sun Son Solar Logo"
            >
            <span class="company-name">SUN SON SOLAR</span>
        </a>

        <a href="<?= base_url('/') ?>" class="home-link">
            <i class="fa-solid fa-arrow-left"></i> Back to Home
        </a>
    </header>

    <main class="page-wrapper">
        <div class="login-card">

            <section class="welcome-panel">
                <div class="welcome-label">WELCOME BACK</div>

                <h1>
                    Power Your Future with
                    <span>Solar.</span>
                </h1>

                <p>
                    Sign in to your Sun Son Solar account to continue
                    your journey toward a cleaner and more energy-efficient
                    future.
                </p>

                <div class="welcome-divider"></div>
            </section>

            <section class="form-panel">
                <div class="form-heading">
    <h2>Sign In</h2>
    <p>Enter your account details to continue.</p>
</div>

<?php if (isset($login_error)): ?>
    <div style="
        margin-bottom: 20px;
        padding: 12px 15px;
        border: 1px solid #f5c2c7;
        border-radius: 8px;
        background: #f8d7da;
        color: #842029;
        font-size: 14px;
    ">
        <?= esc($login_error) ?>
    </div>
<?php endif; ?>

<?php if (! empty($registration_success)): ?>
    <div style="
        margin-bottom: 20px;
        padding: 12px 15px;
        border: 1px solid #badbcc;
        border-radius: 8px;
        background: #d1e7dd;
        color: #0f5132;
        font-size: 14px;
    ">
        <?= esc($registration_success) ?>
    </div>
<?php endif; ?>

<?php if (! empty($login_required)): ?>
    <div class="alert alert-warning">
        <?= esc($login_required) ?>
    </div>
<?php endif; ?>


                <form action="<?= site_url('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Enter your username or email"
                            autocomplete="username"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="password-wrapper">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="toggle-password"
                                id="togglePassword"
                            >Show</button>
                        </div>
                    </div>

                    <button type="submit" class="login-button">
                        Sign In
                    </button>
                </form>

                <div class="register-text">
                    Don't have an account?
                    <a href="<?= site_url('register') ?>">Create Account</a>
                </div>

                <div class="form-footer">
                    <a href="<?= base_url('/') ?>">Return to homepage</a>
                </div>
            </section>

        </div>
    </main>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const isHidden = passwordInput.type === 'password';

            passwordInput.type = isHidden ? 'text' : 'password';
            togglePassword.textContent = isHidden ? 'Hide' : 'Show';
        });
    </script>
</body>
</html>