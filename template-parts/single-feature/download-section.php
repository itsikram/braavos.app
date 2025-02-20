<?php global $data; ?>

<section class="sFeatDownload sectionHasBg">
    <div class="container">

        <h2 class="sFeatDownload__title h1 h1_underlined h1_centered">
            <?= $data['title']; ?>
        </h2>

        <div class="sFeatDownload__desc h2">
            <?= $data['desc']; ?>
        </div>

        <?php get_template_part('template-parts/download-section'); ?>

    </div>
</section>