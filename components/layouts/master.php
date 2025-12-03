<?php
$current_page = $GLOBALS['current_page'];

function isActive($pages, $current_page) {
    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'active' : '';
    }
    return ($current_page === $pages) ? 'active' : '';
}

function isMenuOpen($pages, $current_page) {
    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'open' : '';
    }
    return ($current_page === $pages) ? 'open' : '';
}
?>


<?php
if (!isset($page_title)) {
    $page_title = 'Blank'; 
}

require __DIR__ . '/../header.php';

// Load home sections only on home page
if ($current_page === 'home') {
    require __DIR__ . '/../hero.php';
    require __DIR__ . '/../brands.php';
    require __DIR__ . '/../services.php';
    require __DIR__ . '/../projects.php';
    require __DIR__ . '/../solutions.php';
    require __DIR__ . '/../productivity.php';
    require __DIR__ . '/../faqs.php';
    require __DIR__ . '/../testimonials.php';
    require __DIR__ . '/../blogs.php';
    require __DIR__ . '/../free_trials.php';
}
?>

<!--=======================================================================-->
<!------------------------  Content Start From Here --------------------->
<!--=======================================================================-->

<?php
if (isset($show_breadcrumb) && $show_breadcrumb === true) {
    include __DIR__ . '/../breadcrumb-area.php';

}
?>
<div class="app__slide-wrapper">
    <?php
    if (isset($content)) {
        echo $content;
    }
    ?>
</div>

<!--=======================================================================-->
<!----------------------------  Content End Here ------------------------->
<!--=======================================================================-->

<?php
require __DIR__ . '/../footer.php';
?>
