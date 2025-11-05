<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Kita - Servis Cepat, Performa Hebat</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }

        .header {
            background: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .header .logo img {
            height: 30px;
        }

        .header .right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #006ae6;
        }

        .help {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
        }

        .banner {
            position: relative;
            background-color: #ff5959;
            height: 320px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner-content {
            position: relative;
            width: 90%;
            height: 100%;
        }

        .bg-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 140px;
            font-weight: 900;
            line-height: 0.9;
            letter-spacing: 5px;
            color: transparent;
            -webkit-text-stroke: 2px rgba(0, 0, 0, 0.3);
            opacity: 0.4;
            text-align: center;
            z-index: 1;
            user-select: none;
        }

        .banner .text {
            position: absolute;
            left: 8%;
            top: 120px;
            color: #fff;
            z-index: 3;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .banner .text h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .banner .text p {
            font-size: 15px;
            margin: 0;
        }

        .banner .car {
            position: absolute;
            right: 10%;
            bottom: 0;
            width: 500px;
            max-width: 45%;
            height: auto;
            z-index: 2;
            pointer-events: none;
        }

        .banner-img {
            width: 350px;
            max-width: 30%;
            height: auto;
            position: absolute;
            right: 10%;
            bottom: 0;
            z-index: 2;
            pointer-events: none;
        }


        .menu-box {
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
            margin: -30px auto 40px;
            width: 80%;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        }

        .menu-box button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .menu-box button:hover {
            background-color: #006ae6;
        }

        .partners {
            text-align: left;
            padding: 0 80px 60px;
        }

        .partners h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .partners .logos {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .partners .logos div {
            width: 180px;
            height: 120px;
            background: #ffffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .partners .logos img {
            max-width: 100%;
            max-height: 110px;
            object-fit: contain;
            filter: grayscale(20%);
            transition: transform 0.2s ease, filter 0.2s ease;
        }

        .partners .logos img:hover {
            transform: scale(1.05);
            filter: grayscale(0%);
        }

        .footer {
            background: #007bff;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 30px 80px;
        }

        .footer .left {
            max-width: 45%;
        }

        .footer .left h3 {
            margin-top: 0;
        }

        .footer .right {
            text-align: right;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="<?= base_url('loginimg/bengkelkita.png'); ?>" alt="Logo Bengkel Kita">
        </div>
        <div class="right">
            <button class="btn-login" onclick="window.location.href='<?= base_url('login'); ?>'">Login/Register</button>
            <div class="help">
                <img src="<?= base_url('loginimg/customercare.png'); ?>" alt="Ikon Bantuan" width="18">
                <span>Bantuan</span>
            </div>
        </div>
    </div>

    <section class="banner">
        <div class="text">
            <h1>Servis Cepat, Performa Hebat</h1>
            <p>Rawat Kendaraan Tanpa Ribet, Pesan Layanan Bengkel dari Rumah.</p>
        </div>
        <img src="<?= base_url('loginimg/banner.png'); ?>" alt="Gambar banner" class="banner-img">
    </section>
    <br><br><br>
    <div class="menu-box">
        <button onclick="window.location.href='<?= base_url('bengkel/menu'); ?>'">Menu</button>
        <button>Menu</button>
        <button>Menu</button>
        <button>Menu</button>
    </div>

    <section class="partners">
        <h2>Partners</h2>
        <div class="logos">
            <div><img src="<?= base_url('loginimg/logomitsubishi.png'); ?>"></div>
            <div><img src="<?= base_url('loginimg/logotoyota.png'); ?>"></div>
            <div><img src="<?= base_url('loginimg/logohonda.png'); ?>"></div>
            <div><img src="<?= base_url('loginimg/logomitsubishi.png'); ?>"></div>
        </div>
    </section>

    <footer class="footer">
        <div class="left">
            <img src="<?= base_url('loginimg/bengkelkita.png'); ?>" alt="Logo Bengkel Kita" style="height:25px;"><br><br>
            <strong>Head Office</strong><br>
            Kenapa kita harus berbeda dimensi? padahal aku sayang banget sama kamu 💔<br>
            Jl. Dr. Soetomo No.1, Sidakaya, Kecamatan Cilacap Selatan<br>
            Kabupaten Cilacap, Jawa Tengah 53212
        </div>
        <div class="right">
            <br><br><br>
            <strong>Hubungi Kami</strong><br>
            HajelSayangFurina14@gmail.com<br>
            0859 2627 6649 (WA)<br>
            0857 9948 3654 (WA)
        </div>
    </footer>

</body>

</html>