<?php $data = get_field('head_section'); ?>

<section class="sFeatHubHead">
    <div class="container">
        <div class="sFeatHubHead__inner">

            <div class="sFeatHubHead__info">

                <h1 class="sFeatHubHead__title">
                    <?= $data['title']; ?>
                </h1>

                <div class="sFeatHubHead__desc h2">
                    <?= $data['desc']; ?>
                </div>

            </div>

            <div class="sFeatHubHead__image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium_large', ['alt' => $data['title']]);
                }
                ?>
            </div>

        </div>

    </div>
</section>