<?php
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        $this->nama;
        return $this->alamat;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$add = new Person('Addina Khairinisa', 'Jakarta', 'Informatika');
$al = new Person('Ali', 'Depok', 'Bisnis Digital');

echo $add->getNama();
echo '<br>';
echo $al->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Addina Khairinisa',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Ali',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $add = new Person();
// $add->setNama('Addina Khairinisa');
// echo $add->getNama();
// echo '<br>';

// $al = new Person();
// $al->setNama('Ali');
// echo $al->getNama();
?>