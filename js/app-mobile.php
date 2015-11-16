<script>

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

videoinicio = 'kH8SWlzHt4k';

<?php 
$g = $_GET['g'];
if($g == 'm'){
?>
//Arbol Masculino
video_carrera = {
	tra1 : 'nuhHG3GovwU',
	tra1_ : 'WDjRnmfjHug',
	
	trb1	: 'U2CVS8nwyvs',
	trb1_	: 'h2XpvuFjabY',
	trb2	: 'rq9yZrCyfhE',
	trb2_	: 'kqg3TaNy_Pc',
	
	trc1	: '5CVlFNdUKDg',
	trc1_	: '7UoXvhU8erQ',
	trc2	: 'EVQ9Ol2siI4',
	trc2_	: 'p7kwL9vKRVA',
	trc3	: 'ZXGP7c9EJYM',
	trc3_	: 'YncEmeTc2Wg',
	trc4	: 'oyqPl5Mr-X8',
	trc4_	: 'ZK5kXZL3g1o',
	
	trd1	: 'S7uFHPzzS8s',
	trd1_	: 'BPqR1s37cRo',
	trd2	: 'KxRletxREJo',
	trd2_	: '3Fn9Tsq5R7E',
	trd3	: 'YSLKBX9vL0s',
	trd3_	: 'wpxmr1zABHY',
	trd4	: 'CXGzUqgZUxw',
	trd4_	: '3XV_14Kilnw',
	trd5	: 'j3C-hYetTIU',
	trd5_	: 'JdXkBu5o0gA',
	trd6	: 'yJIVjTfBHDE',
	trd6_	: 'G4vpD3Xzdh0',
	trd7	: 'fPcoyARrvKw',
	trd7_	: 'DwEuv_Y4Zko',
	trd8	: 'OMUBwK6vvV8',
	trd8_	: 'AGTZx4tH3h0'
}

<?php }else{?>

video_carrera = {
	tra1 : 'r3fAdxXVJRE',
	tra1_ : 'l3HXzpKWuow',
	
	trb1	: 'yWYCWU7l0jk',
	trb1_	: 'mGp3Magj-OI',
	trb2	: 'L_PdyQCscO8',
	trb2_	: '4rCA69KFE2c',
	
	trc1	: 'wX9Ps64UzSU',
	trc1_	: 'd9QNFTyZ1V4',
	trc2	: 'cACsJ5RMXeM',
	trc2_	: 'WTITxVmzneY',
	trc3	: 'zeeKMcNSQ6g',
	trc3_	: 'u37tvpm1y94',
	trc4	: 'VGPoSZBnfJo',
	trc4_	: 'XdLO-I_0sgI',
	
	trd1	: '9iccIkHaw5o',
	trd1_	: 'w6REacl8DGQ',
	trd2	: 'Tl1eBkLd4JA',
	trd2_	: 'YslHgLvnrm8',
	trd3	: '5WX6GtDF_LY',
	trd3_	: 'XG9Pww7fnYw',
	trd4	: 'Pux8GM3vh9o',
	trd4_	: 'DQUghn_QhSs',
	trd5	: 'KCDYdFoC_JU',
	trd5_	: 'ADseu6lig_w',
	trd6	: 'DSiNrvvPeE0',
	trd6_	: 'wIr4xrG0Q24',
	trd7	: 'q9ZXBGVnwE8',
	trd7_	: 'OIQy-KMwgZ8',
	trd8	: 'Knm0WPhVQZg',
	trd8_	: 'v_7qqhUyzGI'
}

<?php }?>


var player;
var playerb;
vid = 'inicio';
//construye el primer video
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '480',
		playerVars: { 
			rel : 0,
			start: 0,
			enablejsapi : 1, 
			autoplay: 0, 
			disablekb: 1,
			controls: 0 , 
			origin : '"<?php echo get_bloginfo('url')?>"' , 
			iv_load_policy : 3 , 
			modestbranding : 1 , 
			showinfo : 0 , 
			playsinline : 1
			//hd: 0
		},
        videoId: videoinicio,
		events: {
		  'onReady': onPlayerReady,
		  'onStateChange': onPlayerStateChange
		}
  });
  
  playerb = new YT.Player('playertercera', {
        height: '250',
        width: '444',
		playerVars: { 
			rel : 0,
			start: 0,
			enablejsapi : 1, 
			autoplay: 0, 
			disablekb: 1,
			controls: 0 , 
			origin : '"<?php echo get_bloginfo('url')?>"' , 
			iv_load_policy : 3 , 
			modestbranding : 1 , 
			showinfo : 0 , 
			playsinline : 1
			//hd: 0
		},
        videoId: videoinicio,
		events: {
		  'onReady': onPlayerReadytercera,
		  'onStateChange': onPlayerStateChangetercera
		}
  });
  
}

function onPlayerReady(event) {
	//event.target.playVideo();	
}

function onPlayerStateChange(event) {
	
	 if(event.data == YT.PlayerState.PLAYING){
		tvid = player.getDuration();
		tvidd = Math.round(tvid);
		//console.log('total'+tvidd);
	}
	
	
	
  	if(event.data == YT.PlayerState.PLAYING){
		//setTimeout( time() , 1000 );
	}
	
	if (event.data == YT.PlayerState.ENDED && vid == 'h1'){
		console.log('stermine');
		$('#walker , .ownaporte').addClass('hidden');
		$('#m1').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m1 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h2'){
		console.log('stermine');
		$('#walker , .ownaporte').addClass('hidden');
		$('#m2').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m2 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h3'){
		console.log('stermine')	;
		$('#walker , .ownaporte').addClass('hidden');
		$('#m3').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m3 h3').text(suma);
		
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h4'){
		console.log('stermine')	;
		$('#walker , .ownaporte').addClass('hidden');
		$('#m4').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m4 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h5'){
		console.log('stermine')	;
		$('#walker , .ownaporte').addClass('hidden');
		$('#m5').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m5 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h6'){
		console.log('stermine')	;
		$('#walker , .ownaporte').addClass('hidden');
		$('#m6').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m6 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h7'){
		console.log('stermine');
		$('#walker , .ownaporte').addClass('hidden');8
		$('#m7').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m7 h3').text(suma);
	}
	if (event.data == YT.PlayerState.ENDED && vid == 'h8'){
		console.log('stermine');
		$('#walker , .ownaporte').addClass('hidden');
		$('#m8').removeClass('hidden');
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		aporta(suma);
		$('#m8 h3').text(suma);
	}
	
	
}


//var playerb;
/* function onYouTubeIframeAPIReady() {
    
} */

function onPlayerReadytercera(event) {
	//event.target.playVideo();	
}

function onPlayerStateChangetercera(event) {
	//event.target.playVideo();	
}

/* function time(){
	//vid = $('#player').data('v');
	timex = player.getCurrentTime();
	timexx = Math.round(timex);
	setTimeout( time , 1000 );
	console.log(timexx);
} */

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
  
function iniciar(){
	player.setVolume(0);
	player.setPlaybackQuality('small')
	player.playVideo();
	$('#s1').addClass('hidden');
	$('#walker').removeClass('hidden');
	timei();
	
	
	
	function timei(){
		//vid = $('#player').data('v');
		timex = player.getCurrentTime();
		timexx = Math.round(timex);
		setTimeout( timei , 1000 );
		console.log(timexx);
		
		//ajustar a 9
		if(timexx == 1 && vid == 'inicio'){
			
			playerb.cueVideoById(video_carrera.tra1_);
			player.cueVideoById(video_carrera.tra1);
			
			function pv(){
				playerb.playVideo();
				player.playVideo();
				
				music = $('#bgmusic');
				music.get(0).play();
				
				vid = 'paso-1';
				$('#tercera').removeClass('hidden')
				$('#colors').addClass('per25');
				$('#stiky').addClass('per25');
			}
			
			setTimeout(
			
			pv()	
			
			, 1000);
		}
		
		
		<?php if($g == h){?>
			if(timexx == 20 && vid == 'paso-1'){
				$('#s2').removeClass('hidden');
			}
			
			if(timexx == 21 && vid == 'c1'){
				$('#s3').removeClass('hidden');
			}
			if(timexx == 17 && vid == 'c2'){
				$('#s4').removeClass('hidden');
			}
			
			if(timexx == 20 && vid == 'd1'){
				$('#s5').removeClass('hidden');
			}
			if(timexx == 17 && vid == 'd2'){
				$('#s6').removeClass('hidden');
			}
			if(timexx == 19 && vid == 'd3'){
				$('#s7').removeClass('hidden');
			}
			if(timexx == 23 && vid == 'd4'){
			$('#s8').removeClass('hidden');
		}
		<?php }else{?>
			if(timexx == 18 && vid == 'paso-1'){
				$('#s2').removeClass('hidden');
			}
			
			if(timexx == 18 && vid == 'c1'){
				$('#s3').removeClass('hidden');
			}
			if(timexx == 23 && vid == 'c2'){
				$('#s4').removeClass('hidden');
			}
			
			if(timexx == 25 && vid == 'd1'){
				$('#s5').removeClass('hidden');
			}
			if(timexx == 20 && vid == 'd2'){
				$('#s6').removeClass('hidden');
			}
			if(timexx == 19 && vid == 'd3'){
				$('#s7').removeClass('hidden');
			}
			if(timexx == 20 && vid == 'd4'){
			$('#s8').removeClass('hidden');
		}
		<?php }?>
		
		
		
		if(timexx == tvidd-1 && vid == 'paso-1'){
			
			player.cueVideoById(video_carrera.trb1);
			playerb.cueVideoById(video_carrera.trb1_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( au1() , 2000 );
			
			function au1(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per50');
				$('#stiky').addClass('per50');
				$('#s2.choose').addClass('hidden');
				vid = 'c1';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
		}
		
		
		else if(timexx == tvidd-1 && vid == 'c1'){
			
			player.cueVideoById(video_carrera.trc1);
			playerb.cueVideoById(video_carrera.trc1_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( auc1() , 2000 );
			function auc1(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per75');
				$('#stiky').addClass('per75');
				$('#s3.choose').addClass('hidden');
				vid = 'd1';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
		}
		
		else if(timexx == tvidd-1 && vid == 'c2'){
			
			player.cueVideoById(video_carrera.trc3);
			playerb.cueVideoById(video_carrera.trc3_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( auc3() , 2000 );
			function auc3(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per75');
				$('#stiky').addClass('per75');
				$('#s4.choose').addClass('hidden');
				vid = 'd3';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
		}
		
		
		
		else if(timexx == tvidd-1 && vid == 'd1'){
			
			player.cueVideoById(video_carrera.trd1);
			playerb.cueVideoById(video_carrera.trd1_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( aud1() , 2000 );
			function aud1(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per99');
				$('#stiky').addClass('per99');
				$('#s5.choose').addClass('hidden');
				vid = 'h1';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
			
		}
		
		else if(timexx == tvidd-1 && vid == 'd3'){
			
			player.cueVideoById(video_carrera.trd3);
			playerb.cueVideoById(video_carrera.trd3_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( aud3() , 2000 );
			function aud3(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per99');
				$('#stiky').addClass('per99');
				$('#s6.choose').addClass('hidden');
				vid = 'h3';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
			
		}
		
		else if(timexx == tvidd-1 && vid == 'd5'){
			
			player.cueVideoById(video_carrera.trd5);
			playerb.cueVideoById(video_carrera.trd5_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');
			
			setTimeout( aud5() , 2000 );
			function aud5(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per99');
				$('#stiky').addClass('per99');
				$('#s7.choose').addClass('hidden');
				vid = 'h5';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
			
		}
		
		else if(timexx == tvidd-1 && vid == 'd7'){
			
			player.cueVideoById(video_carrera.trd7);
			playerb.cueVideoById(video_carrera.trd7_);
			player.setPlaybackQuality('small');
			playerb.setPlaybackQuality('small');

			setTimeout( aud7() , 2000 );
			function aud7(){
				player.playVideo();
				playerb.playVideo();
				$('#colors').addClass('per99');
				$('#stiky').addClass('per99');
				$('#s8.choose').addClass('hidden');
				vid = 'h7';
				var aporte = parseInt($('#aporteactual').text() , 10);
				var suma = aporte+500;
				$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
			}
			
		}
		
		
		
	}
  
}

function cambiaterceracam(){
	$('#tercera').addClass('hidden');
	$('#primera').removeClass('hidden');
	
	$('#player').addClass('hidden');
	$('#playertercera').removeClass('hidden');
}


function cambiaprimeracam(){
	$('#primera').addClass('hidden');
	$('#tercera').removeClass('hidden');
	
	$('#playertercera').addClass('hidden');
	$('#player').removeClass('hidden');
}


function hb1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trb1);
	playerb.cueVideoById(video_carrera.trb1_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pv1() , 2000);
	
	function pv1(){
		$('#s2.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per50');
		$('#stiky').addClass('per50');
		vid = 'c1';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hb2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	
	player.cueVideoById(video_carrera.trb2);
	playerb.cueVideoById(video_carrera.trb2_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pv2() , 2000);
	
	function pv2(){
		$('#s2.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per50');
		$('#stiky').addClass('per50');
		vid = 'c2';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
	
}

function hc1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trc1);
	playerb.cueVideoById(video_carrera.trc1_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvc1() , 2000);
	
	function pvc1(){
		$('#s3.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per75');
		$('#stiky').addClass('per75');
		vid = 'd1';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
	
}
function hc2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trc2);
	playerb.cueVideoById(video_carrera.trc2_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvc2() , 2000);
	
	function pvc2(){
		$('#s3.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per75');
		$('#stiky').addClass('per75');
		vid = 'd2';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hc3(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trc3);
	playerb.cueVideoById(video_carrera.trc3_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvc3() , 2000);
	
	function pvc3(){
		$('#s4.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per75');
		$('#stiky').addClass('per75');
		vid = 'd3';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hc4(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trc4);
	playerb.cueVideoById(video_carrera.trc4_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvc4() , 2000);
	
	function pvc4(){
		$('#s4.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per75');
		$('#stiky').addClass('per75');
		vid = 'd4';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}

function hd1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd1);
	playerb.cueVideoById(video_carrera.trd1_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh1() , 2000);
	
	function pvh1(){
		$('#s5.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h1';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd2);
	playerb.cueVideoById(video_carrera.trd2_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh2() , 2000);
	
	function pvh2(){
		$('#s5.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h2';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd3(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd3);
	playerb.cueVideoById(video_carrera.trd3_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh3() , 2000);
	
	function pvh3(){
		$('#s6.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h3';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd4(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd4);
	playerb.cueVideoById(video_carrera.trd4_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh4() , 2000);
	
	function pvh4(){
		$('#s6.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h4';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd5(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd5);
	playerb.cueVideoById(video_carrera.trd5_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh5() , 2000);
	
	function pvh5(){
		$('#s7.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h5';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd6(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd6);
	playerb.cueVideoById(video_carrera.trd6_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh6() , 2000);
	
	function pvh6(){
		$('#s7.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h6';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd7(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd7);
	playerb.cueVideoById(video_carrera.trd7_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh7() , 2000);
	
	function pvh7(){
		$('#s8.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h7';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}
function hd8(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	
	player.cueVideoById(video_carrera.trd8);
	playerb.cueVideoById(video_carrera.trd8_);
	player.setPlaybackQuality('small');
	playerb.setPlaybackQuality('small');
	setTimeout( pvh8() , 2000);
	
	function pvh8(){
		$('#s8.choose').addClass('hidden');
		player.playVideo();
		playerb.playVideo();
		$('#colors').addClass('per99');
		$('#stiky').addClass('per99');
		vid = 'h8';
		var aporte = parseInt($('#aporteactual').text() , 10);
		var suma = aporte+500;
		$('#aporteactual').html('<div class="fa fa-heart fa-fw"></div> '+suma);
	}
}


 

</script>