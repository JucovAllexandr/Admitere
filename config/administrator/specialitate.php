<?php
return [
    'title' => 'Specialitati',
    'single' => 'Specialitate',
    'model' => 'App\Specialitate',
    'columns' => [
        'id',
        'cod_specialitate',
        'denumire',
    ],
    'edit_fields' => [
        'cod_specialitate' => [
            'type' => 'number',
        ],
        'denumire' => [
            'type' => 'text',
        ]
    ],
    'action_permissions'=> [
        'create' => function($model)
        {
            return true;
        }
    ],
];