<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sun Son Solar</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
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
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #034f7d;
        }

        .logo img {
            width: 58px;
            height: 58px;
            object-fit: contain;
        }

        .company-name {
            font-size: 21px;
            font-weight: 800;
            line-height: 1.2;
        }

.home-link {
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

.home-link:hover {
    background: #2385cf;
}

        .page-wrapper {
            min-height: calc(100vh - 95px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 55px 7%;
        }

        .login-card {
            width: 100%;
            max-width: 950px;
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid #dcecf7;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(0, 82, 140, 0.12);
        }

        .welcome-panel {
            padding: 55px 42px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, #034f7d, #087eb8);
            color: #ffffff;
        }

        .welcome-label {
            margin-bottom: 15px;
            color: #bce9ff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
        }

        .welcome-panel h1 {
            margin-bottom: 20px;
            font-size: clamp(32px, 4vw, 44px);
            line-height: 1.2;
        }

        .welcome-panel h1 span {
            color: #ffd95a;
        }

        .welcome-panel p {
            color: #e1f4ff;
            font-size: 16px;
            line-height: 1.9;
        }

        .welcome-divider {
            width: 65px;
            height: 4px;
            margin-top: 28px;
            border-radius: 5px;
            background: #ffd95a;
        }

        .form-panel {
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-heading {
            margin-bottom: 30px;
        }

        .form-heading h2 {
            margin-bottom: 8px;
            color: #075985;
            font-size: 30px;
        }

        .form-heading p {
            color: #718096;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #334155;
            font-size: 14px;
            font-weight: 700;
        }

        .form-group input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #dcecf7;
            border-radius: 9px;
            background: #fbfdff;
            color: #1d2b3a;
            font-family: inherit;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-group input:focus {
            border-color: #087eb8;
            box-shadow: 0 0 0 3px rgba(8, 126, 184, 0.12);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 65px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            padding: 4px;
            border: none;
            background: transparent;
            color: #087eb8;
            font-weight: 700;
            cursor: pointer;
        }

        .login-button {
            width: 100%;
            margin-top: 5px;
            padding: 14px 20px;
            border: none;
            border-radius: 9px;
            background: linear-gradient(135deg, #087eb8, #075985);
            color: #ffffff;
            font-family: inherit;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 20px rgba(0, 82, 140, 0.18);
        }

        .register-text {
            margin-top: 24px;
            color: #718096;
            text-align: center;
            font-size: 14px;
        }

        .register-text a {
            color: #087eb8;
            font-weight: 700;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        .form-footer a {
            color: #718096;
            font-size: 13px;
        }

        @media (max-width: 760px) {
            .navbar {
                padding: 15px 5%;
            }

            .logo img {
                width: 45px;
                height: 45px;
            }

            .company-name {
                font-size: 17px;
            }

            .page-wrapper {
                padding: 30px 5%;
            }

            .login-card {
                grid-template-columns: 1fr;
            }

            .welcome-panel {
                padding: 35px 28px;
            }

            .welcome-panel h1 {
                font-size: 32px;
            }

            .form-panel {
                padding: 35px 28px;
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