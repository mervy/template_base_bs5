<?php

require_once 'dbClass.php';

    function get_all(){

        $db = new MyPDO();

        $sql = "SELECT * FROM articles";
        $STH = $db->prepare($sql);
        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        return $STH;
    }