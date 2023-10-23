<?php

namespace Yelp\Contracts\Comment\SimpleText;

use Carbon\Carbon;
use Yelp\contracts\comment\author\AuthorContract;
use Yelp\contracts\review\simpleFiveStars\ReviewContract;

interface CommentContract
{
    public function getTitle(): TitleContract;

    public function getDate(): Carbon;

    public function getAuthor(): AuthorContract;

    public function getText(): CommentTextContract;

    public function getReview(): ReviewContract;

}