           <div class="column is-8">

                <div class="c-heading c-heading-mobile">
                    <a href="#">Popular Stories</a>
                </div>

                <?php
                $args = [
                    'post_type'           => 'post',
                    'posts_per_page'      => 6,
                    'orderby'             => 'meta_value_num',
                    'meta_key'            => 'views',
                    'ignore_sticky_posts' => true,
                ];

                $wp_query = new WP_Query($args);

                $slider = [
                    'autoplay'       => false,
                    'dots'           => false,
                    'arrow'          => true,
                    'slidesToShow'   => 3,
                    'slidesToScroll' => 3,
                    'responsive'     => [
                        [
                            'breakpoint' => 768,
                            'settings'   => [
                                'slidesToShow'   => 1,
                                'slidesToScroll' => 1,
                            ],
                        ],
                    ],

                ];
                ?>

                <div class="c-popular-story">

                    <div class="f-slider columns is-multiline c-opinion-media" data-slick='<?= json_encode($slider); ?>'>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="column is-4">
                                <div class="card">
                                    <div class="card-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?= wprs_thumbnail_image(get_post_thumbnail_id($post->ID), 'is-500by306'); ?>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <a class="card-title" href="<?php the_permalink(); ?>"><?php wprs_the_title(); ?></a>
                                        <div class="card-excerpt">
                                            <?= trim_text(strip_shortcodes(strip_tags($post->post_content)), 70); ?>
                                        </div>
                                    </div>
                                    <div class="card-footer is-hidden-mobile">
                                        <div class="level is-mobile u-width-100">
                                            <div class="level-left">
                                            </div>
                                            <div class="level-right">
                                                <span class="c-post-author"><?php the_category(); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                        <?php wp_reset_query(); ?>

                    </div>

                    <div class="c-block-more is-hidden-mobile">
                        &nbsp;
                    </div>

                </div>

            </div>