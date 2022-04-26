<?php
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testTellName()
    {
        $user = new User(18, 'John');

        $this->assertSame('John', $user->name);
        $this->assertSame(19, $user->age);

        $this->assertEmpty($user->favorite_movies);

        $this->assertIsString($user->name);

//        $this->assertTrue($user->addFavoriteMovie('Avengers'));
//        $this->assertContains('Avengers', $user->favorite_movies);
//        $this->assertCount(1, $user->favorite_movies);
//        $this->assertNotContains('Avengers', $user->favorite_movies);
    }
}