<?php

class MediumTest extends PHPUnit_Framework_TestCase {

	public function testMediumHasPosts() {
		$medium = new \Sbuckpesch\Medium\Medium( '@sbuckpesch' );
		$posts  = $medium->getPosts();
		$this->assertTrue( count( $posts ) > 0 );
	}

}