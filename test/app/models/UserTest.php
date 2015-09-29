<?php

namespace test\app\models\UserTest;

use app\models\User;

class UserTest extends PHPUnit_Framework_TestCase {

	public function testSetGetIdMethods() {
		$expected = 10;
		$user = New User;
		$user->setId($expected);
		$this->assertEquals($expected, $user->getId());
	}

}