<?php 
use PHPUnit\Framework\TestCase;

class Lecturers_modelTest extends TestCase
{
    public function testMakeSchoolId()
    {
        $model = new Lecturers_model();
        $data = $model->make_school_id(['user_id' => 1]);
        $this->assertArrayHasKey('school_id', $data);
        $this->assertEquals($_SESSION['USER']->school_id, $data['school_id']);
    }

    public function testGetUser()
    {
      
        $userMock = $this->getMockBuilder(User::class)
                         ->disableOriginalConstructor()
                         ->getMock();

      
        $userMock->expects($this->exactly(2))
                 ->method('where')
                 ->withConsecutive(
                    [$this->equalTo('user_id'), $this->equalTo(1)],
                    [$this->equalTo('user_id'), $this->equalTo(2)]
                 )
                 ->willReturnOnConsecutiveCalls(
                    [new User(['user_id' => 1, 'name' => 'ahanaf'])],
                    [new User(['user_id' => 2, 'name' => 'hannan'])]
                 );

      
        $model = new Lecturers_model();
        $model->User = $userMock;

        // Set up some test data
        $data = [
            new stdClass(),
            new stdClass(),
        ];
        $data[0]->user_id = 1;
        $data[1]->user_id = 2;


        $result = $model->get_user($data);


        $this->assertObjectHasAttribute('user', $result[0]);
        $this->assertEquals('John', $result[0]->user->name);
        $this->assertObjectHasAttribute('user', $result[1]);
        $this->assertEquals('Jane', $result[1]->user->name);
    }
}