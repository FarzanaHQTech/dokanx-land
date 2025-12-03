<?php
// fallback values
if (!isset($page)) {
    $page = "Page";
}


?>

<div class="breadcrumb__area">
    <div class="breadcrumb__wrapper mb-25">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $page; ?>
                </li>
            </ol>
        </nav>
        
    </div>
</div>

