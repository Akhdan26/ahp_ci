<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ahp extends CI_Model
{
    public function getJumlahKriteria()
    {
        return $this->db->count_all('kriteria');
    }

    public function getJumlahPerbandinganKriteria()
    {
        return $this->db->count_all('perbandingan_kriteria');
    }

    function getKriteriaID()
    {
        $this->db->select('id');
        $this->db->from('kriteria');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getK1()
    {
        $this->db->select('*');
        $this->db->from('perbandingan_kriteria');
        $result = $this->db->get()->row();
        return $result;
    }

    public function getK2()
    {
        $this->db->select('kriteria2');
        $this->db->from('perbandingan_kriteria');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function tesK1()
    {
        return $this->getK1();
    }

    function getNilaiPerbandinganKriteria()
    {
        $kriteria1 = $this->getK1();
        // var_dump($k1);
        // include('config.php');
        // var_dump($kriteria1);

        $this->db->select('*');
        $this->db->from('perbandingan_kriteria');
        $this->db->where('kriteria1', $kriteria1->kriteria1);
        $this->db->where('kriteria2', $kriteria1->kriteria2);
        $result = $this->db->get()->result_array();

        // if ($result == 0) {
        //     $nilai = 1;
        // } else {
        //     foreach ($result as $row) {
        //         $nilai = $row->nilai;
        //     }
        // }


        return $result;
    }

    public function getJumlahAlternatif()
    {
        return $this->db->count_all('alternatif');
    }

    function getDataKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }

    public function getNilai()
    {
        // get kriteria list
        $query = "SELECT * FROM kriteria";
        $kriteria_list = $this->db->query($query)->result_array();

        // mulai kombinasi
        $hasil_kombinasi_id = array();
        $hasil_kombinasi_nama = array();
        for ($i = 0; $i < count($kriteria_list) - 1; $i++) {
            for ($j = $i + 1; $j < count($kriteria_list); $j++) {
                $each_kombinasi = array(
                    $kriteria_list[$i],
                    $kriteria_list[$j]
                );
                array_push($hasil_kombinasi, $each_kombinasi);
            }
        }

        // get existing perbandingan kriteria
        // $this->db->select('k1.nama AS nama1, k2.nama AS nama2, pk.nilai');
        // $this->db->from('perbandingan_kriteria as pk');
        // $this->db->join('kriteria AS k1', 'k1.id = pk.kriteria1', 'inner');
        // $this->db->join('kriteria AS k2', 'k2.id = pk.kriteria2', 'inner');
        // $perbandingan_kriteria = $this->db->get()->result_array();
        $query = "SELECT * FROM perbandingan_kriteria";
        $perbandingan_kriteria = $this->db->query($query)->result_array();

        // mulai cek
        foreach ($hasil_kombinasi as $kombinasi) {
            if (!in_array($kombinasi, $hasil_kombinasi)) {
                echo "cok";
                array_push($hasil_kombinasi_baru, $kombinasi);
            }
        }

        return $perbandingan_kriteria;


        // if ($query == '0') {
        //     $nilai->num_rows(1);
        // } else {
        //     $nilai = $query->;
        // }
        // The following will set $result to the value of "g_data" if there 
        // are rows and to "0" if there are none.
    }

    public function getNilai2()
    {
        $this->db->select('*');
        $this->db->from('perbandingan_kriteria');
        $query = $this->db->get();

        return $query;
    }

    function getDataAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    // view kriteria
    public function addKriteria()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama'), true),
        ];
        $this->db->insert('kriteria', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data baru berhasil ditambahkan!</div>');
        redirect('ahp/kriteria');
    }

    public function editKriteria($id)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama'), true),
        ];
        $where = ['id' => $id];
        $this->db->update('kriteria', $data, $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dirubah!</div>');
        redirect('ahp/kriteria');
    }

    public function deleteKriteria($id)
    {
        $where = ['id' => $id];
        return $this->db->delete('kriteria', $where);
    }
    // view alternatif
    public function addAlternatif()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama'), true),
        ];
        $this->db->insert('alternatif', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data baru berhasil ditambahkan!</div>');
        redirect('ahp/alternatif');
    }

    public function editAlternatif($id)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama'), true),
        ];
        $where = ['id' => $id];
        $this->db->update('alternatif', $data, $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dirubah!</div>');
        redirect('ahp/alternatif');
    }

    public function deleteAlternatif($id)
    {
        $where = ['id' => $id];
        return $this->db->delete('alternatif', $where);
    }
}
