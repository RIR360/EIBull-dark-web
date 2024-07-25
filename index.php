<?php
// Set the default page
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Define the path to the content file
$contentFile = __DIR__ . '/views/' . $page . '.php';

// Check if the content file exists, if not load the 404 page
if (!file_exists($contentFile)) {
    $contentFile = __DIR__ . '/views/404.php';
    $title = 'Page Not Found';
} else {
    $title = ucfirst($page);
    $active_button = $page;
}

// Capture the content of the content file
ob_start();
include $contentFile;
$content = ob_get_clean();

// Include the layout file
include __DIR__ . '/layouts/layout.php';
?>
