<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Berhasil</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;     
            height: 100vh;
            margin: 0;
        }
        .box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            text-align: center; 
            max-width: 400px;
        }
        .box img {
            width: 160px;
            margin-bottom: 15px;
        }
        .box h2 {
            color: green;
            margin-bottom: 15px;
        }
        .box p {
            text-align: justify; 
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
        }
        .box a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        .box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="box">
        <img src="<?= base_url('loginimg/iconberhasil.png'); ?>" alt="Ikon Berhasil">
        <h2>Registrasi Berhasil!</h2>
        <p>
            Terimakasih telah bergabung!<br><br>
            Registrasi akun Anda berhasil. Nikmati berbagai fitur dan kemudahan yang kami sediakan.
        </p>
        <a href="<?= base_url('bengkel/login'); ?>">Kembali ke Login</a>
    </div>
</body>
</html>
