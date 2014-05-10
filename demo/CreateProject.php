<?php
require "../vendor/autoload.php";

// create the project
$project = new \ClearBooks\Project();
$project->description = 'Costs related to Search Engine Optimization';
$project->projectName = 'SEO';
$project->status      = 'open';

$client = new \ClearBooks\Client( 'demo' );

$projectReturn = $client->createProject( $project );
print_r( $projectReturn );

/*
Clearbooks_Soap_1_0_ProjectReturn Object
(
    [project_id] => 6
)
*/