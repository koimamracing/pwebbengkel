<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Bengkel Kita</title>
    <style>
        body {
            background-color: #d9d9d9;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .header .logo img {
            height: 30px;
        }

        .header .help {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .register-box {
            background: #fff;
            width: 380px;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        .register-box h2 {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 25px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 10px 35px 10px 10px;
            border: none;
            border-bottom: 1px solid #aaa;
            outline: none;
            font-size: 14px;
            background: transparent;
        }

        .form-group img {
            position: absolute;
            right: 10px;
            top: 10px;
            width: 18px;
            opacity: 0.6;
        }

        .btn-register {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 10px 0;
            width: 100%;
            font-size: 15px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-register:hover {
            background-color: #006ae6;
        }

        .register-links {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            font-size: 12px;
        }

        .register-links a {
            color: #333;
            text-decoration: none;
        }

        .register-links a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

    <div class="header">
        <div class="logo">
            <a href="<?= base_url('home'); ?>">
                <img src="<?= base_url('loginimg/bengkelkita.png'); ?>" alt="Bengkel Kita">
            </a>
        </div>
        <div class="help">
            <img src="<?= base_url('loginimg/customercare.png'); ?>" alt="Bantuan" style="width:18px;">
            <span>Bantuan</span>
        </div>
    </div>

    <div class="register-container">
        <div class="register-box">
            <h2>Daftar Akun</h2>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="error"><?= session()->getFlashdata('error'); ?></div>
            <?php elseif (session()->getFlashdata('success')): ?>
                <div class="success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>

            <form action="<?= base_url('bengkel/registerin'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan email" required>
                    <img src="<?= base_url('loginimg/mail.png'); ?>" alt="Email Icon">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                    <img src="<?= base_url('loginimg/key.png'); ?>" alt="Lock Icon">
                </div>

                <button type="submit" class="btn-register">Daftar</button>

                <div class="register-links">
                    <a href="<?= base_url('bengkel/login'); ?>">Kembali ke Login Page</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
