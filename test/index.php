<?php

require '../functions.php'; // Require the file to be tested

use PHPUnit\Framework\TestCase;

class Index extends TestCase
{

    public function testSuccessEachCharacter()
    {
        $input = ['image'=>'img of Rick', 'character_name'=>'Rick', 'name'=>'Rick and Morty', 'IQ'=>'300'];
        $expectedOutput = '<div class="container"><img src="img of Rick" alt="Picture of Rick"><h2>Name: Rick</h2><h2>TV Show: Rick and Morty</h2><h2>IQ: 300</h2></div>';

        $result = eachCharacter($input);
        $this->assertEquals($expectedOutput, $result);
    }

    public function testMalformedEachCharacter()
    {
        $this->expectException(TypeError::class);
        $input = 23;
        eachCharacter($input);
    }

    public function testFailureEachCharacter ()
    {
        $input = ['image'=>'img of Rick', 'name'=>'Rick and Morty', 'IQ'=>'300'];;
        $expectedOutput = '';
        $result = eachCharacter($input);
        $this->assertEquals($expectedOutput, $result);
    }

    public function testFailureEachCharacter2()
    {
        $input = ['image'=>'img of Rick', 'character_name'=>'Rick', 'name'=>'Rick and Morty'];
        $expectedOutput = '';
        $result = eachCharacter($input);
        $this->assertEquals($expectedOutput, $result);
    }

    public function testFailureEachCharacter3()
    {
        $input = ['image'=>'img of Rick', 'character_name'=>'Rick', 'IQ'=>'300'];
        $expectedOutput = '';
        $result = eachCharacter($input);
        $this->assertEquals($expectedOutput, $result);
    }

    public function testEachCharacter()
    {
        $input = ['character_name'=>'Rick', 'name'=>'Rick and Morty', 'IQ'=>'300'];
        $expectedOutput = '';
        $result = eachCharacter($input);
        $this->assertEquals($expectedOutput, $result);
    }

}