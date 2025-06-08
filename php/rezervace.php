<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Získání dat z formuláře
    $jmeno = $_GET['jmeno'] ?? '';
    $email = $_GET['email'] ?? '';
    $telefon = $_GET['telefon'] ?? '';
    $checkin = $_GET['checkin'] ?? '';
    $checkout = $_GET['checkout'] ?? '';
    $pokoj = $_GET['pokoj'] ?? '';
    $osoby = $_GET['osoby'] ?? '';
    $poznamka = $_GET['poznamka'] ?? '';
    
}
?>