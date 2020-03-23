<?php

get_header();
echo "<!-- index.php -->";
?>


<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
                            <h2><?php wp_title(''); ?></h2>
						</header>
                        
                        <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post(); ?>

                                    <h3 class="byline"><?php the_title(); ?></h3>
                                    <?php 
                                        $content = get_the_excerpt();
                                        $resumo = substr($content, 0, 450);
                                        echo '<p>'.$resumo.'</p>';

                                    ?>
                                    <a href="<?php the_permalink();?>" class="button">Saiba mais</a>
                                    <hr>
                                    <br>

                                <?php endwhile;

                            else :
                                echo '<p> No content found</p>';

                            endif;
                        ?>

                    </section>
				</div>
            </div>





<?php

get_footer();

?>