<?php

$app->get('/', function () {
    return 'RESTful API.';
});

$app->get('users', ['uses' => 'UsersController@getUsers', ]);
$app->get('users/{id}', ['uses' => 'UsersController@getUser', ]);
$app->post('users', ['uses' => 'UsersController@createUser', ]);
$app->delete('users/{id}', ['uses' => 'UsersController@deleteUser', ]);
$app->put('users/{id}', ['uses' => 'UsersController@updateUser', ]);