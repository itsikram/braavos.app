<div class="faqTop">

    <div class="mts_light_hidden">
        <?php
        if ($img = get_field('faq_1_bg_img_darkmode')) {
            echo wp_get_attachment_image(
                $img['id'],
                'thumbnail_2840x641',
                false,
                [
                    'alt' => $img['alt'] ?: 'FAQ dark head'
                ]
            );
        }
        ?>
    </div>

    <div class="mts_light_visible">
        <?php
        if ($img = get_field('faq_1_bg_img_lightmode')) {
            echo wp_get_attachment_image(
                $img['id'],
                'thumbnail_2840x641',
                false,
                [
                    'alt' => $img['alt'] ?: 'FAQ light head'
                ]
            );
        }
        ?>
    </div>

    <?php if ($faq_1_title = get_field('faq_1_title')) { ?>
        <h1><?php
            echo $faq_1_title ?>
        </h1>
    <?php } ?>

    <!--<form class="faq_top_search"
          id="faq_top_search"
          action="<?php the_field('sopt_faq_search_page', 'option') ?>"
          method="post"
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
            <path d="M8.01865 15.2873C9.47571 15.2873 10.8411 14.8474 11.9775 14.096L15.9913 18.119C16.257 18.3755 16.5961 18.5038 16.9626 18.5038C17.7232 18.5038 18.2822 17.9082 18.2822 17.1567C18.2822 16.8085 18.1631 16.4694 17.9065 16.2129L13.9202 12.2082C14.745 11.0352 15.2307 9.61483 15.2307 8.07529C15.2307 4.10731 11.9866 0.863281 8.01865 0.863281C4.05983 0.863281 0.806641 4.10731 0.806641 8.07529C0.806641 12.0433 4.05067 15.2873 8.01865 15.2873ZM8.01865 13.3629C5.11369 13.3629 2.73106 10.9803 2.73106 8.07529C2.73106 5.17033 5.11369 2.78771 8.01865 2.78771C10.9236 2.78771 13.3062 5.17033 13.3062 8.07529C13.3062 10.9803 10.9236 13.3629 8.01865 13.3629Z" fill="#9E9BA4"/>
        </svg>
        <input type="text"
               id="faq_top_search_txt"
               name="faq_top_search_txt"
               placeholder="<?php _e('Search', 'braavos') ?>"
               value="<?php echo esc_attr($_POST['faq_top_search_txt'] ?? '') ?>"
        >
    </form>-->

</div>