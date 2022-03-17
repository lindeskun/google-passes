<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

class Review extends \Google_Model
{
    public $comments;

    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    public function getComments()
    {
        return $this->comments;
    }
}
