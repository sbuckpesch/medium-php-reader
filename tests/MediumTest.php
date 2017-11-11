<?php

class MediumTest extends PHPUnit_Framework_TestCase {

	public function testNachHasCheese() {
		$nacho = new Nacho;
		$this->assertTrue( $nacho->hasCheese() );
	}

}