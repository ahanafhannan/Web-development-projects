<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testValidateValidData()
    {
        $user = new User();
        $validData = [
            'firstname' => 'ahanaf',
            'lastname' => 'hannan',
            'email' => 'ahanafhannan@gmail.com',
            'password' => 'password123',
            'password2' => 'password123',
            'gender' => 'male',
            'rank' => 'student'
        ];
        $this->assertTrue($user->validate($validData));
        $this->assertEmpty($user->errors);
    }
    public function testValidateInvalidData()
    {
        $user = new User();
        $invalidData = [
            'firstname' => '',
            'lastname' => '',
            'email' => 'invalid-email',
            'password' => 'short',
            'password2' => 'mismatch',
            'gender' => 'invalid-gender',
            'rank' => 'invalid-rank'
        ];
        $this->assertFalse($user->validate($invalidData));
        $this->assertNotEmpty($user->errors);
    }
    public function testMakeUserId()
    {
        $user = new User();
        $data = [
            'firstname' => 'ahanaf',
            'lastname' => 'hannan'
        ];
        $dataWithUserId = $user->make_user_id($data);
        $this->assertNotEmpty($dataWithUserId['user_id']);
    }
    public function testMakeSchoolId()
    {
        $user = new User();
        $data = [
            'firstname' => 'ahanaf',
            'lastname' => 'hannan'
        ];
        $dataWithSchoolId = $user->make_school_id($data);
        $this->assertEquals($_SESSION['USER']->school_id, $dataWithSchoolId['school_id']);
    }
    public function testHashPassword()
    {
        $user = new User();
        $data = [
            'password' => 'password123'
        ];
        $dataWithHashedPassword = $user->hash_password($data);
        $this->assertTrue(password_verify('password123', $dataWithHashedPassword['password']));
    }
}