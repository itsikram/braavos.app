<?php $post_id = get_queried_object_id(); ?>

<div class="faqHelp">

    <?php if ($faq_1_help_svg = get_field('faq_1_help_svg', $post_id)) {
        echo $faq_1_help_svg;
    } ?>

    <?php if ($faq_1_help_title = get_field('faq_1_help_title')) { ?>

        <h4>
            <?php echo $faq_1_help_title ?>
        </h4>

    <?php } ?>

    <?php if ($faq_1_help_content = get_field('faq_1_help_content')) {
        echo $faq_1_help_content;
    } ?>

    <div class="faqHelp__links">

        <div class="faqHelp__link">

            <?php
            the_field('faq_1_help_svg_1');
            if ($faq_1_help_url_1 = get_field('faq_1_help_url_1')) {
            ?>

                <a href="<?php echo esc_url($faq_1_help_url_1['url']) ?>" target="<?php echo $faq_1_help_url_1['target'] ? $faq_1_help_url_1['target'] : '_self'; ?>" rel="nofollow noopener">
                    <?php echo $faq_1_help_url_1['title'] ?>
                </a>

            <?php } ?>

        </div>

        <div class="faqHelp__link">

            <?php
            the_field('faq_1_help_svg_2');
            if ($faq_1_help_url_2 = get_field('faq_1_help_url_2')) {
            ?>

                <a href="<?php echo esc_url($faq_1_help_url_2['url']) ?>" target="<?php echo $faq_1_help_url_2['target'] ? $faq_1_help_url_2['target'] : '_self'; ?>" rel="nofollow noopener">
                    <?php echo $faq_1_help_url_2['title'] ?>
                </a>

            <?php } ?>

        </div>

    </div>
</div>