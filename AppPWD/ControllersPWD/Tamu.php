<?php


class Tamu extends Controller
{
    private $tamuModel;
    private $mypdf;

    public function __construct()
    {
        $this->tamuModel = $this->model('TamuModel');
    }

    public function index()
    {
        $data["tamu"] = $this->tamuModel->getAll();

        $this->view('partials/head');
        $this->view('tamu/index', $data);
        $this->view('partials/footer');
    }

    public function proses_tambah()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->insert($_POST);
            if ($r) {
                echo "<script> alert('Sukses menambah pengunjung'); </script>";
                header('location: ' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal menambah pengunjung'); </script>";
                header('location: ' . BASEURL . 'tamu');
            }
        } else {
            header('location: ' . BASEURL . 'tamu');
        }
    }

    public function hapusTamu()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->delete($_POST);
            if ($r) {
                echo "<script> alert('Sukses menghapus tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal menghapus tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            }
        }

        header('location: ' . BASEURL . 'tamu');
    }

    public function edit($var)
    {
        $r = $this->tamuModel->getFind($var);
        if ($r == null) {
            header('location:' . BASEURL . 'tamu');
        } else {
            $data["tamu"] = $r;

            $this->view('partials/head');
            $this->view('tamu/edit', $data);
            $this->view('partials/footer');
        }
    }

    public function prosesEdit()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $r = $this->tamuModel->edit($_POST);
            if ($r) {
                echo "<script> alert('Sukses edit tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            } else {
                echo "<script> alert('Gagal edit tamu'); </script>";
                header('location:' . BASEURL . 'tamu');
            }
        }

        header('location: ' . BASEURL . 'tamu');
    }

    public function exportTamu()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->mypdf = new FPDF('l', 'mm', 'A5');

            // membuat halaman baru
            $this->mypdf->AddPage();
            // setting jenis font yang akan digunakan
            $this->mypdf->SetFont('Arial', 'B', 16);
            // mencetak string
            $this->mypdf->Cell(190, 7, 'PROGRAM STUDI TEKNIK INFORMATIKA', 0, 1, 'C');
            $this->mypdf->SetFont('Arial', 'B', 12);
            $this->mypdf->Cell(190, 7, 'DAFTAR BUKU KEDATANGAN TAMU', 0, 1, 'C');
            // Memberikan space kebawah agar tidak terlalu rapat
            $this->mypdf->Cell(10, 7, '', 0, 1);
            $this->mypdf->SetFont('Arial', 'B', 10);

            $this->mypdf->Cell(33, 6, 'NAMA', 1, 0);
            $this->mypdf->Cell(50, 6, 'ALAMAT', 1, 0);
            $this->mypdf->Cell(50, 6, 'TANGGAL DAFTAR', 1, 1);

            $data = $this->tamuModel->getAll();

            foreach ($data as $row) {
                $this->mypdf->Cell(33, 6, $row['nama_tamu'], 1, 0);
                $this->mypdf->Cell(50, 6, $row['alamat_tamu'], 1, 0);
                $this->mypdf->Cell(50, 6, $row['tanggal_tamu'], 1, 1);
            }

            $this->mypdf->Output();
        } else {
            header('location: ' . BASEURL . 'tamu');
        }
    }
}
