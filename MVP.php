<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobil MVP</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="stylesheet" href="css/jual2.css" />
  </head>
  <body>
    <div class="navbar">
      <a href="#" class="navbar-logo">WAF21<span>GARAGE.com</span></a>
      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
        <a href="#bantuan">Bantuan</a>
      </div>
      <div class="navbar-tambahan">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="login.html" id="log-in"><i data-feather="log-in"></i></a>
        <a href="#" id="user" style="display: none"
          ><i data-feather="user"></i
        ></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
      <div class="search-box" id="search-box">
        <input
          type="text"
          name="search"
          id="search-input"
          placeholder="cari kendaraan..."
        />
      </div>
    </div>

    <section class="spare-part" id="spare-part">
      <div class="header">
        <h2 class="highlight">MVP CAR</h2>
        <p>Berikut Merupakan Mobil Terbaik Masa Kini</p>
      </div>
      <div class="contentsuv-container">
        <div class="contentsuv">
          <img src="foto/rebornb.jpg" alt="Innova Reborn Bensin 2.0" />
          <h3>Innova Reborn Bensin 2.0</h3>
          <h3>Rp.250.000.000</h3>
          <div class="bagi">
            <a href="inovben.php" class="button">review</a>
          </div>
        </div>
        <div class="contentsuv">
          <img src="foto/rebornd.jpg" alt="Innova Reborn Diesel 2.4" />
          <h3>Innova Reborn Diesel 2.4</h3>
          <h3>Rp.380.000.000</h3>
          <div class="bagi">
            <a href="inovdea.php" class="button">review</a>
          </div>
        </div>
        <div class="contentsuv">
          <img src="foto/expandul.jpg" alt="Expander Ultimate" />
          <h3>Expander Ultimate</h3>
          <h3>Rp.270.000.000</h3>
          <div class="bagi">
            <a href="exul.php" class="button">review</a>
          </div>
        </div>
        <div class="contentsuv">
          <img src="foto/veloz.jpg" alt="Veloz" />
          <h3>Veloz</h3>
          <h3>Rp.280.000.000</h3>
          <div class="bagi">
            <a href="veloz.php" class="button">review</a>
          </div>
        </div>
        <div class="contentsuv">
          <img src="foto/xeniar.jpg" alt="Xenia R" />
          <h3>Xenia R</h3>
          <h3>Rp.270.000.000</h3>
          <div class="bagi">
            <a href="xenia.php" class="button">review</a>
          </div>
        </div>
        <div class="contentsuv">
          <img src="foto/ertigagx.jpg" alt="Ertiga GX" />
          <h3>Ertiga GX</h3>
          <h3>Rp.250.000.000</h3>
          <div class="bagi">
            <a href="ertiga.php" class="button">review</a>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
      <section class="bantuan" id="bantuan">
        <div class="bantuan-text">
          <h2>Bantuan</h2>
          <p>
            Kami siap membantu Anda menemukan kendaraan impian Anda meskipun
            dengan anggaran yang ketat. Tim kami yang berpengalaman akan
            memberikan konsultasi dan solusi terbaik untuk Anda. Hubungi kami
            untuk informasi lebih lanjut dan penawaran spesial!
          </p>
          <p>
            Jangan ragu untuk menghubungi kami kapan saja. Layanan pelanggan
            kami tersedia 24/7 untuk menjawab semua pertanyaan dan memberikan
            informasi yang Anda butuhkan.
          </p>
        </div>
      </section>
      <div class="link">
        <h2>Link</h2>
        <a href="index.php">Home</a>
        <a href="Mobil">Best Seller</a>
        <a href="spare-part">Spare Part</a>
        <a href="#bantuan">Bantuan</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
      </div>
      <div class="media">
        <div class="media">
          <h2>Media</h2>
          <a href="#"><i data-feather="facebook"></i> Facebook</a>
          <a href="#"><i data-feather="twitter"></i> Twitter</a>
          <a href="#"><i data-feather="instagram"></i> Instagram</a>
        </div>
         <div class="kontak">
          <p>
            <strong>Kontak Kami:</strong><br />
            Email: support@waf21garage.com<br />
            Telepon: +62 8977 4894 321<br />
            Alamat: Jl. UAD 21, Yogyakarta, Indonesia
          </p>
        </div>
      </div>
      <div class="credit">
        <p>Created by <span>WAF 21 GARAGE</span>. | &copy; 2024.</p>
      </div>
      </div>
    </footer>
  </body>
</html>
