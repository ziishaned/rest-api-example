<?php

$app->group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers'], function() use ($app) {
	$app->get('/', ['uses' => 'UsersController@getUsers', ]);
	$app->get('{id}/posts', ['uses' => 'UsersController@getUserPosts', ]);
	$app->get('{id}/posts/{postId}', ['uses' => 'UsersController@getUserPost', ]);
	$app->get('{id}/comments', ['uses' => 'UsersController@getUserComments', ]);
	$app->get('{id}/comments/{commentId}', ['uses' => 'UsersController@getUserComment', ]);
	$app->get('{id}', ['uses' => 'UsersController@getUser', ]);
	$app->post('/', ['uses' => 'UsersController@createUser', ]);
	$app->delete('{id}', ['uses' => 'UsersController@deleteUser', ]);
	$app->put('{id}', ['uses' => 'UsersController@updateUser', ]);
});


$app->group(['prefix' => 'posts', 'namespace' => 'App\Http\Controllers'], function() use ($app) {
	$app->get('/', ['uses' => 'PostsController@getPosts', ]);
	$app->get('{id}', ['uses' => 'PostsController@getPost', ]);
	$app->post('/', ['uses' => 'PostsController@createPost', ]);
	$app->delete('{id}', ['uses' => 'PostsController@deletePost', ]);
	$app->put('{id}', ['uses' => 'PostsController@updatePost', ]);
});

$app->group(['prefix' => 'comments', 'namespace' => 'App\Http\Controllers'], function() use ($app) {
	$app->get('/', ['uses' => 'CommentsController@getComments', ]);
	$app->get('{id}', ['uses' => 'CommentsController@getComment', ]);
	$app->post('/', ['uses' => 'CommentsController@createComment', ]);
	$app->delete('{id}', ['uses' => 'CommentsController@deleteComment', ]);
	$app->put('{id}', ['uses' => 'CommentsController@updateComment', ]);
});