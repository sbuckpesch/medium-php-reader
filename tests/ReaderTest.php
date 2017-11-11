<?php
/**
 * Created by PhpStorm.
 * User: s.buckpesch
 * Date: 11.11.2017
 * Time: 22:02
 */

use PHPUnit\Framework\TestCase;
use Sbuckpesch\Medium\Reader;

class ReaderTest extends TestCase {

	public function testIsMoreThanOnePostAvailable(): void {
		$reader = new Reader( '@sbuckpesch' );
		$posts  = $reader->getPosts();

		$this->assertGreaterThan( 0, count( $posts ) );
	}

	/*public function testCannotBeCreatedFromInvalidEmailAddress(): void
	{
		$this->expectException(InvalidArgumentException::class);

		Email::fromString('invalid');
	}

	public function testCanBeUsedAsString(): void
	{
		$this->assertEquals(
			'user@example.com',
