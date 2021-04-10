<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'teacher' => [
            'users' => 'r,u',
            'subjects' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'solutions' => 'c,r,u,d'
        ],
        'student' => [
            'users' => 'r,u',
            'subjects' => 'r',
            'tasks' => 'r',
            'solutions' => 'c,r,u,d'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
