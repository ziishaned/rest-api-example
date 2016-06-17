<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    
    protected $fillable = [
        'comment_content', 
        'user_id', 
        'post_id',
        'updated_at', 
    ];

    public function posts()
    {
        return $this->belongsTo('App\Models\Posts', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function getComments()
    {
        $query = $this;
        return $query->paginate(20);
    }

    public function getComment($id)
    {
        return $this->find($id);
    }

    public function createComment($input)
    {
        return $this->create($input->all());
    }

    public function updateComment($id, $input)
    {
        $updated = $this->find($id)->update($input);
        $comment = $this->find($id);

        if($updated) {
            return $comment;
        }

        return false;
    }
}