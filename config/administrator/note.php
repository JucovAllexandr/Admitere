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
        'nota3',
    ],
    'edit_fields' => [
        'admin' => [
            'nota2' => 'number',
        ],
    ],
    'action_permissions'=> [
        'create' => function($model)
        {
            return false;
        }
    ],
];