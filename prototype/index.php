<?php
require_once 'autoload.php';

$method = (isset($_GET['method'])) ? $_GET['method'] : 'viewHomepage';
$id     = (isset($_GET['id'])) ? $_GET['id'] : -999.99;         // Check if id is set, if not id = -999.99;

if (isset($_GET['class'])) {
    if ($_GET['class'] === 'user')    { // User controller (all user related functions)
        $controller = new UserC();
    } elseif ($_GET['class'] === 'homepage') { // Catalog controller (all product catalog related functions)
        $controller = new HomepageC();
    } elseif ($_GET['class'] === 'catalog') { // Catalog controller (all product catalog related functions)
        $controller = new CatalogC();
    } elseif ($_GET['class'] === 'product') { // Product controller (all product related functions)
        $controller = new ProductC();
//    } elseif ($_GET['class'] === 'basket')  { // Basket controller (all basket related functions)
//        $controller = new BasketC();
//    } elseif ($_GET['class'] === 'admin')   { // Admin controller (all admin related functions)
//        $controller = new AdminC();
    } elseif ($_GET['class'] === 'guestbook') { // Catalog controller (all product catalog related functions)
        $controller = new GuestbookC();
    }
    elseif ($_GET['class'] === 'contacts') { // Catalog controller (all product catalog related functions)
        $controller = new ContactsC();
    }
} else {
    $controller = new HomepageC();                // Default controller
}
$controller -> request($method);