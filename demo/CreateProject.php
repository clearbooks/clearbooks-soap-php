<?php
require_once __DIR__ . '/includes.php';

// create the project
$project = new \Clearbooks_Soap_1_0_Project();
$project->description = 'Costs related to Search Engine Optimization';
$project->projectName = 'SEO';
$project->status      = 'open';

$projectReturn = $client->createProject( $project );
print_r( $projectReturn );

/*
Clearbooks_Soap_1_0_ProjectReturn Object
(
    [project_id] => 6
)
*/