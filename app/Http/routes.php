<?php

$app->get('/', function () {
    return view('home');
});

$app->get('users', ['uses' => 'UsersController@getUsers', ]);
$app->get('users/{id}', ['uses' => 'UsersController@getUser', ]);
$app->post('users', ['uses' => 'UsersController@createUser', ]);
$app->delete('users/{id}', ['uses' => 'UsersController@deleteUser', ]);
$app->put('users/{id}', ['uses' => 'UsersController@updateUser', ]);

$app->get('posts', ['uses' => 'PostsController@getPosts', ]);
$app->get('posts/{id}', ['uses' => 'PostsController@getPost', ]);
$app->post('posts', ['uses' => 'PostsController@createPost', ]);
$app->delete('posts/{id}', ['uses' => 'PostsController@deletePost', ]);
$app->put('posts/{id}', ['uses' => 'PostsController@updatePost', ]);

$app->get('comments', ['uses' => 'CommentsController@getComments', ]);
$app->get('comments/{id}', ['uses' => 'CommentsController@getComment', ]);
$app->post('comments', ['uses' => 'CommentsController@createComment', ]);
$app->delete('comments/{id}', ['uses' => 'CommentsController@deleteComment', ]);
$app->put('comments/{id}', ['uses' => 'CommentsController@updateComment', ]);