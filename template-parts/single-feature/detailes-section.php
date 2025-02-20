<?php global $data; ?>

<section class="sFeatDetails">
    <div class="container">
        <div class="sFeatDetails__inner">

            <h2 class="sFeatDetails__title h1 h1_underlined h1_centered">
                <?= $data['title']; ?>
            </h2>

            <div class="sFeatDetails__content">

                <?php if ($data['desc']) { ?>
                    <div class="sFeatDetails__desc">
                        <?= $data['desc']; ?>
                    </div>
                <?php } ?>

                <?php if ($data['feature_list']) { ?>
                    <div class="sFeatDetails__features">

                        <?php foreach ($data['feature_list'] as &$item) { ?>
                            <div class="sFeatDetails__featuresItem">

                                <h2 class="sFeatDetails__featuresItemTitle">
                                    <?= $item['title']?>
                                </h2>

                                <?php if ($iconType = $item['icon_type']) { ?>
                                    <div class="sFeatDetails__featuresItemIcon sFeatDetails__featuresItemIcon_<?= $iconType; ?>">
                                        <?php
                                        if ('custom' === $item['icon_type']) {
                                            echo $item['custom_svg_icon'];
                                        }
                                        ?>
                                    </div>
                                <?php } ?>

                                <div class="sFeatDetails__featuresItemPre">
                                    <?= $item['pre_text'] ?>
                                </div>

                                <div class="sFeatDetails__featuresItemPost">
                                    <?= $item['post_text'] ?>
                                </div>

                            </div>
                        <?php } ?>

                    </div>
                <?php } ?>

                <?php if ($data['show_desc_2'] && $data['desc_2']) { ?>
                    <div class="sFeatDetails__desc">
                        <?= $data['desc_2']; ?>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
</section>