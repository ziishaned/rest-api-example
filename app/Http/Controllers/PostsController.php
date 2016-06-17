<?php 

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Posts;

use App\Helpers\Response;

class PostsController extends Controller
{
	protected $posts;

	function __construct(Posts $posts)
	{
		$this->posts = $posts;
	}

	public function getPosts()
	{
		$posts = $this->posts->getPosts();
		if($posts) {
            return Response::json($posts);
        }

        return Response::internalError('Unable to get the posts');
	}

	public function getPost($id)
	{
		$post = $this->posts->getPost($id);
        if( !$post ) {
            return Response::notFound('Post not found');
        }

        return Response::json($post);
	}

	public function createPost()
	{
		$validator = Validator::make($this->request->all(), [
            'post_title'		=> 'required',
            'post_content'		=> 'required',
            'user_id'    		=> 'required',
        ]);

        if ($validator->errors()->count()) {
            return Response::badRequest($validator->errors());
        }

        $post = $this->posts->createPost($this->request);
        if ($post) {
            return Response::created($post);
        } 

        return Response::internalError('Unable to create the Post');
	}

	public function deletePost($id)
    {
        $post = $this->posts->find($id);
        if(!$post) {
            return Response::notFound('Post not found');
        }

        if( !$post->delete() ) {
            return Response::internalError('Unable to delete the post');
        }

        return Response::deleted();
    }

    public function updatePost($id)
    {
        $post = $this->posts->find($id);
        if(!$post) {
            return Response::notFound('Post not found');
        }
        
        $validator = Validator::make($this->request->all(), [
            'post_title'		=> 'required',
            'post_content'		=> 'required',
        ]);

        if ($validator->errors()->count()) {
            return Response::badRequest($validator->errors());
        }

        $post = $this->posts->updatePost($id, $this->request->all());
        if ($post) {
            return Response::json($post);
        }

        return Response::internalError('Unable to update the post');
    }

    public function getUserPosts($user_id)
    {
        return Response::json($this->posts->getUserPosts($user_id));
    }
}   