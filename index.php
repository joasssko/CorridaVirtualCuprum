<?php get_header()?>

<div id="head">
	<div class="container-fluid">
		<div class="row">
        	<div class="runners">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-left">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/male.png" class="img-responsive aligncenter" alt="">
                </div>
                
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-right">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/female.png" class="img-responsive aligncenter" alt="">
                </div>
            </div>
            <div class="infolcc">
            	<img src="<?php echo get_bloginfo('template_directory')?>/images/todosjuntos.png" alt="">
                <div class="clear"></div>
                <div class="bajar">
                	<span class="fa-angle-double-down fa fa-fw down"></span>
                </div>
            </div>
            <div class="selectors">
            	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-left">
                    <a href="<?php echo get_page_link(4)?>/?g=m" class="btn btn-success">corre y aporta <strong>tus corazones</strong></a>
                </div>
                
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-right">
                    <a href="<?php echo get_page_link(4)?>/?g=f" class="btn btn-success">corre y aporta <strong>tus corazones</strong></a>
                </div>
            </div>
        	
        </div>
	</div>
</div>

<?php 
//calcula el llenado de los corazones
$total = get_field('total_de_aportes' , 'options');
$llevamos = getPostViews(4); 
$preunido = ($llevamos * 100)/$total;
?>

<div id="triangle">
	<div class="container">
		<div class="row">
    		<h2>Si Juntamos 17 millones Cuprum hará una donación adicional.</h2>
            
            <div class="col-md-6 col-lg-6 col-sm-8 col-md-offset-3 col-lg-offset-3 col-sm-offset-2">
                <div id="hearts">
                    <div class="base" style="width:<?php echo $preunido?>%;"></div>
                    <div class="mask"></div>
                </div>
                <p>Llevamos <span><?php echo number_format($llevamos, 0, ',', '.');?></span></p> 
                <p class="esp">No te quedes sin correr.</p>
                <p class="esp">Cada Carrera Cuenta</p>
            </div>
        </div>
	</div>
</div>

<main>
	<div class="megacontainer">
		<div class="row">
        	
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            	<figure>
                	
                	<figcaption>
                    	<h3><a href="http://www.corridacuprumteleton.cl/como_apoyar.html">¿Cómo Ayudar?</a></h3>
                		<p>Puedes participar en la #CorridaCuprum junto a 10.000 corredores o en la #CorridaVirtual desde cualquier lugar.</p>
                	</figcaption>
                    <a href="http://www.corridacuprumteleton.cl/como_apoyar.html">
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/box-1.jpg" class="img-responsive" alt="">
                    </a>
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            	<figure>
                	
                	<figcaption>
                    	<h3><a href="http://www.corridacuprumteleton.cl/galeria.html">Galería de fotos</a></h3>
                		<p>Revisa aquí imágenes y momentos de las anteriores Corridas Cuprum por la Teletón.</p>
                	</figcaption>
                    <a href="http://www.corridacuprumteleton.cl/galeria.html">
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/box-2.jpg" class="img-responsive" alt="">
                    </a>
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            	<figure>
                	<figcaption>
                    	<h3><a href="http://www.corridacuprumteleton.cl/galeria_facebook.html
">Comparte tus fotos</a></h3>
                		<p>Aquí podrás solicitar que todas las fotos de la producción en que aparezcas, se publiquen en tu Facebook.</p>
                	</figcaption>
                    <a href="http://www.corridacuprumteleton.cl/galeria_facebook.html
"> 
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/box-3.jpg" class="img-responsive" alt="">
                    </a>
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            	<figure>
                	
                	<figcaption>
                    	<h3><a href="http://www.corridacuprumteleton.cl/inscripcion.html">Inscríbete</a></h3>
                		<p>Participa junto a tu familia y amigos en los 5 o 10 K. ¡Te esperamos a ti y a 10.000 corredores más!</p>
                	</figcaption>
                    <a href="http://www.corridacuprumteleton.cl/inscripcion.html">
                        <img src="<?php echo get_bloginfo('template_directory')?>/images/box-4.jpg" class="img-responsive" alt="">
                    </a>
                </figure>
            </div>
        	<div class="clear"></div>
            <div class="force">
            	<p>
                	Porque este año la Teletón
               		<span>#LaHacemosTodos</span>
                	<strong>¡No te quedes fuera!</strong>
                </p>
                
            </div>      
        </div>
	</div>
</main>

<?php get_footer()?>