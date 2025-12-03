<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

 $pagePath = "components/pages/" . $page . ".php";
    $use_layout = true;


  if (!file_exists($pagePath)) {
        $pagePath = "components/pages/404.php";
    }

$current_page = $page;
$GLOBALS['current_page'] = $current_page;
// -------------------------------------------------------------------

$page_title = ucfirst($page);

ob_start();
include $pagePath;
$content = ob_get_clean();

if ($use_layout) {
    include "components/layouts/master.php";
} else {
    echo $content;
}

?>
