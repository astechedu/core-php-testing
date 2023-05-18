<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

//Method 3
use App\Maths;

class CalculatorTest extends TestCase {
	
  //Method 1
   public function testAddCanNumbers() {
      
     $this->assertSame(2,(1+1));
   }

/*
   public function testSbtractCanNumbers() {
     
     $this->assertSame(0,(1-1));
   }

   public function testMultiplyCanNumbers() {
     
     $this->assertSame(1,(1*1));
   }  

   public function testDevideCanNumbers() {
     
     $this->assertSame(1,(1/1));
     
   }  

*/


//Method 2
//Creating Object from Maths.php file in app folder

  public function testAdd() {

      $maths = new Maths();

      $add = $maths->add(2,2);

      $this->assertEquals(4, $add);

  }
  
     
  public function testSub() {

      $maths = new Maths();

      $sub = $maths->sub(2,2);

      $this->assertEquals(0, $sub);

  } 

  
   
}




















?>