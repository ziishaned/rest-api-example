<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    
    protected $fillable = [
        'post_title', 
        'post_content', 
        'updated_at', 
    ];

    public function comments()
    {
        $this->hasMany('App\Models\Comments', 'post_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function getPosts()
    {
        $query = $this;
        return $query->paginate(20);
    }

    public function getPost($id)
    {
        return $this->find($id);
    }

    public function createPost($input)
    {
        return $this->create($input->all());
    }

    public function updatePost($id, $input)
    {
        $updated = $this->find($id)->update($input);
        $post = $this->find($id);

        if($updated) {
            return $post;
        }

        return false;
    }
}