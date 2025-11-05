<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bengkel Kita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 18px;
            margin: 0;
        }

        header img {
            width: 200px;
        }

        header .icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .back_button {
            border: none;
            background-color: #f6f6f6;
            margin-left: 200px;
            margin-top: 10px;
        }

        .container {
            margin-top: 20px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px 200px;
        }

        .container2 {
            margin-top: 20px;
            padding: 20px 200px;
        }

        .nav-bar {
            display: flex;
            justify-content: space-between;
            overflow-x: auto;
            gap: 10px;
            padding-bottom: 10px;

        }

        .nav-item {
            flex: 0 0 auto;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            min-width: 80px;
            background-color: #fafafa;
            font-size: 12px;
            cursor: pointer;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .card {
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .card img {
            width: 200px;
            height: 110px;
            background-color: #e0e0e0;
            border-radius: 6px;
            object-fit: cover;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .card h4 {
            padding-left: 10px;
            font-size: 14px;
            margin: 5px 0;
            text-align: left;
            padding-bottom: 30px;
            margin-top: 0px;
        }

        .card p {
            font-size: 13px;
            color: #555;
            margin: 0;
            text-align: right;
        }

        .footer {
            border-top: 1px solid #ddd;
            margin-top: 20px;
            padding-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer span {
            font-weight: bold;
        }

        .footer button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        .footer button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <header>
        <a href="<?= base_url('home'); ?>">
        <img src="<?= base_url('loginimg/bengkelkita.png'); ?>" alt="logo_bengkel">
        </a>
        <div class="icons">
            <span>🛈 Bantuan</span>
            <span>🛒</span>
            <span>👤</span>
        </div>
    </header>

    <button onclick="history.back()" class="back_button">← Kembali</button>

    <div class="container">
        <div class="nav-bar">
            <button class="nav-item">Warna Cat</button>
            <button class="nav-item">Headlight</button>
            <button class="nav-item">Backlight</button>
            <button class="nav-item">Kaca Depan</button>
            <button class="nav-item">Kaca Samping</button>
            <button class="nav-item">Kaca Belakang</button>
            <button class="nav-item">Spion</button>
            <button class="nav-item">Wiper</button>
        </div>
    </div>

    <div class="container2">
        <div class="products">
            <div class="card">
                <input type="checkbox">
                <img src="#" alt="Gambar Barang">
                <div>
                    <h4>Busi Motor Yamaha Fino AP 115cc (E14)</h4>
                    <p>Rp18.000</p>
                </div>
            </div>
            <div class="card">
                <input type="checkbox">
                <img src="#" alt="Gambar Barang">
                <div>
                    <h4>Busi Motor Yamaha Fino AP 115cc (2014)</h4>
                    <p>Rp18.000</p>
                </div>
            </div>
            <div class="card">
                <input type="checkbox">
                <img src="#" alt="Gambar Barang">
                <div>
                    <h4>Busi Motor Yamaha Fino AP 115cc (2014)</h4>
                    <p>Rp18.000</p>
                </div>
            </div>
            <div class="card">
                <input type="checkbox">
                <img src="#" alt="Gambar Barang">
                <div>
                    <h4>Busi Motor Yamaha Fino AP 115cc (2014)</h4>
                    <p>Rp18.000</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer">
            <span>Total: Rp 93.000</span>
            <button>Buat Pesanan</button>
        </div>
    </div>
    </div>

</body>

</html>