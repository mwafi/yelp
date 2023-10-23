<?php

namespace Yelp\contracts\comment\author;

use Yelp\contracts\user\UserContract;

interface AuthorContract
{
    public function getAuthor(): UserContract;
}