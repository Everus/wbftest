<?php

namespace test\app\models\UserTest;

use app\models\User;

class UserTest extends PHPUnit_Framework_TestCase {

	public function testSetGetIdMethods() {
		$expected = 10;
		$user = New User();
		$user->setId($expected);
		$this->assertEquals($expected, $user->getId());
	}

	public function testSetGetEmailMethods() {
		$expected = 'any@any.ru';
		$user = new User();
		$user->setEmail($expected);
		$this->assertEquals($expected, $user->getEmail());
	}

	public function testSetGetNameMethods() {
		$expected = 'ivan';
		$user = new User();
		$user->setName($expected);
		$this->assertEquals($expected, $user->getName());
	}

	public function testSetGetSurnameMethods() {
		$expected = 'any';
		$user = new User();
		$user->setSurname($expected);
		$this->assertEquals($expected, $user->getSurname());
	}
}