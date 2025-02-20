<?php global $data; ?>

<section class="sFeatHead">
    <div class="sFeatHead__container container">
        <div class="sFeatHead__inner">

            <div class="sFeatHead__info">

                <h1 class="sFeatHead__title">
                    <?= $data['title']; ?>
                </h1>

                <div class="sFeatHead__benefits">

                    <?php
                    if ($data['benefits']) {
                        foreach ($data['benefits'] as &$item) {
                    ?>

                            <div class="sFeatHead__benefitsItem"><?= $item['text']; ?></div>

                    <?php
                        }
                    }
                    ?>

                </div>

            </div>

            <div class="sFeatHead__image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium_large', ['alt' => $data['title']]);
                }
                ?>
            </div>

        </div>
    </div>
</section>