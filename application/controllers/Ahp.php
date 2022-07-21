<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ahp extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_ahp');
	}

	public function index()
	{
		$data['jml_kriteria'] = $this->M_ahp->getJumlahKriteria();
		$data['jml_alternatif'] = $this->M_ahp->getJumlahAlternatif();
		// $data['nama_kriteria'] = $this->M_ahp->getKriteriaNama();
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ahp/index');
		$this->load->view('template/footer');
	}
	// view kriteria
	public function kriteria()
	{
		$data['jml_kriteria'] = $this->M_ahp->getJumlahKriteria();
		$data['jml_alternatif'] = $this->M_ahp->getJumlahAlternatif();
		$data['kriteria'] = $this->M_ahp->getDataKriteria();
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ahp/kriteria', $data);
		$this->load->view('template/footer');
	}

	public function addKriteria()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			redirect('ahp/kriteria');
		} else {
			$this->M_ahp->addKriteria();
		}
	}

	public function editKriteria($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diupdate!</div>');
			redirect('ahp/kriteria');
		} else {
			$this->M_ahp->editKriteria($id);
		}
	}

	public function deleteKriteria($id = null)
	{
		$this->M_ahp->deleteKriteria($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
		redirect('ahp/kriteria');
	}
	// view alternatif
	public function alternatif()
	{
		$data['jml_kriteria'] = $this->M_ahp->getJumlahKriteria();
		$data['jml_alternatif'] = $this->M_ahp->getJumlahAlternatif();
		$data['alternatif'] = $this->M_ahp->getDataAlternatif();
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ahp/alternatif', $data);
		$this->load->view('template/footer');
	}

	public function addAlternatif()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			redirect('ahp/alternatif');
		} else {
			$this->M_ahp->addAlternatif();
		}
	}

	public function editAlternatif($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diupdate!</div>');
			redirect('ahp/alternatif');
		} else {
			$this->M_ahp->editAlternatif($id);
		}
	}

	public function deleteAlternatif($id = null)
	{
		$this->M_ahp->deleteAlternatif($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
		redirect('ahp/alternatif');
	}
	// view bobot_kriteria
	public function bbt_kriteria()
	{
		// $kri = new stdClass();
		// if ($kri == 'kriteria') {
		// 	$n = getJumlahKriteria();
		// } else {
		// 	$n = getJumlahAlternatif();
		// }

		$kriteria = $this->M_ahp->getJumlahKriteria();
		// var_dump($kriteria);

		$data['jml_kriteria'] = $this->M_ahp->getJumlahKriteria();
		$data['jml_alternatif'] = $this->M_ahp->getJumlahAlternatif();
		$data['kriteria'] = $this->M_ahp->getDataKriteria();
		$data['kriteria_id'] = $this->M_ahp->getKriteriaID();
		$data['nilai'] = $this->M_ahp->getNilai();
		var_dump($data['nilai']);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ahp/bobotKriteria', $data);
		$this->load->view('template/footer');
	}
}
