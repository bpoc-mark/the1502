<section class="sect_8" id="sect_8">
    <div class="l-wrap">
        <div class="sect_8__content">
            <h3 class="sect_8__title">おすすめのお料理</h3>

            <!-- CARD PC -->
            <div class="c-card_boxes_pc">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'category_name' => 'おすすめのお料理',
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="box">
                            <?php the_post_thumbnail(); ?>
                            <p class="box__dish-title">
                                <?php the_title(); ?>
                            </p>
                            <p class="price">
                                <?php the_field('price'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <!-- CARD SP -->

            <div class="c-card_boxes_sp slider">
            <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'category_name' => 'おすすめのお料理',
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="box">
                            <?php the_post_thumbnail(); ?>
                            <p class="box__dish-title"><?php the_title(); ?></p>
                            <p class="price">
                                <?php the_field('price'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <!-- END SP SLIDER -->
            <div class="sect_8__compute">
                <p class="sect_8__compute__title">一般的にご飲食された方のお会計</p>
                <p class="sect_8__compute__men">男性平均：約<span>4,000円〜6,000円</span></p>
                <p class="sect_8__compute__women">女性平均：約<span>3,500円〜5,000円</span></p>
            </div>

            <div class="course_menu">
                <h2 class="course_menu__title">コースメニュー</h2>


                <!-- PC VIEW -->
                <div class="c-card_boxes_pc">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'category_name' => 'コースメニュー',
                        'paged' => $paged,
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="box">
                                <?php the_post_thumbnail(); ?>
                                <p class="box__dish-title">
                                    <span>
                                        <?php the_title(); ?>
                                    </span>
                                </p>
                                <div class="desc">
                                    <?php the_content(); ?>
                                </div>
                                <p class="price">
                                    <?php the_field('price'); ?>
                                </p>
                                <button class="btn">
                                    <?php the_field('button_value'); ?> 
                                </button>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- SP VIEW -->
                <div class="c-card_boxes_sp slider">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'category_name' => 'コースメニュー',
                        'paged' => $paged,
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="box">
                                <?php the_post_thumbnail(); ?>
                                <p class="box__dish-title-2">
                                    <span>
                                        <?php the_title(); ?>
                                    </span>
                                </p>
                                <div class="desc">
                                    <?php the_content(); ?>
                                </div>
                                <p class="price">
                                    <?php the_field('price'); ?>
                                </p>
                                <button class="btn">
                                    <?php the_field('button_value'); ?> 
                                </button>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- END SP SLIDER -->
            </div>
        </div>
    </div>
</section>