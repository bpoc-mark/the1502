<section class="sect_4" id="sect_4">
    <div class="l-insta">
        <div class="l-insta__inner">


            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'category_name' => 'Instagram',
                'paged' => $paged,
            );

            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="l-insta__content-1">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="l-content l-insta__offcl-inst">
            <a class="off-text off-text-primary" href="https://www.instagram.com/the1502_shiga/" target="_blank">
                <img class="insta-pic" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/insta-logo-white.png" alt="">
                &nbsp;official Instagram : the1502_shiga</a>
        </div>
    </div>
</section>