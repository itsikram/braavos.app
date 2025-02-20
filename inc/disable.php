<?php

/*
 * remove defoult editor from pages
 */
add_action('admin_init', 'hide_editor');
function hide_editor() {
    if (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    }
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    }
    if (!isset($post_id)) return;
    $tpn = get_page_template_slug($post_id);
    if (in_array($tpn, ['templates/faq_1.php', 'templates/faq_1_res.php'])) {
        remove_post_type_support('page', 'editor');
    }
}
