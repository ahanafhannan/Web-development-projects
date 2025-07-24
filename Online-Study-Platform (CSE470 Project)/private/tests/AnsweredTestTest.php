<?php
use PHPUnit\Framework\TestCase;
class AnsweredTestTest extends TestCase
{
    public function testGetUser()
    {
        $userMock = $this->getMockBuilder(User::class)
                         ->disableOriginalConstructor()
                         ->setMethods(['where'])
                         ->getMock();
        $testData = [
            (object) ['user_id' => 'test1'],
            (object) ['user_id' => 'test2'],
            (object) ['user_id' => 'test3']
        ];
                 ->method('where')
                 ->withConsecutive(
                     ['user_id', 'test1'],
                     ['user_id', 'test2'],
                     ['user_id', 'test3']
                 )
                 ->will($this->returnValueMap([
                     ['user_id', 'test1', [(object) ['user_id' => 'test1']]],
                     ['user_id', 'test2', [(object) ['user_id' => 'test2']]],
                     ['user_id', 'test3', false]
                 ]));
        $answeredTest = new Answered_test();
        $result = $answeredTest->get_user($testData);
        $this->assertEquals('test1', $result[0]->user->user_id);
        $this->assertEquals('test2', $result[1]->user->user_id);
        $this->assertFalse($result[2]->user);
    }
}