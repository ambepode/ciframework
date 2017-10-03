<?php

class Member extends CI_Model
{
	function __construct()
    {
		parent::__construct();
	}

    /**
     * 회원정보 저장
     * @param array $memberInfo
     */
	function insertMember($memberInfo)
    {
		return $this->db->insert('member', $memberInfo);
	}

    /**
     * 회원정보 중복 여부
     * @param string $type (memberId)
     * @param string $value
     * @return bool
     */
	function isDuplicated($type = 'memberId', $value)
    {
        $sql = "SELECT * FROM member WHERE ? = ?";

        $query = $this->db->query($sql, [
            $this->db->escape($type),
            $this->db->escape($value),
        ]);

        return (($query->num_rows() > 0) ? true : false);
    }
}