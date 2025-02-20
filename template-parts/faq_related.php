<h3 class="faq_single_related_title">
    <?php _e('Related FAQ', 'braavos') ?>
</h3>

<svg class="faq_single_related_subtitle" width="156" height="6" viewBox="0 0 156 6" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="0.188477" y="0.632812" width="155" height="5" rx="2.5" fill="white" />
</svg>

<div class="faqList">

    <?php
    $terms = [];

    if ($static_cat = get_field('faq_related_static_category', 'option')) {
        $terms[] = $static_cat;
    }

    $post_terms = get_the_terms(get_the_ID(), 'faqcat');
    if (
        !is_wp_error($post_terms) &&
        $post_terms &&
        $post_terms[0]->term_id != $static_cat->term_id
    ) {
        $terms[] = $post_terms[0];
    }

    foreach ($terms as &$term) {
    ?>

        <div class="faqList__col">

            <?php get_template_part('template-parts/faq-list-item', null, [
                'term'              => $term,
                'is_related_faq'    => true
            ]); ?>

        </div>

    <?php } ?>
</div>