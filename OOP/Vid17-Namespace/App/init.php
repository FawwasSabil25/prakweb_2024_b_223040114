<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

//yg atas manual yg bawah autoload

spl_autoload_register(function($class){ //autoload
    // App\Produk\User = ["App", "Produk", "User]
    $class = explode('\\', $class);
    $class = end($class);
    require_once '/Produk/' . $class . '.php.'; //manggil semua class dalem folder produk
});

spl_autoload_register(function($class){ //autoload
    $class = explode('\\', $class);
    $class = end($class);
    require_once '/Produk/' . $class . '.php.'; //manggil semua class dalem folder produk
});