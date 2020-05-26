<?php

namespace GooglePasses\WalletObjects\Models;

class Review extends \Google_Model
{
    protected $comments;

    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    public function getComments()
    {
        return $this->comments;
    }
}