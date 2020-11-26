<?php

/**
 * Copyright (c) 2019. Rahmad Riskiadi (bangameck.dev)
 * 8/9/19 6:22 PM
 */


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
ini_set('max_execution_time', 3600);
date_default_timezone_set('Asia/Jakarta');
//database
include 'database.php';
//url
include 'url.php';
//identitas web
include 'identity.php';
//trafic pengunjung
include 'traffic.php';
//verify code (hash)
include 'verify.php';
//unique ID
include 'uid.php';
//Tanggal Indonesia
include 'tgl_id.php';
//template web
include 'template.php';
//slug_url
include 'slug.php';
//create session in DB
include 'session.php';
//create Token CSRF
include 'csrf.php';
//compress image
include 'compress_image.php';
//rupiah
include 'rupiah.php';
//luas
include 'luas.php';


//aut
function aut($level = array())
{
    //aut(array(1,4));penggunaan
    global $base_url;
    if (!in_array($_SESSION['level'], $level)) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu');
				window.location='" . $base_url . "';</script>";
        exit;
    }
}

//modul
function modul($m)
{
    global $db;
    global $base_url;
    if (empty($m)) {
        include "modul/hm/hm.php";
    } else {
        return include "modul/$m/$m.php";
    }
}
