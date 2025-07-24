<?php

use PHPUnit\Framework\TestCase;

class ClassesModelTest extends TestCase
{
    protected $model;

    protected function setUp(): void
    {
        $this->model = new Classes_model();
    }

    public function testValidateWithValidData()
    {
        $data = [
            'class' => 'Math Class',
            'date' => '2023-05-03',
        ];

        $this->assertTrue($this->model->validate($data));
    }

    public function testValidateWithInvalidData()
    {
        $data = [
            'class' => 'Invalid Class #!',
            'date' => '2023-05-03',
        ];

        $this->assertFalse($this->model->validate($data));
    }

    public function testMakeSchoolId()
    {
        $data = [];

        $_SESSION['USER'] = new stdClass();
        $_SESSION['USER']->school_id = 123;

        $expected = [
            'school_id' => 123,
        ];

        $this->assertEquals($expected, $this->model->make_school_id($data));
    }

    public function testMakeUserId()
    {
        $data = [];

        $_SESSION['USER'] = new stdClass();
        $_SESSION['USER']->user_id = 456;

        $expected = [
            'user_id' => 456,
        ];

        $this->assertEquals($expected, $this->model->make_user_id($data));
    }

    public function testMakeClassId()
    {
        $data = [];

        $result = $this->model->make_class_id($data);

        $this->assertArrayHasKey('class_id', $result);
        $this->assertIsString($result['class_id']);
        $this->assertEquals(60, strlen($result['class_id']));
    }

    public function testGetUser()
    {
        $data = [
            (object) ['user_id' => 1],
            (object) ['user_id' => 2],
        ];

        $user = new User();
        $user->where('user_id', 1);
        $user->values(['name' => 'John Doe']);

        $expected = [
            (object) ['user_id' => 1, 'user' => (object) ['name' => 'John Doe']],
            (object) ['user_id' => 2, 'user' => false],
        ];

        $this->assertEquals($expected, $this->model->get_user($data));
    }
}