<?php

$type = $_GET['type'];

$pages = [

    'newsletter' => [
        'hero_title' => 'Newsletters',
        'heading' => 'Newsletters & Publications',
        'description' => 'Explore healthcare updates, travel medicine insights and hospital newsletters.',
        'action_type' => 'download'
    ],

    'health-information' => [
        'hero_title' => 'Health Information',
        'heading' => 'Health Information & Publications',
        'description' => 'Explore healthcare updates and health information.',
        'action_type' => 'both'
    ],

    'research' => [
        'hero_title' => 'Research & Publications',
        'heading' => 'Research & Publications',
        'description' => 'Explore research papers and publications.',
        'action_type' => 'both'
    ]

];

$page = $pages[$type] ?? $pages['newsletter'];

$hero_title = $page['hero_title'];
?>  