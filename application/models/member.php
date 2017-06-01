<?php

class Member extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * save
	 */
	function setMemberInfo($info) {

		$password = password_hash($info['password'], PASSWORD_BCRYPT);

		$memberInfo = [
			'memberId' => '',
			'nickname' => '',
			'state'    => 'join',
			'name'     => '',
			'passwd'   => $password,
			'regDate'  => time(),
			'email'    => $info['email']
		];

		$this->db->insert('member', $memberInfo);
	}
}