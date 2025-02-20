<?php global $data; ?>

<?php
$faqPosts = get_posts([
    'post_type'      => 'faq',
    'posts_per_page' => -1,
    'meta_query'      => [
        [
            'key'       => 'related_feature_posts',
            'value'     => '"' . get_the_ID() . '"',
            'compare'   => 'LIKE',
        ],
    ],
    'suppress_filters'  => false,
]);

if ($faqPosts) {
?>

    <section class="sFeatFaq">
        <div class="container">

            <h2 class="sFeatFaq__title h1 h1_underlined h1_centered">
                <?= $data['title']; ?>
            </h2>

            <div id="feature-faq" class="sFeatFaq__items">

                <?php
                foreach ($faqPosts as $post) {
                    setup_postdata($post);
                ?>

                    <div class="sFeatFaq__item jsFeatureFaqItem collapsed">

                        <h3 class="sFeatFaq__itemQ jsFeatureFaqItemQ">

                            <?php the_title(); ?>

                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.165 1.39334C19.724 1.9523 19.724 2.85857 19.165 3.41753L11.0542 11.5283C10.4953 12.0873 9.589 12.0873 9.03004 11.5283L0.91922 3.41753C0.36026 2.85857 0.36026 1.9523 0.91922 1.39334C1.47818 0.834381 2.38445 0.834381 2.94341 1.39334L10.0421 8.49206L17.1409 1.39334C17.6999 0.834381 18.606 0.834381 19.165 1.39334Z" fill="white" />
                            </svg>

                        </h3>

                        <div class="sFeatFaq__itemA h4 jsFeatureFaqItemA" style="display: none;">
                            <?php the_content(); ?>
                        </div>

                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>

            </div>

        </div>
    </section>

<?php } ?>