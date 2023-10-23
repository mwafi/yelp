<?php

namespace Yelp\Contracts\Comment\SimpleText;

interface SubmitContract
{
    public function submit(string $comment): bool;
}