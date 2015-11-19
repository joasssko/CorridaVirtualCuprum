<script>
console.log('ios');


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
	trd1_	: 'wpxmr1zABHY',
	trd2	: 'KxRletxREJo',
	trd2_	: '3XV_14Kilnw',
	trd3	: 'YSLKBX9vL0s',
	trd3_	: '3Fn9Tsq5R7E',
	trd4	: 'BPqR1s37cRo',
	trd4_	: 'CXGzUqgZUxw',
	trd5	: 'j3C-hYetTIU',
	trd5_	: 'JdXkBu5o0gA',
	trd6	: 'yJIVjTfBHDE',
	trd6_	: 'G4vpD3Xzdh0',
	trd7	: 'fPcoyARrvKw',
	trd7_	: 'DwEuv_Y4Zko',
	trd8	: 'OMUBwK6vvV8',
	trd8_	: 'AGTZx4tH3h0'
}

var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
	  var playerb;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'nuhHG3GovwU',
          events: {
            //'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
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

function onPlayerStateChange(event) {
	//console.log(event.data)


	if (event.data == YT.PlayerState.ENDED ){

		setTimeout(  levantaTramo , 2000);
		
		function levantaTramo(){
			if(vid == 'v1a'){
				alert('aportaste 1 con recorrido 1a');
				aporta(1)
			}
			
			if(vid == 'v1b'){
				alert('aportaste 2 con recorrido 1b');
				aporta(2)
			}
			
			if(vid == 'v2a'){
				alert('aportaste 1 con recorrido 2a');
				aporta(3)
			}
			
			if(vid == 'v2b'){
				alert('aportaste 1 con recorrido 2b');
				aporta(4)
			}

		}
		
	}
}
	  
      /* function stopVideo() {
        player.stopVideo();
		player.webkitExitFullScreen();
		$('#player').remove();
      } */
	
	function bt1(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v1'
		$('#paso-1').addClass('hidden');
		$('#paso-2-a').removeClass('hidden');
	}
	
	function bt2(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v2'
	}
	
	function bt1a(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v1a'
	}
	
	function bt1b(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v1b'
	}
	
	function bt2a(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v2a'
	}
	function bt2b(lugar){
		player.cueVideoById(video_carrera.trd1);
		vid = 'v1b'
	} 
	
	
	
</script>

	
<div class="clear separator"></div>     
<div class="clear separator"></div>      
<div class="col-xs-8 col-xs-offset-2">
	<div class="embed-responsive embed-responsive-16by9">
        <div id="player"  class="embed-responsive-item"></div>
    </div>
</div>
<div class="clear separator"></div>    

<div id="paso-0">
	<div class="btn btn-success" onClick="player.playVideo()">Iniciar</div>
</div>

<div id="paso-1">
	<div class="btn btn-success" onClick="bt1()">recorrido 1</div>
	<div class="btn btn-success" onClick="bt2()">recorrido 2</div>
</div>

<div id="paso-2-a" class="hidden">
	<div class="btn btn-success" onClick="bt1a()">recorrido 1a</div>
	<div class="btn btn-success" onClick="bt1b()">recorrido 1b</div>
</div>
<div id="paso-2-b" class="hidden">
	<div class="btn btn-success" onClick="bt2a()">recorrido 2a</div>
	<div class="btn btn-success" onClick="bt2b()">recorrido 2b</div>
</div>




<?php get_footer('carrera')?>