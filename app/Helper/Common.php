<?php

/*
* class contains common functions used allover the script
*/
class Common extends Database {

    public function getDbName(){
        $query = $this->db->prepare("SELECT db_name FROM users where user_id=?");
        $query->execute(array($_SESSION['user_id']));
        return $query->fetch();
    }

}
