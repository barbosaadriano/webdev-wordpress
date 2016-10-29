<?php
get_header();
if (have_posts()) :
    while (have_posts()):
        the_post();
        if (is_page()) :
            $title = get_the_title();
            ?>
            <h2><?php echo $title != 'Home' ? $title : ""; ?></h2>
            <p>
                <?php echo the_content(); ?>
            </p>
            <?php
        else :
            ?>
            <div class="container">
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>"
                       title="<?php the_title(); ?>"
                       class="btn btn-success">ver postagem</a>
                </article>
            </div>
        <?php
        endif;
    endwhile;
endif;
get_sidebar();
get_footer();
