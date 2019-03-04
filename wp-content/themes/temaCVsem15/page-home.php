<?php get_header(); ?>
    
                    <!-- We'll fill this with dummy content -->
                    <!-- Acerca de mi -->
                    <section id="about">
                        <h1>
                            <?php the_field('about_name'); ?>
                        </h1>
                        <p>
                            <?php the_field('about_direction'); ?>|
                            <?php the_field('about_phone'); ?> |
                            <?php the_field('about_email'); ?>

                        </p>
                        <br/>
                        <br/>
                        <p>
                            <?php the_field('about_aboutme'); ?>
                        </p>
                        <br/>
                        <br/>
                        <div>
                        	<a href="<?php the_field('about_rrss_fb'); ?>" target="_blank"><i class="fab fa-facebook-square" style="font-size: 2em; margin-right: 5px;"></i></a>
                        	<a href="<?php the_field('about_rrss_tw'); ?>" target="_blank"><i class="fab fa-twitter-square" style="font-size: 2em; margin-right: 5px;"></i></a>
                        	<a href="<?php the_field('about_rrss_git'); ?>" target="_blank"><i class="fab fa-github-square" style="font-size: 2em; margin-right: 5px;"></i></a>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section>
                    <!--Experiencia -->
                    <section id="experience">
					  	<br/>
                        <br/>
					    <h1>
                            EXPERIENCIA
                        </h1>
				      	<?php
					        $arg = array(
					          'post_type'		 => 'experiencia',
					          'posts_per_page' => 3
					        );
					        $get_arg = new WP_Query( $arg );
					        while ( $get_arg->have_posts() ) {
					        $get_arg->the_post();
				        ?>
							<div class="post">
                        		<div class="row">
                            		<div class="col-md-6">
                                		<h5>					
                                			<?php the_title(); ?>
                                		</h5>
                                		<p>
                                    		<?php the_field('cargo');?>
                                		</p>
				                    </div>
				                    <div class="col-md-6" style="text-align: right;">
		                                <p>
		                                    <?php the_field('years'); ?>
		                                </p>
		                            </div>
				                </div> 
				                <p>   
				                      <?php the_content() ?>
				                </p>
				           </div>
					       <?php } wp_reset_postdata();
					      ?>
					    <br/>
                        <br/>
                        <div id="linea">
                        </div>
					</section>
                    <!--Educación -->
                    <section id="education">
                        <br/>
                        <br/>
                        <h1>
                            EDUCACIÓN
                        </h1>
                        	<?php
						        $arg = array(
						          'post_type'		 => 'education',
						          'posts_per_page' => 3
						        );
						        $get_arg = new WP_Query( $arg );
						        while ( $get_arg->have_posts() ) {
						        $get_arg->the_post();
					        ?>
						<br/>
						<div class="post">
							<div class="row">
                            	<div class="col-md-6">
                                	<h5>
                                		<?php the_title(); ?>
                                	</h5>
                                	<p>
                                     	<?php the_field('carrera'); ?>
                                	</p>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                	<p>
                                    	<?php the_field('año') ?>
                                	</p>
                                </div>
                            </div>
                        </div>
                        <?php } wp_reset_postdata();
					      ?>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                         
                    <!-- Habilidades -->
                    <section id="skills">
                    	<br/>
                        <br/>
                        <h1>HABILIDADES</h1>
                        <?php
						        $arg = array(
						          'post_type'		 => 'skill',
						          'posts_per_page' => 3
						        );
						        $get_arg = new WP_Query( $arg );
						        while ( $get_arg->have_posts() ) {
						        $get_arg->the_post();
					        ?>
                        <br/>
                        <div class="post">
                        	<h5>
                            	<?php the_title(); ?>
                        	</h5>
                        	<p>
                            	<?php the_content(); ?>
                        	</p>
                        </div>
                        <?php } wp_reset_postdata();
					      ?>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section> 

                 
                    <section id="contact">
                        <br/>
                        <br/>
                        <h1>
                            CONTACTO
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nulla sint quaerat rem aut neque magni, obcaecati possimus explicabo repudiandae.
                        </p>
	                        <?php echo do_shortcode('[contact-form-7 id="64" title="Formulario de contacto 1"]') ?>
                    </section>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
        