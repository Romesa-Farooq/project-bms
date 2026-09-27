<?php
$moduleKicker = 'BMS workspace';
$moduleTitle = $_GET['title'] ?? 'BMS Module';
$moduleDescription = 'This module is part of the employee action menu and is ready for its workflow content.';
$moduleAlert = 'The navigation path is active. Connect this screen to your existing business process when its data source is available.';
$moduleTableTitle = $moduleTitle;
$moduleColumns = ['Area', 'Description', 'Status', 'Action'];
$moduleRows = [['Employee workspace', 'BMS content area for ' . htmlspecialchars($moduleTitle), '<span class="badge bg-primary-subtle text-primary">Ready</span>', '<button class="btn btn-sm btn-light">Open</button>']];
include 'includes/module-page.php';
?>