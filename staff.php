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
				<div class="chef">
					<div class="row">
						<?php foreach( $team_membars as $membar ):  ?>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="zoom-container">
										<a href="<?php echo $membar['image']['url'];  ?>">
											<img src="<?php echo $membar['image']['img'];  ?>" />
										</a>
									</div>
									<h3><?php echo $membar['name'];  ?></h3>
									<ul class="social t-center">
										<?php foreach( $membar['socail_profile'] as $profile ): ?>
											<li><a href="<?php echo $profile['url']; ?>">
												<i class="<?php echo $profile['iconname']; ?>"></i></a>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
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