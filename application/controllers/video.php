<?php
class Video extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('video_model');
	}

	public function get_list()
	{
		$this->output->set_header('Content-Type: application/json');
		echo json_encode($this->video_model->get_list());
	}

	public function set_position($id = NULL, $current = NULL)
	{
		$this->output->set_header('Content-Type: application/json');
		if($id != NULL && $current != NULL) {
			echo json_encode($this->video_model->set_position($id, $current));
		} elseif($id != NULL && $current == 'reset') {
			echo json_encode($this->video_model->set_position($id, 0));
		} else {
			echo json_encode(FALSE);
		}
	}

	public function play_video($id)
	{
		$data = $this->video_model->get_video($id);

		if($data) {
			$this->load->view('play_video', $data);
		} else {
			echo 'Video Not found!';
		}
	}

	public function play_list()
	{
		$this->load->view('play_list');
	}
}
