<?php

// Activate session
session_start();
// Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';
// Load Business Tier
require_once BUSINESS_DIR . 'catalog.php';
// Load the database handler
require_once BUSINESS_DIR . 'database_handler.php';
// Load the application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';
// Set the error handler
ErrorHandler::SetHandler();
// Load Smarty template file
$application = new Application();
// Display the page
$application->display('store_front.tpl');

// Close database connection
DatabaseHandler::Close();
?>