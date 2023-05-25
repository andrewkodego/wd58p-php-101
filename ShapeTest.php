<?php

require 'Shape.php';
require 'exercise_2.php';

use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase{

    public function testComputeArea(){

        $shape = new Shape(4,4);
        $area =  $shape->computeArea();

        $this->assertIsString($area);
        $this->assertEquals('16 sqcm', $area);
        $this->assertStringContainsString('sq', $area);

        $shape->setUnit('ft');
        $area2 =  $shape->computeArea();

        $this->assertStringContainsString('ft', $area2);

    }

    public function testComputePerimeter(){

        $shape = new Shape(4,6);
        $perimeter = $shape->computePerimeter();

        $this->assertIsInt($perimeter);
        //$this->assertIsBool($perimeter);
        $this->assertEquals(20, $perimeter);

        $square = new Square(5,5);
        $squarePerimeter = $square->computePerimeter();

        $this->assertIsInt($perimeter);
        $this->assertEquals(20, $perimeter);

    }

    public function testCheckIfVowelOrConsonant(){

        $output = checkIfVowelOrConsonant('a');
        $this->assertEquals('A is a vowel', $output);

        $output1 = checkIfVowelOrConsonant('b');
        $this->assertEquals('B is a consonants', $output1);

        $output2 = checkIfVowelOrConsonant(2);
        $this->assertEquals('2 is a consonants', $output2);

    }

    public function testConvertDigitToWord(){
        $digitWord1 = convertDigitToWord(172);

        $this->assertIsString($digitWord1);
        $this->assertEquals('One Seven Two ', $digitWord1);

        $digitWord2 = convertDigitToWord(563);

        $this->assertIsString($digitWord2);
        $this->assertEquals('Five Six Three ', $digitWord2);

        $digitWord3 = convertDigitToWord(1234567890);

        $this->assertIsString($digitWord3);
        $this->assertEquals('One Two Three Four Five Six Seven Eight Nine Zero ', $digitWord3);
    }

}