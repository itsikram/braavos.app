<?php global $data; ?>

<section class="sFeatIndicators">
    <div class="container">

        <h2 class="sFeatIndicators__title h1 h1_underlined h1_centered">
            <?= $data['title']; ?>
        </h2>

        <div class="sFeatIndicators__items">

            <?php
            if ($data['indicators']) {
                foreach ($data['indicators'] as &$item) {
            ?>

                    <div class="sFeatIndicators__item <?= $item['included'] ? '' : 'sFeatIndicators__item_excluded'; ?>">
                        <h3 class="sFeatIndicators__itemTitle">
                            <?= $item['title']; ?>
                        </h3>
                    </div>

            <?php
                }
            }
            ?>

        </div>
    </div>
</section>