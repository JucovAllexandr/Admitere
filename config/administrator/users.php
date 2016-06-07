<?php
return [
    'title' => 'Users',
    'single' => 'User',
    'model' => 'App\User',
    'columns' => [
        'name',
        'email',
        'admin',
        'elev_id',
    ],
    'edit_fields' => [
      'admin' => [
        'type' => 'bool',
      ],
    ],
    'action_permissions'=> [
        'create' => function($model)
        {
            return false;
        }
    ],
];