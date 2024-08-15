<?php if( file_exists (__DIR__ . '/../../data/theme-options.php' ) ):
		require_once __DIR__ . '/../../data/theme-options.php'; ?>
<?php endif; ?>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $testimonial['title']; ?></h4>
					<div class="row">
						<img src="<?php echo $testimonial['image']; ?>">
						<h5><?php echo $testimonial['name']; ?></h5>
						<p><?php echo $testimonial['discription']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $googlemap['title'] ?></h4>
					<div class="wrap-map">
						<iframe src="<?php echo $googlemap['mapurl']; ?>" width="100%" height="200" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $business_hours['title'] ?></h4>
					<?php foreach( $business_hours['hours_inco'] as $info ): ?>
						<p><span><?php echo $info['day']; ?></span> <?php echo $info['time']; ?></p>
					<?php endforeach; ?>
					<p><span><?php echo $business_hours['bottom_title'] ?></span></br>
					<?php echo $business_hours['bottom_stitle'] ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			<?php echo $footer_bottom['copyright_text']; ?>
			<ul class="quick-link f-right">
				<?php foreach( $footer_bottom['footer_menu'] as $menu ): ?>
					<li><a href="<?php echo $menu['menu_url']; ?>"><?php echo $menu['menu_text']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>