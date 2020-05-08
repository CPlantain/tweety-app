<?php

trait Likable 
{
	public function likes()
    {
    	return $this->hasMany(Like::class);
    }

    // public function dislikes()
    // {
    // 	return $this->hasMany(Like::class);
    // }
    
	public function like($user = null, $liked = true)
    {
    	$this->likes()->updateOrCreate([
    		'user_id' => $user ? $user->id : auth()->id(),
    	], [
    		'liked' => $liked
    	]);
    }

    public function dislike($user = null)
    {
    	$this->like($user, false);
    }
    
    public function isLikedBy(User $user)
    {
    	return (bool) $user->likes
    		->where('tweet_id', $this->id)
    		->where('liked', true)
    		->count();
    }

    public function isDislikedBy(User $user)
    {
    	return (bool) $user->likes
    		->where('tweet_id', $this->id)
    		->where('liked', false)
    		->count();
    }
}