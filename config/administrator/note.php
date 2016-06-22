<?php
return [
    'title' => 'Note',
    'single' => 'Note',
    'model' => 'App\Note',
    'columns' => [
        'id',
        'obiect1',
        'nota1',
        'obiect2',
        'nota2',
        'obiect3',
        'nota3',
        'obiect4',
        'nota4',
    ],
    'edit_fields' => [
        'obiect1' => [
            'type' => 'text',
        ],
        'nota1' => [
            'type' => 'text',
        ],
        'obiect2' => [
            'type' => 'text',
        ],
        'nota2' => [
            'type' => 'text',
        ],
        'obiect3' => [
            'type' => 'text',
        ],
        'nota3' => [
            'type' => 'text',
        ],
        'obiect4' => [
            'type' => 'text',
        ],
        'nota4' => [
            'type' => 'text',
        ],
    ],
    'action_permissions'=> [
        'create' => function($model)
        {
            return false;
        }
    ],
];