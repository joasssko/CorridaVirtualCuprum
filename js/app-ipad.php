<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/iphone.css" />
<script>
<?php $im = get_post_thumbnail_id('4');?>
<?php $ima = wp_get_attachment_image_src($im , 'full');?>

var picture = '<?php echo $ima[0]?>' ;

function FbookShare(){
	FB.ui({
		 method: 'feed',
		 href: '<?php echo bloginfo('url')?>',
		 picture : picture,
		 name : 'CorridaCuprumTeletón.cl, La Teletón #LaHacemosTodos',
		 description: 'Corre tu tambien, necesitamos 17 millones de corazones #CuprumAFP #Teleton', 
		 }, function(response){
			 if (response && !response.error_code) {
			  jQuery('#fb-root').removeClass('toggled');
			  window.location.replace("<?php echo get_page_link(24)?>?sm=<?php echo $post->ID?>");
			} else {
			  jQuery('#fb-root').removeClass('toggled');
			}
		});
}
function aporta(corazones){
	$.ajax({
		type: "GET",
		url: "<?php echo get_bloginfo('url')?>/wp-admin/admin-ajax.php",
		dataType: 'html',
		data: ({ action: 'countShits' , corazones : corazones}),
		success: function(data){
			console.log('diste'+corazones);
		},
		error: function(data)  
		{  
			console.log("no pudimos registrar tu aporte");
			return false;
		}  
	});
}

//centers preload
jQuery(document).ready(function($) {
	var f = jQuery( window ).width();
	var t = jQuery( window ).height();
	var s = 100;
	var h = 103;	
	var l = (f-s)/2;
	var m = (t-h)/2;
	
	jQuery('#s1').attr('style' , 'left:'+l+'px; top:'+m+'px');
	jQuery(window).resize(function(event) {
		var f = jQuery( window ).width();
		var t = jQuery( window ).height();
		var s = 100;
		var h = 103;	
		var l = (f-s)/2;
		var m = (t-h)/2;
	
		jQuery('#s1').attr('style' , 'left:'+l+'px; top:'+m+'px');
	});
});

$.getScript('https://www.youtube.com/iframe_api');


<?php 
$g = $_GET['g'];
if($g == 'm'){
?>
//Arbol Masculino
videoinicio = '2jJ9tliHu18';
video_carrera = {
	tra1 : 'nuhHG3GovwU',
	
	trb1_	: 'h2XpvuFjabY',
	trb2_	: 'kqg3TaNy_Pc',
	
	trc1_	: '7UoXvhU8erQ',
	trc2_	: 'p7kwL9vKRVA',
	trc3_	: 'YncEmeTc2Wg',
	trc4_	: 'ZK5kXZL3g1o',
	
	trd1_	: 'wpxmr1zABHY',
	trd2_	: '3XV_14Kilnw',
	trd3_	: '3Fn9Tsq5R7E',
	trd4_	: 'CXGzUqgZUxw',
	trd5_	: 'JdXkBu5o0gA',
	trd6_	: 'G4vpD3Xzdh0',
	trd7_	: 'DwEuv_Y4Zko',
	trd8_	: 'AGTZx4tH3h0'
}

<?php }else{?>
//Arbol Femenino
videoinicio = 'LkNNqnQAizA';
video_carrera = {
	tra1_ : 'l3HXzpKWuow',
	
	trb1_	: 'mGp3Magj-OI',
	trb2_	: '4rCA69KFE2c',
	
	trc1_	: 'd9QNFTyZ1V4',
	trc2_	: 'WTITxVmzneY',
	trc3_	: 'u37tvpm1y94',
	trc4_	: 'XdLO-I_0sgI',
	
	trd1_	: 'w6REacl8DGQ',
	trd2_	: 'YslHgLvnrm8',
	trd3_	: 'XG9Pww7fnYw',
	trd4_	: 'DQUghn_QhSs',
	trd5_	: 'ADseu6lig_w',
	trd6_	: 'wIr4xrG0Q24',
	trd7_	: 'OIQy-KMwgZ8',
	trd8_	: 'v_7qqhUyzGI'
}

<?php }?>

var player;
vid = 'inicio';
//construye el primer video
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '480',
		playerVars: { 
			rel : 0,
			//start: 0,
			enablejsapi : 1, 
			//autoplay: 0, 
			//disablekb: 1,
			//controls: 1 , 
			origin : '"<?php echo get_bloginfo('url')?>"' , 
			//iv_load_policy : 3 , 
			modestbranding : 1 , 
			showinfo : 0 , 
			//playsinline : 1
			//hd: 0
		},
        videoId: videoinicio,
		events: {
		  'onReady': onPlayerReady,
		  'onStateChange': onPlayerStateChange
		}
  });

}

function onPlayerReady(event) {
	player.setVolume(0);
	player.setPlaybackQuality('small');
	if( vid == ''){
	console.log('hemos creado una experiencia reducida para iPhone. El funcionamiento es "slightly different", pero trataré de que todo funcione de la mejor forma para que la experiencia sea la mejor');
	}
}

function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.ENDED ){

		//setTimeout(  levantaTramo , 2000);
		
		if(vid == 'v1'){
			$('#ss2').removeClass('hidden');
			$('#controls').removeClass('layered');	
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+100' :  'var suma = aporte+100'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
		}
		
		if(vid == 'vb1'){
			$('#ss3').removeClass('hidden');
			$('#controls').removeClass('layered');	
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
		}
		if(vid == 'vb2'){
			$('#ss4').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);	
		}
		
		if(vid == 'vu1'){
			$('#ss5').removeClass('hidden');
			$('#controls').removeClass('layered');	
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);	
		}
		if(vid == 'vu2'){
			$('#ss6').removeClass('hidden');
			$('#controls').removeClass('layered');	
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
		}
		if(vid == 'vu3'){
			$('#ss7').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);	
		}
		if(vid == 'vu4'){
			$('#ss8').removeClass('hidden');
			$('#controls').removeClass('layered');	
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
		}
		
		
		if(vid == 'vv1'){
			$('#meta1').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta1 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv2'){
			$('#meta2').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta2 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv3'){
			$('#meta3').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta3 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv4'){
			$('#meta4').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta4 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv5'){
			$('#meta5').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta5 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv6'){
			$('#meta6').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta6 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);	
		}
		if(vid == 'vv7'){
			$('#meta7').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);	
			$('#meta7 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);
		}
		if(vid == 'vv8'){
			$('#meta8').removeClass('hidden');
			$('#controls').removeClass('layered');
			var aporte = parseInt($('#aporteactual').text() , 10);
			<?php echo $g == 'm' ? 'var suma = aporte+70' :  'var suma = aporte+710'  ; ?>;
			$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			$('#meta8 h3').html('<span class="fa fa-heart fa-fw hidden-lg hidden-md hidden-sm"></span> '+suma);
			aporta(suma);
		}
		
		
		
		
	}
}
	 

function inicia(){
	$('#controls').removeClass('blued');
	$('#controls').addClass('layered');
	$('#paso-0').addClass('hidden');
	vid = 'v1';
}
	  
	function btt1(){
		player.cueVideoById(video_carrera.trb1_);
		vid = 'vb1';
		$('#ss2').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btt2(){
		player.cueVideoById(video_carrera.trb2_);
		vid = 'vb2';
		$('#ss2').addClass('hidden');
		$('#controls').addClass('layered');
	}
	
	function btu1(){
		player.cueVideoById(video_carrera.trc1_);
		vid = 'vu1';
		$('#ss3').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btu2(){
		player.cueVideoById(video_carrera.trc2_);
		vid = 'vu2';
		$('#ss3').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btu3(){
		player.cueVideoById(video_carrera.trc3_);
		vid = 'vu3';
		$('#ss4').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btu4(){
		player.cueVideoById(video_carrera.trc4_);
		vid = 'vu4';
		$('#ss4').addClass('hidden');
		$('#controls').addClass('layered');
	}
	
	
	function btv1(){
		player.cueVideoById(video_carrera.trd1_);
		vid = 'vv1'
		$('#ss5').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv2(){
		player.cueVideoById(video_carrera.trd2_);
		vid = 'vv2'
		$('#ss5').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv3(){
		player.cueVideoById(video_carrera.trd3_);
		vid = 'vv3'
		$('#ss6').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv4(){
		player.cueVideoById(video_carrera.trd4_);
		vid = 'vv4'
		$('#ss6').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv5(){
		player.cueVideoById(video_carrera.trd5_);
		vid = 'vv5'
		$('#ss7').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv5(){
		player.cueVideoById(video_carrera.trd6_);
		vid = 'vv6'
		$('#ss7').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv7(){
		player.cueVideoById(video_carrera.trd7_);
		vid = 'vv7'
		$('#ss8').addClass('hidden');
		$('#controls').addClass('layered');
	}
	function btv8(){
		player.cueVideoById(video_carrera.trd8_);
		vid = 'vv8'
		$('#ss8').addClass('hidden');
		$('#controls').addClass('layered');
	}
	
</script>

	
      
<div class="embed-responsive embed-responsive-16by9">
	<div id="player"  class="embed-responsive-item"></div>
</div>

    
<div id="controls" class="blued">
    <div id="paso-0">
    	
        <div class="infocarrera">
            <p>Corre por el corazón de la ciudad y elige caminos para seguir tu trayecto. Cada elección que tomes sumará un numero diferente de corazones. </p>
            <p>¡Necesitamos 17 millones de corazones!</p>
            <div class="btn btn-primary" onClick="inicia()">¡Vamos a correr!</div>
            <small>(Por restricciones del SO. deberás dar "Play" en cada inicio del video)</small>
        </div>
    	
    </div>
    
    <?php if($g == 'm'){?>
        <div id="ss2" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btt1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btt2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss3" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btu1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btu2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        <div id="ss4" class="hidden chooose">
           
           <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btu3()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btu4()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
           
        </div>
        
        <div id="ss5" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss6" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv3()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv4()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss7" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv5()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv6()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss8" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv7()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv8()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        
        
        <div id="meta1" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta2" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta3" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta4" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta5" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta6" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta7" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta8" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <?php } else {?>
    
        <div id="ss2" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btt1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btt2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss3" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btu1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btu2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        <div id="ss4" class="hidden chooose">
           
           <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btu3()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btu4()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
           
        </div>
        
        <div id="ss5" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv1()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv2()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss6" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="bttv3()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv4()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss7" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv5()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv6()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
        
        <div id="ss8" class="hidden chooose">
            
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
                <h1 onClick="btv7()">
                	<span class="fa fa-angle-double-left fa-fw pull-left"></span> 
                    Universidad de Chile
                </h1>
            </div>
            <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
                <h1 onClick="btv8()">
                	Lastarria 
                	<span class="fa fa-angle-double-right fa-fw pull-right"></span>
                </h1>
            </div>
            
        </div>
		
		<div id="meta1" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta2" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta3" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta4" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta5" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta6" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta7" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="meta8" class="hidden meta">
            <div class="insmeta">
                <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                    <h1>¡Haz llegado a la meta!</h1>
                    
                    <div class="clear"></div>
    				<h2>Tu aporte</h2>
    				<div class="clear"></div>
                    
                    <h3>1</h3>
    				<div class="tchare">
                        <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                        <a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
    					<div class="clear miniseparator"></div>
                        <div class="volver">
                            <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/volver.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    <?php }?>
    
</div>






<?php get_footer('carrera')?>