<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thinkness
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-     Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="maingpl">
<div id="headwrap" class="hidden-sm hidden-xs environment-header-one">
	<div class="bgwhite" style="padding-bottom: 10px;">
		<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="environment-top-strip">
					<div class="row blind-preven">
						<div class="logo_wrap col-sm-12" align="center">
										<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-fluid" src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/04/blindness_logo_1.png' ) ); ?>"/></a>
						</div>
					</div>
				</div>
			</div>
	    </div>
		<div class="row">
			<div class="col-sm-12">
				<div class="environment-top-strip">
					<div class="row blind-preven">
						<div class="blindness-style col-sm-12">BUREAU FOR THE PREVENTION OF BLINDNESS <br /> 
							<span class="division-blind">A Division of the S.A. National Council for the Blind <span class="tel-no">Tel: (012) 452 3811</span></span>
						</div>
					</div>
				</div>
			</div>
	    </div>
		</div>
	</div>
	</div>
</div>