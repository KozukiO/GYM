<?php
    require("db_connection.php");

    class Search extends Database{
        public function getCred($uemail, $pass){
            $sql = "SELECT * FROM login WHERE email='$uemail' AND password='$pass'";
            return $this->db_query($sql);
        }

        public function createPharm($patientID, $fname, $lname, $date, $gender, $age, $items, $details, $email){
            $sql = "INSERT INTO `pharmacy` VALUES ('$patientID', '$fname', '$lname', '$date', '$gender', '$age', '$items', '$details', '$email');";
            return $this->db_query($sql);
        }
        

        public function createSurgery($patientID, $fname, $lname, $date, $email, $gender, $age, $procedure1, $details){
            $sql = "INSERT INTO `surgery` VALUES ('$patientID', '$fname', '$lname', '$date','$email', '$gender', '$age', '$procedure1', '$details' );";
            return $this->db_query($sql);
        }

        public function createDentistry($patientID, $fname, $lname, $date, $email, $gender, $age, $details){
            $sql = "INSERT INTO `dentistry` VALUES ('$patientID', '$fname', '$lname', '$date','$email', '$gender', '$age','$details' );";
            return $this->db_query($sql);
        }

        public function createVaccine($patientID, $fname, $lname, $date, $email, $gender, $age, $details){
            $sql = "INSERT INTO `vaccine` VALUES ('$patientID', '$fname', '$lname', '$date','$email', '$gender', '$age','$details' );";
            return $this->db_query($sql);
        }

        }
?>


(`fname`,`lname`,`date`,`email`,`Patient_iD`,`gender`,`age`,`items`,`details`)