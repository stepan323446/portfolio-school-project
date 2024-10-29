<?php

function get_header($title, $description, $wrapper_class = '', $body_class = '', $meta_tags = array()) {
    include VIEW_PATH . '/components/header.php';
}
function get_footer() {
    include VIEW_PATH . '/components/footer.php';
}
?>
