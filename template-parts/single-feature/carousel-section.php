<?php global $data; ?>

<?php $args = wp_parse_args($args, [
    'count' => '1'
]);
?>

<section class="sFeatCarousel">
    <div class="container">
        <div class="sFeatCarousel__inner">

            <h2 class="sFeatCarousel__title h1 h1_underlined h1_centered">
                <?= $data['title']; ?>
            </h2>

            <?php if ($data['carousel']) { ?>
                <div class="sFeatCarousel__sliderWrap">

                    <div id="feature-carousel-<?= $args['count']; ?>" class="sFeatCarousel__slider swiper">
                        <div class="swiper-wrapper">

                            <?php
                            foreach ($data['carousel'] as $i => &$slide) {
                                if ($slide['image']) {
                            ?>

                                    <div class="sFeatCarousel__sliderItem swiper-slide">
                                        <?= wp_get_attachment_image(
                                            $slide['image']['id'],
                                            'medium_large',
                                            false,
                                            ['alt' => $slide['image']['alt'] ?: sprintf('Step #%d', $i + 1)]
                                        ); ?>
                                        <div class="sFeatCarousel__sliderItemStep">Step <?= $i + 1 ?></div>
                                    </div>

                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>

                    <div id="carousel-btn-prev-<?= $args['count']; ?>" class="sFeatCarousel__sliderBtn sFeatCarousel__sliderBtn_prev swiper-button-prev"></div>
                    <div id="carousel-btn-next-<?= $args['count']; ?>" class="sFeatCarousel__sliderBtn sFeatCarousel__sliderBtn_next swiper-button-next"></div>

                </div>
            <?php } ?>

        </div>
    </div>
</section>