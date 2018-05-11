<?php
class koneksi {
    private $server = "localhost";
    private $username = "id4928317_root";
    private $password = "bagus12345";
    private $db = "id4928317_db_praktek";
    

    function ambilkoneksi(){
        return new mysqli($this -> server, $this -> username, $this -> password, $this -> db);
        
    }

}

?>