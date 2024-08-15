<?php if( file_exists (__DIR__ . '/data.php' ) ):
		require_once __DIR__ . '/data.php'; ?>
<?php endif; ?>


<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2><?php echo $content_box['title'];  ?></h2>
					<span><?php echo  $content_box['dis']; ?></span>
				</div>
			</div>
		</section>
        
        <?php if( !empty( $food_items ) ): ?>
            <!-----------------content-box-2-------------------->
            <section class="content-box box-2">
                <div class="zerogrid">
                    <div class="row wrap-box"><!--Start Box-->
                        <div class="header">
                            <h2><?php echo $food_items['section_title']['title']; ?></h2>
                            <hr class="line">
                            <span><?php echo $food_items['section_title']['dis']; ?></span>
                        </div>
                        <div class="row">
                            <?php foreach( $food_items['products'] as $item ): ?>
                                <div class="col-1-3">
                                    <div class="box-item">
                                        <span class="ribbon"><?php echo $item['category']; ?><b></b></span>
                                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['category']; ?>">
                                        <p><?php echo $item['dis'];  ?></p>
                                        <div class="content-bottom">
                                            
                                            <div class="price">
                                                <?php  if( !$item['sale_price'] ): ?>
                                                    <span class="text-danger"><?php echo $item['regular_price']; ?></span> 
                                                <?php else:?>
                                                    <span class="text-danger"><?php echo $item['sale_price']; ?></span> 
                                                    <span class="text-muted"><s><?php echo $item['regular_price']; ?></s></span>
                                                <?php endif; ?>
                                            </div>
                                            
                                            <a href="<?php echo $item['button']['url']; ?>" class="button button-1">
                                                <?php echo $item['button']['text']; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
	</div>
</section>