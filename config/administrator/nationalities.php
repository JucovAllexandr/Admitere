<?php
return [
    'title' => 'Nationalities',
    'single' => 'Nationality',
    'model' => 'App\Nationality',
    'columns' => [
        'id',
        'nationality',
    ],
    'edit_fields' => [
        'id' => [
            'type' => 'text',
        ],
        'nationality' => [
            'type' => 'text',
        ],
    ],
];