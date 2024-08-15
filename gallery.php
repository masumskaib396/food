<!-- Header Section -->
<?php if( file_exists(  __DIR__.'/app/sections/header/header.php' ) ){
	require_once __DIR__ . '/app/sections/header/header.php';
}
?>
<?php if( file_exists (__DIR__ . '/app/data/data.php' ) ):
		require_once __DIR__ . '/app/data/data.php'; ?>
<?php endif; ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<?php 
			$currentPage = basename(__FILE__, '.php');
			$currentPageFormatted = ucwords(str_replace('-', ' ', $currentPage));
		?>
		<div class="crumbs">
			<ul>
				<li><a href="<?php echo $breadcrumb['menu_url']; ?>">
					<?php echo $breadcrumb['menu_text'] ?></a>
				</li>
				<li><a href="<?php echo $currentPage.'.php' ?>"><?php echo $currentPageFormatted; ?></a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<?php foreach( $gallry_items['gallery'] as $items ): ?>
						<div class="col-1-3">
							<div class="zoom-container">
								<a href="<?php echo $items['url']; ?>">
									<span class="zoom-caption">
										<span><?php echo $items['category']; ?></span>
									</span>
									<img src="<?php echo $items['image']; ?>" />
								</a>
							</div>
						</div>
					<?php endforeach; ?>
					
				</div>
			</div>
		</div> 
	</div>
</section>

<!-- Footer Section -->
<?php if( file_exists(  __DIR__.'/app/sections/footer/footer-section.php' ) ){
	require_once __DIR__ . '/app/sections/footer/footer-section.php';
}
?>