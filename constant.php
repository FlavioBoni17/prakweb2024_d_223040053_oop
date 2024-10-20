<?php 

// define('NAMA', 'Flavio');
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;

// class Coba {
//     const NAMA  = 'Flavio';
// }

// echo Coba::NAMA;


// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>