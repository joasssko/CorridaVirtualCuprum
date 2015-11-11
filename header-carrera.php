<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Fonts -->

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
jQuery(window).load(function() {
	jQuery("#loader-wrapper").fadeOut("slow");
});

var he = $( window ).height();
jQuery( document ).ready(function() {
	jQuery('.home #head').css('height' , he);
	//jQuery('main').css('margin-top' , he);
});
</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1098174560217174',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</head>

<body <?php body_class()?> <?php if(is_page(4)){echo 'id="inicio" data-vid=""';}elseif(is_page(7)){echo 'id="donar"';}?>>

<div id="fb-root"></div>

<div id="loader-wrapper">
	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo-loader.png" alt="">
    <?php /* <div id="loader"></div> */?>
</div>


<header class="navbar-fixed-top">
	<a href="<?php echo get_bloginfo('url')?>">
    	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo-cuprum.png" alt="">
    </a>
        
    <img src="<?php echo get_bloginfo('template_directory')?>/images/logo-corrida.png" class="lcc" alt="">
    
    <div class="navbar-right">
    	
        <div class="ownaporte">
        	<div class="filler"></div>
        	<div class="heart">
            	<img src="<?php echo get_bloginfo('template_directory')?>/images/corazon.png" alt="">
                <span id="aporteactual">0</span>
                <b>Tu Aporte</b>
            </div>
        </div>
        
    </div>
    
    
    
</header>

