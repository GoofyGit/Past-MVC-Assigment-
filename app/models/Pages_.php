<?php
    
  class Pages_ {

        private $db;
      
        public function __construct() {
            $this->db = new Database;
        }

        public function gethobbys(){
            $this->db->query('SELECT * FROM hobbys');
            return $this->db->resultSet();
        }

        public function getclasses(){
            $this->db->query('SELECT * FROM classes');
            return $this->db->resultSet();
        }

        public function getblog(){
            $this->db->query('SELECT * FROM blog');
            return $this->db->resultSet();
        }

        public function getfeedback(){
            $this->db->query('SELECT * FROM feedback');
            return $this->db->resultSet();
        }

        public function addfeedback($fn, $mes) {

            $this->db->query('INSERT INTO  feedback (fname, message) VALUES (:fn, :mes)');

            //Convert data for db
            $this->db->bind(':fn', $fn);
            $this->db->bind(':mes', $mes);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }
    
        public function addcontact($fn, $ln, $email, $mess) {

        $this->db->query('INSERT INTO  contact (fname, lname, email, message) VALUES ( :fn, :ln, :email, :mess)');

        //Convert data for db

        $this->db->bind(':fn', $fn);
        $this->db->bind(':ln', $ln);
        $this->db->bind(':email', $email);
        $this->db->bind(':mess', $mess);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

}





    
?>