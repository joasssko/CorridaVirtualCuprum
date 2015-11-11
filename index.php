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
            </div>
            <div class="selectors">
            	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-left">
                    <a href="<?php echo get_page_link(4)?>/?g=m" class="btn btn-success">corre y <strong>aporta</strong></a>
                </div>
                
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 personajes pull-right">
                    <a href="<?php echo get_page_link(4)?>/?g=f" class="btn btn-success">corre y <strong>aporta</strong></a>
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
    		<h2>17 millones de corazones están esperando ser completados por el amor de todos.</h2>
            
            <div class="col-md-6 col-lg-6 col-sm-8 col-md-offset-3 col-lg-offset-3 col-sm-offset-2">
                <div id="hearts">
                    <div class="base" style="width:<?php echo $preunido?>%;"></div>
                    <div class="mask"></div>
                </div>
                <p>Reunidos <span><?php echo number_format($llevamos, 0, ',', '.');?></span></p> 
                <p class="esp">No te quedes sin correr,<br>cada carrera cuenta.</p>
            </div>
        </div>
	</div>
</div>

<main>
	<div class="megacontainer">
		<div class="row">
        	
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
            	<figure>
                	
                	<figcaption>
                    	<h3>¿Cómo Aportar?</h3>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                	</figcaption>
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/box-1.jpg" class="img-responsive" alt="">
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
            	<figure>
                	
                	<figcaption>
                    	<h3>Ver Galeria 2014</h3>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                	</figcaption>
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/box-2.jpg" class="img-responsive" alt="">
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
            	<figure>
                	
                	<figcaption>
                    	<h3>Teletón #LaHacemosTodos</h3>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                	</figcaption>
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/box-3.jpg" class="img-responsive" alt="">
                </figure>
            </div>
            
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
            	<figure>
                	
                	<figcaption>
                    	<h3>Inscríbete</h3>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                	</figcaption>
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/box-4.jpg" class="img-responsive" alt="">
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