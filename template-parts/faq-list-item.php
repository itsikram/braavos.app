<?php
if (isset($args['term'])) {
    $term = $args['term'];

    $query = new WP_Query(array(
        'post_type'      => 'faq',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'faqcat',
                'field'    => 'term_id',
                'terms'    => $term->term_id,
            ),
        ),
    ));

    $isRelatedFaq = false;
    if (!empty($args['is_related_faq'])) {
        $isRelatedFaq = true;
        $currPostId = get_the_ID();
    }

    if ($query->have_posts()) {
?>

        <div class="faqList__item js-faq-list-item">

            <div class="faqList__itemContentWrap js-faq-list-item-content-wrap">
                <div class="faqList__itemContent js-faq-list-item-content">

                    <h3>
                        <?php echo $term->name ?>
                    </h3>

                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();

                        if ($isRelatedFaq && $query->post->ID === $currPostId) {
                            continue;
                        }
                    ?>

                        <a href="<?php echo get_permalink() ?>" class="faqList__itemLink">
                            <?php the_title() ?>
                        </a>

                    <?php } ?>

                </div>
            </div>

            <div class="faqList__itemExpand js-faq-list-item-expand"></div>

        </div>

<?php
    }

    wp_reset_postdata();
}
