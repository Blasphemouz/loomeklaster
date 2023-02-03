<?php

use Kirby\Cms\Page;

class MemberPage extends Page
{
    public function isReadable(): bool
    {
        if (($user = $this->autor()->toUser()) && $user->is($this->kirby()->user()) ||
            $this->kirby()->user()->isAdmin()) {
            return true;
        }

        return false;
    }
}