<?php 

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Comments;

use App\Helpers\Response;

class CommentsController extends Controller
{
	protected $comments;
    protected $request;

    public function __construct(Comments $comments, Request $request)
    {
        $this->comments = $comments;
        $this->request = $request; 
    }

    public function getComments()
    {
        $comments = $this->comments->getComments();
        if($comments) {
            return Response::json($comments);
        }

        return Response::internalError('Unable to create the user');
    }

    public function getComment($id)
    {
        $comment = $this->comments->getComment($id);
        if( !$comment ) {
            return Response::notFound('Comment not found');
        }

        return Response::json($comment);
    }

    public function createComment()
    {
        $validator = Validator::make($this->request->all(), [
            'comment_content'	=> 'required',
            'user_id'	=> 'required', 
	        'post_id'	=> 'required',
        ]);

        if ($validator->errors()->count()) {
            return Response::badRequest($validator->errors());
        }

        $comment = $this->comments->createComment($this->request);
        if ($comment) {
            return Response::created($comment);
        } 

        return Response::internalError('Unable to create the comment');
    }

    public function deleteComment($id)
    {
        $comment = $this->comments->find($id);
        if(!$comment) {
            return Response::notFound('Comment not found');
        }

        if( !$comment->delete() ) {
            return Response::internalError('Unable to delete the comment');
        }

        return Response::deleted();
    }

    public function updateComment($id)
    {
        $comment = $this->comments->find($id);
        if(!$comment) {
            return Response::notFound('Comment not found');
        }
        
        $validator = Validator::make($this->request->all(), [
            'comment_content'	=> 'required',
            'user_id'	=> 'required', 
	        'post_id'	=> 'required',
        ]);

        if ($validator->errors()->count()) {
            return Response::badRequest($validator->errors());
        }

        $comment = $this->comments->updateComment($id, $this->request->all());
        if ($comment) {
            return Response::json($comment);
        }

        return Response::internalError('Unable to update the comment');
    }
}