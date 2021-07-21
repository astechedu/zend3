<?php

	namespace Application\Model;

	class User {

	    public $id;

	    public $name;

	    public $email;

	    public $password;
	 

	    public function exchangeArray($data) {

	        $this->id = (!empty($data['id'])) ? $data['id'] : null;

	        $this->name = (!empty($data['name'])) ? $data['name'] : null;

	        $this->email = (!empty($data['email'])) ? $data['email'] : null;

	        $this->mobile = (!empty($data['password'])) ? $data['password'] : null;
	       

	    }

	}