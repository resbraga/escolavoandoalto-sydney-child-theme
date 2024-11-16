<?php
/**
 * Slider template
 *
 * @package Sydney
 */

//Slider template
if ( ! function_exists( 'sydney_slider_template' ) ) :
function sydney_slider_template() {

	if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '4000');
    $text_speed = get_theme_mod('textslider_speed', '4000');
    $text_slide = get_theme_mod('textslider_slide', 0);
    if (!$text_slide) {
        $slide_toggle = true;
    } else {
        $slide_toggle = false;
    }

    //Slider text
    if ( !function_exists('pll_register_string') ) {
        $slider_title_1     = get_theme_mod('slider_title_1', 'Bem-vindo a Voando Alto');
        $slider_title_2     = get_theme_mod('slider_title_2', 'Aqui se aprende a ser feliz');
        $slider_title_3     = get_theme_mod('slider_title_3');
        $slider_title_4     = get_theme_mod('slider_title_4');
        $slider_title_5     = get_theme_mod('slider_title_5');
        $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Escola de Educação Infantil');
        $slider_subtitle_2  = get_theme_mod('slider_subtitle_2', 'Clique no botão abaixo');
        $slider_subtitle_3  = get_theme_mod('slider_subtitle_3');
        $slider_subtitle_4  = get_theme_mod('slider_subtitle_4');
        $slider_subtitle_5  = get_theme_mod('slider_subtitle_5');
        $slider_button      = get_theme_mod('slider_button_text', 'Conheça mais');
        $slider_button_url  = get_theme_mod('slider_button_url','#primary');        
    } else {
        $slider_title_1     = pll__(get_theme_mod('slider_title_1', 'Bem-vindo a Voando Alto'));
        $slider_title_2     = pll__(get_theme_mod('slider_title_2', 'Aqui se aprende a ser feliz'));
        $slider_title_3     = pll__(get_theme_mod('slider_title_3'));
        $slider_title_4     = pll__(get_theme_mod('slider_title_4'));
        $slider_title_5     = pll__(get_theme_mod('slider_title_5'));
        $slider_subtitle_1  = pll__(get_theme_mod('slider_subtitle_1','Escola de Educação Infantil'));
        $slider_subtitle_2  = pll__(get_theme_mod('slider_subtitle_2', 'Clique no botão abaixo'));
        $slider_subtitle_3  = pll__(get_theme_mod('slider_subtitle_3'));
        $slider_subtitle_4  = pll__(get_theme_mod('slider_subtitle_4'));
        $slider_subtitle_5  = pll__(get_theme_mod('slider_subtitle_5'));  
        $slider_button      = pll__(get_theme_mod('slider_button_text', 'Conheça mais'));
        $slider_button_url  = pll__(get_theme_mod('slider_button_url','#primary'));
    }

	?>

	<div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>">
		<img class="logo-rede right" src="http://escolavoandoalto.com.br/wp-content/uploads/2016/04/logo-rede-ciranda-borda-e1463365562441.png" alt="Logo da Rede Ciranda" />
	    <div class="slides-container">
		    <?php 
			    if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.png') ) {
					echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.jpg')) . ');"></div>';
				
				}
			    if ( get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg') ) {
					echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg')) . ');"></div>';
				}			
			    if ( get_theme_mod('slider_image_3') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_3')) . ');"></div>';
				}
			    if ( get_theme_mod('slider_image_4') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_4')) . ');"></div>';
				}
			    if ( get_theme_mod('slider_image_5') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_5')) . ');"></div>';
				}				
			?>	
	    </div>

        <div class="text-slider-section">
            <div class="text-slider" data-speed="<?php echo esc_attr($text_speed); ?>" data-slideshow="<?php echo esc_attr($slide_toggle); ?>">
                <ul class="slide-text slides">
                    <?php if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.png') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle">
                                <div class="logo-wrapper slider-font">
                                    <?php if ( get_theme_mod('site_logo') ) : ?>
                                    <img class="site-logo-slider" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
                                    <?php endif; ?>
                                    <?php echo esc_html($slider_title_1); ?>
                                </div>
                            </h2>
                            <p class="subtitle"><?php echo esc_html($slider_subtitle_1); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
               		<?php if ( get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle">
                                <div class="logo-wrapper slider-font">
    								<?php if ( get_theme_mod('site_logo') ) : ?>
    								<img class="site-logo-slider" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
    								<?php endif; ?>
    								<?php echo esc_html($slider_title_2); ?>
                                </div>
							</h2>
                            <p class="subtitle"><?php echo esc_html($slider_subtitle_2); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_3') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle">	
                                <div class="logo-wrapper slider-font">						
    								<?php if ( get_theme_mod('site_logo') ) : ?>
    								<img class="site-logo-slider" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
    								<?php endif; ?>
    								<?php echo esc_html($slider_title_3); ?>
                                </div>
							</h2>
                            <p class="subtitle"><?php echo esc_html($slider_subtitle_3); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_4') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle">		
                                <div class="logo-wrapper slider-font">					
    								<?php if ( get_theme_mod('site_logo') ) : ?>
    								<img class="site-logo-slider" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
    								<?php endif; ?>
    								<?php echo esc_html($slider_title_4); ?>
                                </div>
							</h2>
                            <p class="subtitle"><?php echo esc_html($slider_subtitle_4); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_5') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle">
                                <div class="logo-wrapper slider-font">						
    								<?php if ( get_theme_mod('site_logo') ) : ?>
    								<img class="site-logo-slider" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
    								<?php endif; ?>
    								<?php echo esc_html($slider_title_5); ?>
                                </div>
							</h2>
                            <p class="subtitle"><?php echo esc_html($slider_subtitle_5); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>                                        
                </ul>
            </div>
            <?php if ($slider_button) : ?>
                <a href="<?php echo esc_url($slider_button_url); ?>" class="roll-button button-slider"><?php echo esc_html($slider_button); ?></a>
            <?php endif; ?>
        </div>


	    
	</div>
	<?php
	}
}
endif;