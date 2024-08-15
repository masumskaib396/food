<?php if( file_exists (__DIR__ . '/../../data/theme-options.php' ) ):
		require_once __DIR__ . '/../../data/theme-options.php'; ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    
</head>
<body>
<div class="wrap-body">



	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<?php if( $contact_info['email'] ): ?>
					<li class="mail"><p><?php echo $contact_info['email']; ?></p></li>
				<?php endif; ?>

				<?php if( $contact_info['phone'] ): ?>
					<li class="phone"><p><?php echo $contact_info['phone']; ?></p></li>
				<?php endif; ?>
			</ul>
			<?php if( !empty( $social_profile ) ): ?>
				<?php foreach( $social_profile as $social ): ?>
					<ul class="top-social f-right">
						<li><a href="<?php echo $social['url']; ?>"><i class="<?php echo $social['iconname']; ?>"></i></a></li>
					</ul>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><a href="<?php echo $logo[ 'logo_url' ]; ?>" class="logo">
				<img src="<?php echo $logo[ 'logo' ]; ?>"></a>
			</center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $logo[ 'menu_bottom_text' ]; ?></h2>
			</div>
		</div>
	</div>

	<?php if( !empty( $menus ) ):
		 $menusitems =  $menus;
		 $counter = 1;
		?>
		<!--//////////////////////////////////////Menu-->
		<a href="#" class="nav-toggle">Toggle Navigation</a>
		<nav class="cmn-tile-nav">
			<ul class="clearfix">
				<?php foreach( $menusitems as $item ):  ?>
					<li class="colour-<?php echo $counter; ?>">
						<a href="<?php echo $item[ 'menu_url' ];  ?>"><?php echo $item[ 'menu_text' ];  ?></a>
					</li>
				<?php $counter++; endforeach; ?>
			</ul>
		</nav>
	<?php endif; ?>