<!-- Header Section -->
<?php if( file_exists(  __DIR__.'/app/sections/header/header.php' ) ){
	require_once __DIR__ . '/app/sections/header/header.php';
}
?>

<!-- Hero Section -->
<?php if( file_exists(  __DIR__.'/app/sections/hero/hero.php' ) ){
	require_once __DIR__ . '/app/sections/hero/hero.php';
}
?>

<!-- Product Section -->
<?php if( file_exists(  __DIR__.'/app/sections/product/product.php' ) ){
	require_once __DIR__ . '/app/sections/product/product.php';
}
?>


<!-- Footer Section -->
<?php if( file_exists(  __DIR__.'/app/sections/footer/footer-section.php' ) ){
	require_once __DIR__ . '/app/sections/footer/footer-section.php';
}
?>