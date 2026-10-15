<Php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun son Solar - Registration</title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container">

        <div class="logo">
            <h1>Sun son Solar</h1>
            <p>Solar Solutions and Services</p>
        </div>

        <div class="form-title">
            <h2>Create an Account</h2>
            <p>Join us and take the first step toward a brighter energy future.</p>
        </div>

        <?php if (isset($validation) && $validation !== null): ?>
            <div class="message"
                 style="color: #b42318; margin-bottom: 15px;"
                 role="alert">
                <?php if (is_object($validation) && method_exists($validation, 'listErrors')): ?>
                    <?= $validation->listErrors() ?>
                <?php elseif (is_array($validation)): ?>
                    <?php foreach ($validation as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($registration_error) && $registration_error): ?>
            <div class="message"
                 style="color: #b42318; margin-bottom: 15px;"
                 role="alert">
                <?= esc($registration_error) ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('register') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name"
                           value="<?= esc($oldInput['first_name'] ?? '') ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name"
                           value="<?= esc($oldInput['last_name'] ?? '') ?>"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name"
                       value="<?= esc($oldInput['middle_name'] ?? '') ?>">
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate"
                           value="<?= esc($oldInput['birthdate'] ?? '') ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male" <?= $selectedGender === 'Male' ? 'selected' : '' ?>>Male</option>
                        <option value="Female" <?= $selectedGender === 'Female' ? 'selected' : '' ?>>Female</option>
                        <option value="Other" <?= $selectedGender === 'Other' ? 'selected' : '' ?>>Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       value="<?= esc($oldInput['email'] ?? '') ?>"
                       required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number"
                       value="<?= esc($oldInput['phone_number'] ?? '') ?>"
                       pattern="[0-9]{11}" maxlength="11"
                       title="Enter exactly 11 digits." required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address"
                       value="<?= esc($oldInput['address'] ?? '') ?>"
                       required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username"
                       value="<?= esc($oldInput['username'] ?? '') ?>"
                       required>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"
                           minlength="8" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password"
                           name="confirm_password" minlength="8" required>
                </div>
            </div>

            <div id="message" class="message"></div>

            <button type="submit">Register</button>
        </form>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>