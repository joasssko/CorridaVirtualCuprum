<?php get_header('carrera')?>


<?php
include 'mobiledetect.php';
$detect = new Mobile_Detect;?>
<?php if($detect->isIOS()){?>

	<?php get_template_part('js/app-iphone')?>
    
<?php }elseif ($detect->isMobile() && !$detect->isIOS()){?>

	<?php get_template_part('js/app-mobile')?>

<?php }else{?>
	
	<?php get_template_part('js/app')?>
<audio src="<?php echo get_bloginfo('template_directory')?>/sounds/bg.mp3" id="bgmusic" loop>
<p>If you are reading this, it is because your browser does not support the audio element.     </p>
<embed src="<?php echo get_bloginfo('template_directory')?>/sounds/bg.mp3" width="180" height="90" hidden="true" />
</audio>

<?php 
$g = $_GET['g'];
if($g == 'm'){
?>

<div id="controles" class="blued">
	<div id="s1">
    
    	<div class="iniciar hidden-xs">
        	<div class="infocarrera hidden-xs">Corre por el corazón de la ciudad y elige  caminos para seguir tu trayecto. Cada elección que tomes sumará un numero diferente de corazones.
            <br>
            
            <strong>¡Necesitamos 17 millones de corazones!</strong>
            </div>	
            <span class="btn btn-primary" onClick="iniciar();">Inicia tu corrida</span>
            <div>Corre cuantas veces quieras, cada carrera suma.</div>
            <div class="clear"></div>
            <small>Sitio optimizado IE10+, Chrome, Firefox y Safari, Versión ajustada para dispositivos móviles Android.</small>
        </div>
    
    	<img src="<?php echo get_bloginfo('template_directory')?>/images/play.png" alt=""  onClick="iniciar();" class="hidden-md hidden-lg hidden-sm" >
    </div>
    <div id="s2" class="choose hidden">
    	<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
            <h1 onClick="hb1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Universidad de Chile</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
            <h1 onClick="hb2($(this).text())">Calle Nueva York <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    
    <div id="s3" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
	    	<h1 onClick="hc1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Lastarria</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
        	<h1 onClick="hc2($(this).text())">Paris y Londres <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
    	</div>
    </div>
    <div id="s4" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
        	<h1 onClick="hc3($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Plaza Constitución</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
        	<h1 onClick="hc4($(this).text())">San Diego <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
    	</div>
    </div>
    
    
    <div id="s5" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
        	<h1 onClick="hd1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Bellas Artes</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 pull-right">
        	<h1 onClick="hd2($(this).text())">Santa Lucía <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
    	</div>
    </div>
    <div id="s6" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
        	<h1 onClick="hd3($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Paris y Londres II</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
        	<h1 onClick="hd4($(this).text())">Torre Estacionamientos <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
    	</div>
    </div>
    <div id="s7" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
        	<h1 onClick="hd5($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Calle en construcción</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">		
        	<h1 onClick="hd6($(this).text())">Tribunales de justicia <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
    	</div>
    </div>
    <div id="s8" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
        	<h1 onClick="hd7($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Paseo Bulnes</h1>
    	</div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
        	<h1 onClick="hd8($(this).text())">Parque Almagro <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    
    <div id="m1" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd1()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m2" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd2()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m3" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd3()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m4" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd4()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m5" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd5()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m6" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd6()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m7" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd7()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m8" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd8()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    
</div>
<?php }else{?>
<div id="controles" class="blued">
	<div id="s1">
    	<div class="iniciar hidden-xs">
        	<div class="infocarrera hidden-xs">Corre por el corazón de la ciudad y elige  caminos para seguir tu trayecto. Cada elección que tomes sumará un numero diferente de corazones.
            <br>
            
            <strong>¡Necesitamos 17 millones de corazones!</strong>
            </div>	
            <span class="btn btn-primary" onClick="iniciar();">Inicia tu corrida</span>
            <div>Corre cuantas veces quieras, cada carrera suma.</div>
            <div class="clear"></div>
            <small>Sitio optimizado IE10+, Chrome, Firefox y Safari, Versión ajustada para dispositivos móviles Android.</small>
        </div>
    
    	<img src="<?php echo get_bloginfo('template_directory')?>/images/play.png" alt="" class="hidden-md hidden-lg hidden-sm"  onClick="iniciar();">
    </div>
    <div id="s2" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
    		<h1 onClick="hb1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Mercado Central</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hb2($(this).text())">Parque Forestal <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    
    <div id="s3" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
            <h1 onClick="hc1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Parque Los Reyes</h1>
            
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hc2($(this).text())">Puente <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    <div id="s4" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
    		<h1 onClick="hc3($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> La Chascona</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hc4($(this).text())">Parque de las Esculturas <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    
    
    <div id="s5" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
	    	<h1 onClick="hd1($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Barrio Yungay</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hd2($(this).text())">Concha y Toro <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
	    </div>
    </div>
    <div id="s6" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
	    <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
    		<h1 onClick="hd3($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> La vega</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hd4($(this).text())">Recoleta <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    <div id="s7" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
    		<h1 onClick="hd5($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Subida San Cristóbal</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hd6($(this).text())">Virgen San Cristóbal <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    <div id="s8" class="choose hidden">
		<div class="time"><span><em class="fa fa-clock-o fa-fw hidden-lg hidden-md hidden-sm"></em>10</span></div>
    	<div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-left">
	        <h1 onClick="hd7($(this).text())"><span class="fa fa-angle-double-left fa-fw pull-left"></span> Parque Bicentenario</h1>
        </div>
        <div class="seleccion col-md-6 col-sm-6 col-lg-6 col-xs-6 pull-right">
    		<h1 onClick="hd8($(this).text())">Parque Alberto Hurtado <span class="fa fa-angle-double-right fa-fw pull-right"></span></h1>
        </div>
    </div>
    
    
    <div id="m1" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd1()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m2" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd2()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m3" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd3()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m4" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd4()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m5" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd5()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m6" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd6()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
                <h3>1</h3>
<div class="tchare">
                	<span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span> Compartir</span>
                	<a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span> Twittear</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="m7" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd7()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
<h2>Tu aporte</h2>
<div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    <div id="m8" class="meta hidden">
    	<div class="insmeta">
            <div class="col-md-4 col-lg-4 col-sm-6 xol-xs-12 col-md-offset-4 col-lg-offset-4 col-sm-offset-3 result">
                <h1 onClick="hd8()">¡Haz llegado a la meta!</h1>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/recorrido.png" alt="" class="trama">
                <div class="clear"></div>
                <h2>Tu aporte</h2>
                <div class="clear"></div>
                <img src="<?php echo get_bloginfo('template_directory')?>/images/corazones.png" alt="" class="haarts">
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
    
   
</div>
<?php }?>

    <?php if(wp_is_mobile()){?>
    <div id="segundacam" class=" pull-right">
    	<div id="primera" class="hidden" onClick="cambiaprimeracam()"><img src="<?php echo get_bloginfo('template_directory')?>/images/1era-mobile.png" alt=""></div>
    	<div id="tercera" class="hidden" onClick="cambiaterceracam()"><img src="<?php echo get_bloginfo('template_directory')?>/images/3era-mobile.png" alt=""></div>
    </div>
<div id="walker" class="hidden">
	<?php }else{?>
<div id="walker" class="hidden">
    <div id="segundacam">
    	<div id="primera" class="hidden" onClick="cambiaprimeracam()"><img src="<?php echo get_bloginfo('template_directory')?>/images/primera.png" alt=""></div>
    	<div id="tercera" class="hidden" onClick="cambiaterceracam()"><img src="<?php echo get_bloginfo('template_directory')?>/images/tercera.png" alt=""></div>
    </div>
    <?php }?>

	<div id="tramoactual">
    	Plaza de Armas
    </div>
    <div id="monkeyman" class="hidden-xs">
    	<div id="base"></div>
        <div id="colors"></div>
        <div id="stiky"><img src="<?php echo get_bloginfo('template_directory')?>/images/stickyman.png" alt=""></div>
    </div>
</div>

<div class="embed-responsive embed-responsive-16by9">
	<div id="player" data-v="inicio" class="embed-responsive-item"></div>
    <div id="playertercera" class="embed-responsive-item hidden"></div>
</div>

<div class="sharer pull-right">
	<h4>La Teletón #LaHacemosTodos</h4>
	<?php /* <div class="fb-like" data-href="https://www.facebook.com/CuprumAFP" data-width="180" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div> */?>
    
    <span class="btn btn-success fbbb" onClick="FbookShare()"><span class="fa fa-facebook fa-fw"></span><span class="hidden-xs"> Compartir</span></span>
                	<a onclick="basicPopup(this.href);return false" href="http://twitter.com/share?text=Corre tu tambien por la Teletón, necesitamos 17 millones de corazones #CorridaVirtualCUPRUM #Teleton" class="btn btn-success twww"><span class="fa fa-twitter fa-fw"></span><span class="hidden-xs"> Twittear</span></a>
    
</div>

<?php get_footer('carrera')?>
<?php }?>

