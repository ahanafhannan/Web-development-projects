<?php

use PHPUnit\Framework\TestCase;

class Answers_modelTest extends TestCase
{
    public function testValidateReturnsTrueWithValidData()
    {
        $model = new Answers_model();
        $data = [
            'user_id' => 1,
            'question_id' => 2,
            'date' => '2022-01-01',
            'test_id' => 3,
            'answer' => 'Some answer',
            'answer_mark' => 4,
            'answer_comment' => 'Some comment',
        ];
        $this->assertTrue($model->validate($data));
    }

    public function testValidateReturnsFalseWithInvalidData()
    {
        $model = new Answers_model();
        $data = [
            'user_id' => 1,
            'question_id' => 2,
            'date' => '2022-01-01',
            'test_id' => 3,
            'answer' => 'Some answer',
            'answer_mark' => 4,
            'answer_comment' => 'Some comment',
            'extra_field' => 'Extra value',
        ];
        $this->assertFalse($model->validate($data));
    }
}