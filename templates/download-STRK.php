<?php
/*
Template Name: Download-STRK
*/
?>
<?php get_header(); ?>

<div class="downloadPageSTRK">
    <div class="container">
        <div class="downloadPageSTRK__wrapper">
            <?php if ($down_title = get_field('down_title')) { ?>
                <h1 class="titleBorder">
                    <?php echo $down_title; ?>
                </h1>
            <?php } ?>

            <div class="downloadPageSTRK__blocks">
                <div class="downloadPageSTRK__blocks__block downloadPageSTRK__blocks__block-icons">
                    <?php if ($first_subtitle = get_field('first_subtitle')) { ?>
                        <div class="title">
                            <div class="number"><span>1</span></div>
                            <h3><?php echo $first_subtitle; ?></h3>
                        </div>
                    <?php } ?>
                    <?php if ($first_info = get_field('first_info')) { ?>
                        <div class="info">
                            <?php echo $first_info; ?>
                        </div>
                    <?php } ?>

                    <?php get_template_part('template-parts/download-section'); ?>

                </div>

                <?php
                $image_blocks = get_field('image_blocks');
                if ($image_blocks) {
                    foreach ($image_blocks as $block) { ?>

                        <div class="downloadPageSTRK__blocks__block">
                            <div class="left-block">
                                <?php if ($block['title']) { ?>
                                    <div class="title">
                                        <div class="number"><span><?= $block['number'] ?></span></div>
                                        <h3><?= $block['title'] ?></h3>
                                    </div>
                                <?php } ?>
                                <?php if ($block['info']) { ?>
                                    <div class="info">
                                        <?= $block['info'] ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="right-block">
                                <?php if ($block['image_dark']) { ?>
                                    <?php echo wp_get_attachment_image($block['image_dark']['id'], 'full', "", array("class" => "image-dark")); ?>
                                <?php } ?>
                                <?php if ($block['image_light']) { ?>
                                    <?php echo wp_get_attachment_image($block['image_light']['id'], 'full', "", array("class" => "image-light")); ?>
                                <?php } ?>
                            </div>


                        </div>

                    <?php } ?>
                <?php } ?>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
