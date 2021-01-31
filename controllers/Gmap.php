<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gmap extends CI_Controller
{
    public function index()
    {
        $this->load->model('gmap_model');
        $data['users'] = $this->gmap_model->retrieve();
        $this->load->view('dashboard', $data);
    }

    public function addLocation()
    {
        $name = $_POST['name'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $data = array("name"=> $name, "latitude" => $latitude, "longitude" => $longitude);
        $this->load->model('gmap_model');
        $this->gmap_model->insert($data);
        redirect(base_url('gmap'));
    }
    
    public function show($id)
    {
        $this->load->model('gmap_model');
        $data['users'] = $this->gmap_model->retrieve();
        $data['location'] = $this->gmap_model->show($id);
        $this->load->view('dashboard', $data);
    }
    
    public function delete($id)
    {
        $this->load->model('gmap_model');
        $this->gmap_model->delete($id);
        redirect(base_url('gmap'));
    }
}
