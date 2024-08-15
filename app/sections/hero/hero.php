<?php if( file_exists (__DIR__ . '/../../data/data.php' ) ):
		require_once __DIR__ . '/../../data/data.php'; ?>


<div class="zerogrid">
	<div class="callbacks_container">
		<ul class="rslides" id="slider4">
			<?php foreach( $hero_sliders as $slider ): ?>
				<li>
					<img src="<?php echo $slider['image']; ?>" alt="">
					<div class="caption">
						<h2><?php echo $slider['title']; ?></h2></br>
						<p><?php echo $slider['dis']; ?></p>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php endif; ?>