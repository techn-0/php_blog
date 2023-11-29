<?php
    //한글깨짐방지 인코딩
    header('Content-Type: text/html; charset=utf-8');

    $db = new mysqli("localhost", "root", "1234", "techno");
    $db->set_charset("utf-8");

    function query($query)
    {
        global $db;
        return $db->query($query);
    }