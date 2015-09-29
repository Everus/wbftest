<?php

namespace app\models;

class User {

	private $id;
	private $email;
	private $foto;
	private $name;
	private $surname;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $meail;
	}

	public function getFoto() {
		return $this->foto;
	}

	public function setFoto(app\Model\Image $foto) {
		$this->foto = $foto;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function setSurname($surname) {
		$this->surname =$surname
	}
}