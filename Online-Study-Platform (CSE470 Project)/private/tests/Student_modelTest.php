<?php

use PHPUnit\Framework\TestCase;

class Students_modelTest extends TestCase
{
    public function testMakeSchoolId()
    {
        $model = new Students_model();
        $data = [
            'user_id' => 1,
            'class_id' => 2,
            'disabled' => 0,
            'date' => '2023-05-03',
        ];
        $_SESSION['USER']->school_id = 3;
        $expectedResult = [
            'user_id' => 1,
            'class_id' => 2,
            'disabled' => 0,
            'date' => '2023-05-03',
            'school_id' => 3,
        ];
        $this->assertEquals($expectedResult, $model->make_school_id($data));
    }

    public function testGetUser()
    {
        $model = new Students_model();
        $data = [
            (object) ['user_id' => 1],
            (object) ['user_id' => 2],
            (object) ['user_id' => 3],
        ];
        $expectedResult = [
            (object) ['user_id' => 1, 'user' => (object) []],
            (object) ['user_id' => 2, 'user' => (object) []],
            (object) ['user_id' => 3, 'user' => (object) []],
        ];
        $this->assertEquals($expectedResult, $model->get_user($data));
    }
}