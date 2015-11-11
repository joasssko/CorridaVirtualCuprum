<script>

jQuery(document).ready(function($) {
	var f = jQuery( window ).width();
	var t = jQuery( window ).height();
	var s = 220;
	var h = 227;	
	var l = (f-s)/2;
	var m = (t-h)/2;
	
	jQuery('#s1').attr('style' , 'left:'+l+'px; top:'+m+'px');
	jQuery(window).resize(function(event) {
		var f = jQuery( window ).width();
		var t = jQuery( window ).height();
		var s = 220;
		var h = 227;	
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
	tra1_ : 'nuhHG3GovwU',
	
	trb1	: 'U2CVS8nwyvs',
	trb1_	: '',
	trb2	: 'rq9yZrCyfhE',
	trb2_	: '',
	
	trc1	: '5CVlFNdUKDg',
	trc1_	: '',
	trc2	: 'EVQ9Ol2siI4',
	trc2_	: '',
	trc3	: 'ZXGP7c9EJYM',
	trc3_	: '',
	trc4	: 'oyqPl5Mr-X8',
	trc4_	: '',
	
	trd1	: 'S7uFHPzzS8s',
	trd1_	: '',
	trd2	: 'KxRletxREJo',
	trd2_	: '',
	trd3	: 'YSLKBX9vL0s',
	trd3_	: '',
	trd4	: 'CXGzUqgZUxw',
	trd4_	: '',
	trd5	: 'j3C-hYetTIU',
	trd5_	: '',
	trd6	: 'yJIVjTfBHDE',
	trd6_	: '',
	trd7	: 'fPcoyARrvKw',
	trd7_	: '',
	trd8	: 'OMUBwK6vvV8',
	trd8_	: ''
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
vid = 'inicio';
//construye el primer video
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
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
	player.setPlaybackQuality('medium')
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
			player.cueVideoById(video_carrera.tra1_);
			player.loadVideoById(video_carrera.tra1);
			
			
			vid = 'paso-1';
			$('#tercera').removeClass('hidden')
			$('#colors').addClass('per25');
			$('#stiky').addClass('per25');
		}
		
		
		if(timexx == 20 && vid == 'paso-1'){
			$('#s2').removeClass('hidden');
		}
		
		
		if(timexx == 20 && vid == 'c1'){
			$('#s3').removeClass('hidden');
		}
		if(timexx == 20 && vid == 'c2'){
			$('#s4').removeClass('hidden');
		}
		
		
		if(timexx == 20 && vid == 'd1'){
			$('#s5').removeClass('hidden');
		}
		if(timexx == 20 && vid == 'd2'){
			$('#s6').removeClass('hidden');
		}
		if(timexx == 20 && vid == 'd3'){
			$('#s7').removeClass('hidden');
		}
		if(timexx == 20 && vid == 'd4'){
			$('#s8').removeClass('hidden');
		}
		
		
		
		
		if(timexx == tvidd && vid == 'paso-1'){
			player.loadVideoById(video_carrera.trb1);
			$('#colors').addClass('per50');
			$('#stiky').addClass('per50');
			$('#s2.choose').addClass('hidden');
			vid = 'c1';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		
		else if(timexx == tvidd && vid == 'c1'){
			player.loadVideoById(video_carrera.trc1);
			$('#colors').addClass('per75');
			$('#stiky').addClass('per75');
			$('#s3.choose').addClass('hidden');
			vid = 'd1';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		else if(timexx == tvidd && vid == 'c2'){
			player.loadVideoById(video_carrera.trc3);
			$('#colors').addClass('per75');
			$('#stiky').addClass('per75');
			$('#s4.choose').addClass('hidden');
			vid = 'd3';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		
		
		else if(timexx == tvidd && vid == 'd1'){
			player.loadVideoById(video_carrera.trd1);
			$('#colors').addClass('per99');
			$('#stiky').addClass('per99');
			$('#s5.choose').addClass('hidden');
			vid = 'h1';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		else if(timexx == tvidd && vid == 'd3'){
			player.loadVideoById(video_carrera.trd3);
			$('#colors').addClass('per99');
			$('#stiky').addClass('per99');
			$('#s6.choose').addClass('hidden');
			vid = 'h3';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		else if(timexx == tvidd && vid == 'd5'){
			player.loadVideoById(video_carrera.trd5);
			$('#colors').addClass('per99');
			$('#stiky').addClass('per99');
			$('#s7.choose').addClass('hidden');
			vid = 'h5';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		else if(timexx == tvidd && vid == 'd7'){
			player.loadVideoById(video_carrera.trd7);
			$('#colors').addClass('per99');
			$('#stiky').addClass('per99');
			$('#s8.choose').addClass('hidden');
			vid = 'h7';
			var aporte = parseInt($('#aporteactual').text() , 10);
			var suma = aporte+500;
			$('#aporteactual').text(suma);
		}
		
		
		
	}
  
}

function cambiaterceracam(){
	
	
	$('#tercera').addClass('hidden');
	$('#primera').removeClass('hidden');
	
	//console.log(vid);
	currenttime = player.getCurrentTime();
	
	if(vid == 'paso-1'){
		player.cueVideoById(video_carrera.tra1_ , currenttime , 'small');
		player.setPlaybackQuality('small');
	}
	
	
	player.playVideo();
	
}

function hb1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per50');
	$('#stiky').addClass('per50');
	player.loadVideoById(video_carrera.trb1);
	$('#s2.choose').addClass('hidden');
	vid = 'c1';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}

function hb2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per50');
	$('#stiky').addClass('per50');
	player.loadVideoById(video_carrera.trb2);
	$('#s2.choose').addClass('hidden');
	vid = 'c2';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}


function hc1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per75');
	$('#stiky').addClass('per75');
	player.loadVideoById(video_carrera.trc1);
	$('#s3.choose').addClass('hidden');
	vid = 'd1';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hc2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per75');
	$('#stiky').addClass('per75');
	player.loadVideoById(video_carrera.trc2);
	$('#s3.choose').addClass('hidden');
	vid = 'd2';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hc3(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per75');
	$('#stiky').addClass('per75');
	player.loadVideoById(video_carrera.trc3);
	$('#s4.choose').addClass('hidden');
	vid = 'd3';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hc4(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per75');
	$('#stiky').addClass('per75');
	player.loadVideoById(video_carrera.trc4);
	$('#s4.choose').addClass('hidden');
	vid = 'd4';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}



function hd1(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd1);
	$('#s5.choose').addClass('hidden');
	vid = 'h1';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd2(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd2);
	$('#s5.choose').addClass('hidden');
	vid = 'h2';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd3(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd3);
	$('#s6.choose').addClass('hidden');
	vid = 'h3';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd4(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd4);
	$('#s6.choose').addClass('hidden');
	vid = 'h4';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd5(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd5);
	$('#s7.choose').addClass('hidden');
	vid = 'h5';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd6(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd6);
	$('#s7.choose').addClass('hidden');
	vid = 'h6';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd7(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd7);
	$('#s8.choose').addClass('hidden');
	vid = 'h7';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}
function hd8(lugar){
	var place = lugar;
	console.log(place);
	$('#tramoactual').text(place);
	$('#colors').addClass('per99');
	$('#stiky').addClass('per99');
	player.loadVideoById(video_carrera.trd8);
	$('#s8.choose').addClass('hidden');
	vid = 'h8';
	var aporte = parseInt($('#aporteactual').text() , 10);
	var suma = aporte+500;
	$('#aporteactual').text(suma);
}


 

</script>