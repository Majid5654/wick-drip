<?php
include 'Connect.php';
$query = "SELECT * FROM Homepage.php";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vape Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="db_admin.php">Admin</a></li> 
                <li><a href="db_konsumen.php">Konsumen</a></li> 
                <li><a href="db_barang.php">Item</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Welcome to Wick N Drip</h1>
            <p>Explore our wide range of vape products and accessories</p>
            <button onclick="window.location.href='db_barang.php'">Shop Now</button>
        </section>
        <section class="featured-products">
            <h1>Featured Products</h1>
            <div class="product-grid">
                <div class="product" >
                    <img src="oneo.webp" style="width: 200px; height: auto;">
                    <h2>Oneo POD KIT </h2>
                    <p>Oneo Pod Kit is a sleek metal pod kit that comes with a 1600mAh battery, 3.5ml pod capacity. It has a maximum output power of 40W to meet your needs for large clouds. Applying the original innovative Unicoil technology, OXVA Oneo is highly leak-proof</p>
                    <a href="bill.php?ID=1"><button>Buy Now</button></a>
                </div>
                <div class="product">
                    <img src="FOOM.webp" style="width: 200px; height: auto;">
                    <h2>Foom Iced Tea</h2>
                    <p>Original tea little bit bitter, fresh and suitable to accompany whatever you are doing, Let's guess what kind of tea this is?
                    <p>Nick : 30mg</p>
                    <p>Packaging Size : 30ml</p>
                    <a href="bill.php?ID=2"><button>Buy Now</button></a>
                </div>
            </div>
        </section>
        <section class="call-to-action">
            <h2>Get Started Today!</h2>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Wick N Drip. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
