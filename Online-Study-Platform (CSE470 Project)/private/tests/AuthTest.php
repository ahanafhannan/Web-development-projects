<?php

require_once 'Auth.php';

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function testAuthenticate()
    {
        $user = new stdClass();
        $user->id = 1;
        $user->firstname = 'Ahanaf';
        $user->lastname = 'Hannan';
        $user->email = 'ahanafhannan@gmail.com';
        $user->rank = 'student';

        Auth::authenticate($user);

        $this->assertTrue(Auth::logged_in());
        $this->assertEquals('Ahanaf', Auth::user());
        $this->assertEquals('ahanafhannan@gmail.com', Auth::getEmail());
        $this->assertFalse(Auth::getNonexistentProperty());
    }

    public function testLogout()
    {
        Auth::logout();

        $this->assertFalse(Auth::logged_in());
        $this->assertFalse(Auth::user());
    }
    public function testLoggedIn()
    {
        $user = (object) [
            'id' => 1,
            'firstname' => 'ahanaf',
            'lastname' => 'hannan',
            'rank' => 'student'
        ];

        Auth::authenticate($user);
        $this->assertTrue(Auth::logged_in());

        Auth::logout();
        $this->assertFalse(Auth::logged_in());
    }

    public function testAccess()
    {
        $this->assertFalse(Auth::access());
        $this->assertFalse(Auth::access('admin'));

        $user = new stdClass();
        $user->id = 1;
        $user->firstname = 'ahanaf';
        $user->lastname = 'hannan';
        $user->email = 'ahanafhannan@gmail.com';
        $user->rank = 'super_admin';

        Auth::authenticate($user);

        $this->assertTrue(Auth::access());
        $this->assertTrue(Auth::access('admin'));
        $this->assertTrue(Auth::access('lecturer'));
        $this->assertTrue(Auth::access('reception'));
        $this->assertTrue(Auth::access('student'));

        Auth::logout();
    }

    public function testSwitchSchool()
    {
        $user = new stdClass();
        $user->id = 1;
        $user->firstname = 'ahanaf';
        $user->lastname = 'hannan';
        $user->email = 'ahanafhannan@gmail.com';
        $user->rank = 'super_admin';
        $user->school_id = 1;

        Auth::authenticate($user);

        $this->assertTrue(Auth::switch_school(2));
        $this->assertEquals(2, Auth::school_id());
        $this->assertEquals('School B', Auth::school_name());

        $this->assertTrue(Auth::switch_school(1));
        $this->assertEquals(1, Auth::school_id());
        $this->assertEquals('School A', Auth::school_name());

        Auth::logout();
    }

    public function testIOwnContent()
    {
        $user = new stdClass();
        $user->id = 1;
        $user->firstname = 'ahanaf';
        $user->lastname = 'hannan';
        $user->email = 'ahanafhannan@gmail.com';
        $user->rank = 'admin';
        $user->school_id = 1;

        Auth::authenticate($user);

        $row = new stdClass();
        $row->user_id = 1;
        $this->assertTrue(Auth::i_own_content($row));

        $row->user_id = 2;
        $this->assertFalse(Auth::i_own_content($row));

        $user->rank = 'student';
        Auth::authenticate($user);
        $this->assertFalse(Auth::i_own_content($row));

        Auth::logout();
    }
}