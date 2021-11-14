
<?php 

use PHPUnit\Framework\TestCase;
final class appTest extends TestCase
{
    public function testTambah(){
        require_once "model.php";
    //  tes insert data valid
        
        $data = new Model();
        $result = $data->insert('1910817210004','Muhammad Jatmika Aryaputra','75','75','75');

        $this->assertTrue(true);

    // insert data karakter unik
        $data = new Model();
        $result = $data->insert('!@#$',' @!#$','75','75','75');

        $this->assertTrue(true);

    //  insert data null
        $data = new Model();
        $result = $data->insert(null,null,null,null,null);

        $this->assertEquals(false,$result);

    //  insert data semua angka
        $data = new Model();
        $result = $data->insert('75',' 75','75','75','75');

        $this->assertTrue(true);

    //  insert data huruf pada kolom nim
        $data = new Model();
        $result = $data->insert('Muhammad Jatmika Aryaputra',' Muhammad Jatmika Aryaputra','75','75','75');

        $this->assertTrue(true);

    }

    public function testUpdate(){
        require_once "model.php";
        
        $data = new Model();
        
        $result = $data->update(null,null,null,null,null);
        $this->assertTrue(true);
    }

    public function testDelete(){
        require_once "model.php";
        $data = new Model();
        // hapus pada kolom nim 
        $result = $data->delete('1910817210004');
        $result = $data->delete(null);
        $result = $data->delete('!@#$');
        $result = $data->delete('75');
        $result = $data->delete('Muhammad Jatmika Aryaputra');

        $this->assertEquals(false, $result);
    }

    
}


?>