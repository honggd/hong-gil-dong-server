<?php
class Video_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_list()
	{
		$rows = $this->db->from('video')
				->order_by('index')
				->get()
				->result_array();

		for($i=0; $i < count($rows); $i++) {
			$rows[$i]['title'] = urlencode($rows[$i]['title']);
		}

		return $rows;
	}

	public function set_position($id, $current)
	{
		return $this->db->set('current', $current)
			->where('video_id', $id)
			->update('video');
	}

	public function get_video($id)
	{
		return $this->db->from('video')
				->where('video_id', $id)
				->get()
				->row_array();		
	}
}
