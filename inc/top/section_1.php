<section class="sect_1" id="sect_1">
    <div class="l-wrap">
        <div class="l-container sect_1__inner">
            <img class="sect_1__img-clouds"
                src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/clouds.png" alt="">
            <img class="sect_1__img-map" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/map.png"
                alt="">
            <div class="l-content sect_1__description">
                <p class="c-heading--01 c-heading--white"> JR草津駅から徒歩4分、<br class="br-pc"> <br class="br-sp">
                    魚介は産地直送や、<br class="br-sp">毎日市場に買付け。<br class="br-pc"> <br class="br-sp">
                    新鮮魚介居酒屋。<br class="br-pc"> <br class="br-sp">
                    47都道府県の日本酒 <br class="br-sp">
                    取り揃えています。
                </p>
            </div>
            <div class="l-container sect_1__center-col-1">

                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'category_name' => 'Store',
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="sect_1__center--frame">
                            <?php the_post_thumbnail(); ?>
                            <div class="c-heading-title c-heading-title-white mt-20"><?php the_title(); ?></div>
                            <div class="text text-white"><?php the_content(); ?></div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>