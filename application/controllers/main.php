<?php
class Main extends CI_Controller
{
public function index()
{
$this->load->model('message_model');
$this->message_model->setMessage("Setha Laoongnuan 54/94 544259148");
$data['displayMessage'] = $this->message_model->getMessage();
$this->load->view('viewpage',$data);
}
}
?>