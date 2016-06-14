<?php
return [
    'title' => 'Languages',
    'single' => 'Language',
    'model' => 'App\Language',
    'columns' => [
        'id',
        'language',
        ],
    'edit_fields' => [
        'id' => [
            'type' => 'text',
        ],
        'language' => [
            'type' => 'text',
        ],
    ],
];