<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use DB;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUser()
    {
        $first = factory(User::class)->create();
        $second = factory(User::class)->create();
        
       $user = User::getUsers();

       $this->assertEquals([
           'name'=>$first->name,
           'email'=>$first->email,
           'phone'=>$first->phone
       ],
       [
        'name'=>$first->name,
           'email'=>$first->email,
           'phone'=>$first->phone
    ],$user);
    }
}
