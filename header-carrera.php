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

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 10]>
	
<style>    
#avisob { background-color: #35609b; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1000000000; display:block }

#avisob #inside { display: inline-block;
    position: absolute;
    left: 0;
    top: 44%;
    width: 600px;
    height: 60px;
    margin: 0 auto;
    right: 0;
    color: #fff;
    text-align: center;
	font-size:20px
}

#avisob #inside span {
    font-size: 70px;
    clear: both;
    display: block;
}
 </style>   
<![endif]-->
</head>

<body <?php body_class()?> <?php if(is_page(4)){echo 'id="inicio" data-vid=""';}elseif(is_page(7)){echo 'id="donar"';}?>>

<div id="fb-root"></div>

<div id="loader-wrapper">
	<img src="<?php echo get_bloginfo('template_directory')?>/images/loader-corrida.gif" alt="">
    <?php /* <div id="loader"></div> */?>
</div>

<div id="aviso" class="hidden-lg hidden-md">
	<?php /* <img src="<?php echo get_bloginfo('template_directory')?>/images/logo.png" alt=""> */?>
    <div id="inside"><img src="<?php echo get_bloginfo('template_directory')?>/images/cuprum_mobile.png" alt="" /><span class="fa fa-mobile  animated swing infinite"></span>Para una mejor experiencia, gire su dispositivo a la posición horizontal.</div>
</div>   

<div id="avisob" class="">
    <div id="inside"><span class="fa fa-internet-explorer"></span>Lo sentímos, necesitas Internet Explorer 10 o superior para visualizar la carrera. <a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Actualiza tu navegador</a> o utiliza Google Chrome o Firefox</div> 
</div>

<header class="navbar-fixed-top">
	<a href="<?php echo get_bloginfo('url')?>">
    	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo-cuprum.png" class="lc" alt="">
    </a>
        
    <img src="<?php echo get_bloginfo('template_directory')?>/images/logo-corrida.png" class="lcc" alt="">
    
    <div class="navbar-right carr">
    	
        <div class="ownaporte">
        	<div class="filler hidden-xs"></div>
        	<div class="heart">
            	<img src="<?php echo get_bloginfo('template_directory')?>/images/corazon_cuprum.svg" class="hidden-xs" alt="">
                <span id="aporteactual"><div class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></div> 0</span>
                <b>Tu Aporte</b>
            </div>
        </div>
        
    </div>
    
    
    
</header>

