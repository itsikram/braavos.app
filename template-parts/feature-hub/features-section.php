<?php $data = get_field('features_section'); ?>

<section class="sFeatHubFeatures">
    <div class="container">
        <div class="sFeatHubFeatures__inner">

            <h2 class="sFeatHubFeatures__title h1 h1_centered h1_underlined">
                <?= $data['title']; ?>
            </h2>

            <?php
            $cats = get_terms([
                'taxonomy'      => 'feature_cat',
                'hide_empty'    => false,
                'suppress_filters'  => false
            ]);

            if ($cats) {
            ?>

                <div id="features-filter" class="sFeatHubFeatures__filter">

                    <button type="button" class="sFeatHubFeatures__filterItem active" data-filter="*">
                        <?= __('All', 'braavos'); ?>
                    </button>

                    <?php foreach ($cats as &$cat) { ?>
                        <button type="button" class="sFeatHubFeatures__filterItem" data-filter="<?= $cat->slug; ?>">
                            <?= $cat->name; ?>
                        </button>
                    <?php } ?>

                </div>

            <?php } ?>

            <div id="features" class="sFeatHubFeatures__posts">

                <?php
                $features = get_posts([
                    'post_type'         => 'feature',
                    'posts_per_page'    => -1,
                    'orderby'           => 'menu_order',
                    'order'             => 'ASC',
                    'suppress_filters'  => false
                ]);

                if ($features) {
                    foreach ($features as $post) {
                        setup_postdata($post);

                        $classes = [];

                        if (get_field('highlighted')) {
                            $classes[] = 'sFeatHubFeatures__post_highlighted';
                        }

                        $cats = get_the_terms($post->ID, 'feature_cat');
                        if ($cats && !is_wp_error($cats)) {
                            $classes = array_merge($classes, array_map(fn ($cat) => $cat->slug, $cats));
                        }
                ?>

                        <a class="sFeatHubFeatures__post <?= join(' ', $classes); ?>" href="<?= get_permalink(); ?>">

                            <div class="sFeatHubFeatures__postImage">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', ['alt' => get_the_title()]);
                                }
                                ?>
                            </div>

                            <div class="sFeatHubFeatures__postInfo">

                                <div class="sFeatHubFeatures__postTitle">
                                    <?= get_the_title(); ?>
                                </div>

                                <div class="sFeatHubFeatures__postExcerpt">
                                    <?= get_the_excerpt(); ?>
                                </div>

                            </div>

                        </a>

                <?php
                    }
                    wp_reset_postdata();
                }
                ?>

            </div>

        </div>
    </div>
</section>