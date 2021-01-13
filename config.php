<?php

return [
    'production' => false,
    'baseUrl' => '',
    'author' => 'Farley Reynolds',
    'title' => 'No Vague Believer',
    'description' => 'Essays from the standpoint of Christian orthodoxy',
    'collections' => [
        'essays' => [
            'path' => '{collection}/{-filename}',
            'sort' => '-date',
            'getYear' => function ($page) {
                $year = date_parse(date('m/d/Y', $page->date));
                return $year['year'];
            }
        ]
    ],
];
