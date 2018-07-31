<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_weight extends CI_Model
{

    public $table = 'weight';
    public $id = 'id_weight';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->order_by('create_date', $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_date($id)
    {
        $this->db->where('create_date', $id);
        return $this->db->get($this->table)->row();
    }

    function insert($data)
    {
    	$this->db->insert($this->table,$data);
    }

    function update($id,$data)
    {
    	$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
}