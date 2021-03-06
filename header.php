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

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
// jQuery(window).load(function() {
// 	jQuery("#loader-wrapper").fadeOut("slow");
// 	setTimeout(function(){
// 		// Hide the address bar!
// 		window.scrollTo(0, 1);
// 	}, 0);
// });

// var he = $( window ).height();
// jQuery( document ).ready(function() {
// 	jQuery('.home #head').css('height' , he);
// 	//jQuery('main').css('margin-top' , he);
// });
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
   
   
<?php $im = get_post_thumbnail_id('4');?>
<?php $ima = wp_get_attachment_image_src($im , 'full');?>

var picture = '<?php echo $ima[0]?>' ;

function FbookShare(){
	FB.ui({
		 method: 'feed',
		 href: '<?php echo bloginfo('url')?>',
		 picture : picture,
		 name : 'CorridaCuprumTeletón.cl, La Teletón #LaHacemosTodos',
		 description: 'Corre tu también, necesitamos 17 millones de corazones #CuprumAFP #Teleton', 
		 }, function(response){
			 if (response && !response.error_code) {
			  jQuery('#fb-root').removeClass('toggled');
			  window.location.replace("<?php echo get_page_link(24)?>?sm=<?php echo $post->ID?>");
			} else {
			  jQuery('#fb-root').removeClass('toggled');
			}
		});
}
   
</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70358460-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class()?> <?php if(is_page(4)){echo 'id="inicio" data-vid=""';}elseif(is_page(7)){echo 'id="donar"';}?>>

<div id="fb-root"></div>

<div id="loader-wrapper">
  <img src="<?php echo get_bloginfo('template_directory')?>/images/loader-corrida.gif" alt="">
    <?php /* <div id="loader"></div> */?>
</div>

<div id="aviso" class="hidden-lg hidden-md">
	<?php /* <img src="<?php echo get_bloginfo('template_directory')?>/images/logo.png" alt=""> */?>
    <div id="inside"><img src="<?php echo get_bloginfo('template_directory')?>/images/cuprum_mobile.png" alt="" /><span class="animated swing infinite"><i class="fa fa-mobile fa-rotate-90"></i></span>Para una mejor experiencia, gire su dispositivo a la posición horizontal.</div>
    
</div>


<header class="navbar-fixed-top">
	<a href="<?php echo get_bloginfo('url')?>">
    	<img src="<?php echo get_bloginfo('template_directory')?>/images/logo-cuprum.png" alt="" class="lc">
    </a>
        
    <img src="<?php echo get_bloginfo('template_directory')?>/images/logo-corrida_st.png" class="lcc" alt="">
    <div class="navbar-right">
    	<?php wp_nav_menu(array('theme_location'  => 'primary', 'menu_class' => 'nav navbar-nav pull-left hidden-xs hidden-sm' , 'container' => 'none')) ?>
        
        <!-- Single button -->
        <div class="btn-group pull-right hidden-md hidden-lg mmobile">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-bars fa-fw"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="">Home</a></li>
            <li><a href="http://www.corridacuprumteleton.cl/como_apoyar.html">¿Cómo ayudar?</a></li>
            <li><a href="http://www.corridacuprumteleton.cl/galeria.html">Galería</a></li>
            <li><a href="http://corridacuprumteleton.cl/inscripcion_general.html" rel="nofollow">Inscríbete</a></li>
          </ul>
        </div>
        
        
        <div class="sharer pull-right">
        	<?php /* <div class="fb-like" data-href="https://www.facebook.com/CuprumAFP" data-width="180" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div> */?>
            
            <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span><span class="hidden-xs"> Compartir</span></span>
                	<a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu también por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton @CuprumAFP" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span><span class="hidden-xs"> Twittear</span></a>
        </div>
    </div>
    
    
    
</header>