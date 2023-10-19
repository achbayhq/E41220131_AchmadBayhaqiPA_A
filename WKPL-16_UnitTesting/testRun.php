<?php  
use PHPUnit\Framework\TestCase;     // import TestCase yang digunakan untuk membuat pengujian dalam PHPUnit.
require_once "kakulator.php";       //import kelas kakulator yang nantinya diuji dalam PHPUnit

class testRun extends TestCase{
    public function testRun(){
    $num1 = 10;
    $num2 = 5;

    $kalkulatorTest = new kakulator();      //instansiasi class kakulator

    $output = $kalkulatorTest->tambah($num1, $num2);        //memanggil object tambah pada kalkulatorTest dan parameternya diisi dengan num1 dan num2 yang sebelumnya telah dideklarasikan lalu menyimpan hasil ke variable output

    $this->assertEquals(15, $output);       //untuk memeriksa apakah hasil dari pemanggilan tambah sesuai dengan nilai yang diharapkan, yaitu 15. Jika hasil tidak sama dengan 15 maka pengujian akan gagal.
    }
}

?>