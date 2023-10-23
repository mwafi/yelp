<?php

namespace Yelp\Contracts\Comment\SimpleText;

interface DisplayContract
{
    public function display(CommentContract $comment): void;
}