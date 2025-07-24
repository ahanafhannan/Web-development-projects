<?php

use PHPUnit\Framework\TestCase;

class Questions_modelTest extends TestCase
{
    public function testValidate()
    {
        $model = new Questions_model();

        // Test empty question
        $data = ['question' => ''];
        $this->assertFalse($model->validate($data));

        // Test empty choice
        $data = [
            'question' => 'What is 1 + 1?',
            'choice0' => '',
            'choice1' => '2',
            'correct_answer' => 'B'
        ];
        $this->assertFalse($model->validate($data));

        // Test valid data
        $data = [
            'question' => 'What is 1 + 1?',
            'choice0' => '1',
            'choice1' => '2',
            'correct_answer' => 'B'
        ];
        $this->assertTrue($model->validate($data));
    }

    public function testMakeUserId()
    {
        $model = new Questions_model();

        // Test without user_id in session
        $data = [];
        $this->assertEmpty($model->make_user_id($data)['user_id']);

        // Test with user_id in session
        $_SESSION['USER'] = new stdClass();
        $_SESSION['USER']->user_id = 1;
        $data = [];
        $this->assertEquals(1, $model->make_user_id($data)['user_id']);
    }

    public function testGetUser()
    {
        $model = new Questions_model();

        // Test without user_id
        $data = [];
        $this->assertEmpty($model->get_user($data));

        // Test with user_id
        $data = [
            (object) ['user_id' => 1],
            (object) ['user_id' => 2],
        ];
        $this->assertNotEmpty($model->get_user($data)[0]->user);
    }
}