<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{

    public function test_Add_Sequence_To_Array_Without_FizzNumbers_AND_BuzzNumbers()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", 0, 0);

        $this->assertEquals($sequence[0], "1");
        $this->assertEquals($sequence[29], "30");
    }

    public function test_That_Fizz_or_Buzz_Number_Can_Be_Calculated()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $result = $sequenceObj->calculateMultiple("6", "3", 'fizz');
        $this->assertEquals($result['type'], 'fizz');
    }

    public function test_That_FizzNumber_Multiple_Is_Fizz_In_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", "3", "5");

        $this->assertEquals($sequence[5], "fizz");
    }

    public function test_That_BuzzNumber_Multiple_Is_Buzz_In_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", "3", "5");

        $this->assertEquals($sequence[9], "buzz");
    }

    public function test_That_FizzNumber_Representation_Is_Fizz_In_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("60", "3", "5");
        
        $this->assertEquals($sequence[12], "fizz");
    }
    
    public function test_That_BuzzNumber_Representation_Is_Buzz_In_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("60", "3", "5");

        $this->assertEquals($sequence[51], "buzz");
    }

    public function test_That_FizzNumber_AND_BuzzNumber_Multiple_Is_FizzBuzz_In_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("60", "3", "5");

        $this->assertEquals($sequence[59], "fizzbuzz");
    }

    public function test_that_FizzMultiple_AND_BuzzMultiple_AND_FizzRepresentation_OR_Buzzrepresenation_is_changed_to_Lucky_in_SequenceArray(){
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", "3", "5");

        $this->assertEquals($sequence[14], "lucky");
    }

    public function test_that_FizzMultiple_AND_FizzRepresentation_is_fizzfizz_in_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", "3", "5");

        $this->assertEquals($sequence[2], "fizz fizz");
    }

    public function test_that_BuzzMultiple_AND_BuzzRepresentation_is_buzzbuzz_in_SequenceArray()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("30", "3", "5");

        $this->assertEquals($sequence[4], "buzz buzz");
    }

    public function test_that_all_works_with_high_sequence()
    {
        $sequenceObj = new \Src\SequenceAssignment;

        $sequence = $sequenceObj->manipulateSequenceArray("600", "3", "5");

        $this->assertEquals($sequence[0], "1");
        $this->assertEquals($sequence[498], "499");

        $this->assertEquals($sequence[215], "fizz");
        $this->assertEquals($sequence[339], "buzz");

        $this->assertEquals($sequence[307], "fizz");
        $this->assertEquals($sequence[451], "buzz");

        $this->assertEquals($sequence[479], "fizzbuzz");

        $this->assertEquals($sequence[344], "lucky");

        $this->assertEquals($sequence[302], "fizz fizz");
        $this->assertEquals($sequence[504], "buzz buzz");
    }
 
}



