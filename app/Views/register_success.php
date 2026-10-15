
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - Sun Son Solar</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>
        .success-container {
            max-width: 620px;
            margin: 60px auto;
            padding: 45px 35px;
            text-align: center;
            background: #ffffff;
            border: 1px solid #dce7f0;
            border-top: 5px solid #f5b800;
            border-radius: 20px;
            box-shadow: 0 22px 55px rgba(11, 37, 69, 0.18);
        }

        .success-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 76px;
            height: 76px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: #e8f8ef;
            color: #16834a;
            font-size: 42px;
            font-weight: bold;
        }

        .success-container h1 {
            margin-bottom: 14px;
            color: #0b2545;
            font-size: 30px;
            font-weight: 800;
        }

        .success-container p {
            margin-bottom: 28px;
            color: #536579;
            font-size: 16px;
            line-height: 1.7;
        }

        .success-button {
            display: inline-block;
            padding: 14px 24px;
            border-radius: 10px;
            background: linear-gradient(135deg, #ffd34d, #f5b800);
            color: #0b2545;
            font-weight: 800;
            text-decoration: none;
            transition: transform 0.2s ease,
                        box-shadow 0.2s ease;
            box-shadow: 0 6px 16px rgba(245, 184, 0, 0.22);
        }

        .success-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 22px rgba(245, 184, 0, 0.30);
        }

        @media (max-width: 600px) {
            .success-container {
                margin: 25px auto;
                padding: 35px 22px;
            }

            .success-container h1 {
                font-size: 25px;
            }

            .success-button {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon" aria-hidden="true">&#10003;</div>

        <h1>Registration Successful!</h1>

        <p>
            Your Sun Son Solar account has been created successfully.
            Welcome to a brighter, more sustainable future!
        </p>

        <a class="success-button" href="<?= site_url('register') ?>">
            Register Another Account
        </a>
    </div>
</body>
</html>
