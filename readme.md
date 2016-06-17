# RESTful API

### Routes List:

+--------+----------+---------------------------------+------+-------------------------------------------------------+------------+
| Domain | Method   | URI                             | Name | Action                                                | Middleware |
+--------+----------+---------------------------------+------+-------------------------------------------------------+------------+
|        | POST     | comments                        |      | App\Http\Controllers\CommentsController@createComment | web        |
|        | GET|HEAD | comments                        |      | App\Http\Controllers\CommentsController@getComments   | web        |
|        | GET|HEAD | comments/{id}                   |      | App\Http\Controllers\CommentsController@getComment    | web        |
|        | DELETE   | comments/{id}                   |      | App\Http\Controllers\CommentsController@deleteComment | web        |
|        | PUT      | comments/{id}                   |      | App\Http\Controllers\CommentsController@updateComment | web        |
|        | POST     | posts                           |      | App\Http\Controllers\PostsController@createPost       | web        |
|        | GET|HEAD | posts                           |      | App\Http\Controllers\PostsController@getPosts         | web        |
|        | PUT      | posts/{id}                      |      | App\Http\Controllers\PostsController@updatePost       | web        |
|        | GET|HEAD | posts/{id}                      |      | App\Http\Controllers\PostsController@getPost          | web        |
|        | DELETE   | posts/{id}                      |      | App\Http\Controllers\PostsController@deletePost       | web        |
|        | GET|HEAD | users                           |      | App\Http\Controllers\UsersController@getUsers         | web        |
|        | POST     | users                           |      | App\Http\Controllers\UsersController@createUser       | web        |
|        | PUT      | users/{id}                      |      | App\Http\Controllers\UsersController@updateUser       | web        |
|        | GET|HEAD | users/{id}                      |      | App\Http\Controllers\UsersController@getUser          | web        |
|        | DELETE   | users/{id}                      |      | App\Http\Controllers\UsersController@deleteUser       | web        |
|        | GET|HEAD | users/{id}/comments             |      | App\Http\Controllers\UsersController@getUserComments  | web        |
|        | GET|HEAD | users/{id}/comments/{commentId} |      | App\Http\Controllers\UsersController@getUserComment   | web        |
|        | GET|HEAD | users/{id}/posts                |      | App\Http\Controllers\UsersController@getUserPosts     | web        |
|        | GET|HEAD | users/{id}/posts/{postId}       |      | App\Http\Controllers\UsersController@getUserPost      | web        |
+--------+----------+---------------------------------+------+-------------------------------------------------------+------------+
