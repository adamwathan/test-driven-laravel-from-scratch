<?php

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewAnotherUsersTweetsTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewingAnotherUsersTweets()
    {
        $user = factory(User::class)->create(['username' => 'johndoe']);
        $tweet = factory(Tweet::class)->make(['body' => 'My first tweet']);
        $user->tweets()->save($tweet);

        $this->visit('/johndoe')
             ->see('My first tweet');
    }
}
