<?php
class Dashboard extends CI_Controller
{
  public function index()
  {
    $data['send_data']['title_web'] = "SI Inventaris";
    $data['send_data']['judul_content'] = "Dashboard";
    $data['send_data']['breadcumb1'] = 'Dashboard';
    $data['send_data']['breadcumb2'] = 'Dashboard';

    $this->load->view('template/tamplate', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer');
  }
}
