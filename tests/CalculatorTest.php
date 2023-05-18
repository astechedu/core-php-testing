<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase {
	
   public function testAddCanNumbers() {
      
     $this->assertSame(2,(1+1));
   }

   public function testSbtractCanNumbers() {
     
     $this->assertSame(0,(1-1));
   }

   public function testMultiplyCanNumbers() {
     
     $this->assertSame(1,(1*1));
   }  

   public function testDevideCanNumbers() {
     
     $this->assertSame(1,(1/1));
     
   }  
 
   
}




















?>