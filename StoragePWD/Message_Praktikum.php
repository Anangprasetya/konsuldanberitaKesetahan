<?php

class Message
{
    public static function setPesan($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }


    public static function getPesan()
    {
        if (isset($_SESSION['flash'])) {
            echo "Ini adalah pesan " . $_SESSION['flash']['tipe'] . "\n
			isi (" . $_SESSION['flash']['pesan'] . ")  lalu aksi [" . $_SESSION['flash']['aksi'] . "] ";



            unset($_SESSION['flash']);
        }
    }
}
