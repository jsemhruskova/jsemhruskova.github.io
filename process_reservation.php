<?php
// Kontrola, zda byla data odeslána metodou POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitace a validace vstupních dat
    $checkin = filter_input(INPUT_POST, 'checkin', FILTER_SANITIZE_STRING);
    $checkout = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_STRING);
    $room_type = filter_input(INPUT_POST, 'room_type', FILTER_SANITIZE_STRING);
    $guests = filter_input(INPUT_POST, 'guests', FILTER_SANITIZE_STRING);
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $special_requests = filter_input(INPUT_POST, 'special_requests', FILTER_SANITIZE_STRING);
    
    // Základní validace
    $errors = [];
    
    if (empty($checkin)) {
        $errors[] = "Datum příjezdu je povinné";
    }
    
    if (empty($checkout)) {
        $errors[] = "Datum odjezdu je povinné";
    }
    
    if (empty($room_type)) {
        $errors[] = "Typ pokoje je povinný";
    }
    
    if (empty($guests)) {
        $errors[] = "Počet hostů je povinný";
    }
    
    if (empty($firstname)) {
        $errors[] = "Křestní jméno je povinné";
    }
    
    if (empty($lastname)) {
        $errors[] = "Příjmení je povinné";
    }
    
    if (!$email) {
        $errors[] = "Platný email je povinný";
    }
    
    if (empty($phone)) {
        $errors[] = "Telefon je povinný";
    }
    
    // Validace dat
    $checkin_date = DateTime::createFromFormat('Y-m-d', $checkin);
    $checkout_date = DateTime::createFromFormat('Y-m-d', $checkout);
    $today = new DateTime();
    
    if ($checkin_date <= $today) {
        $errors[] = "Datum příjezdu musí být v budoucnosti";
    }
    
    if ($checkout_date <= $checkin_date) {
        $errors[] = "Datum odjezdu musí být po datu příjezdu";
    }
    
    // Pokud nejsou chyby, zpracuj rezervaci
    if (empty($errors)) {
        
        // Generuj unikátní ID rezervace
        $reservation_id = 'RES' . date('Ymd') . rand(1000, 9999);
        
        // Vytvoř textový soubor s rezervací (místo databáze)
        $reservationData = [
            'id' => $reservation_id,
            'datum_vytvoreni' => date('Y-m-d H:i:s'),
            'prijezd' => $checkin,
            'odjezd' => $checkout,
            'typ_pokoje' => $room_type,
            'pocet_hostu' => $guests,
            'jmeno' => $firstname,
            'prijmeni' => $lastname,
            'email' => $email,
            'telefon' => $phone,
            'pozadavky' => $special_requests
        ];
        
        // Vytvoř složku pro rezervace, pokud neexistuje
        if (!file_exists('reservations')) {
            mkdir('reservations', 0777, true);
        }
        
        // Ulož rezervaci do textového souboru
        $filename = 'reservations/reservation_' . $reservation_id . '.txt';
        file_put_contents($filename, json_encode($reservationData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        
        // Odeslat potvrzovací email
        $to = $email;
        $subject = "Potvrzení rezervace - Hotel Luxus";
        
        // Přeložení typu pokoje pro email
        $room_types = [
            'standard' => 'Standardní pokoj',
            'deluxe' => 'Deluxe pokoj',
            'suite' => 'Luxusní apartmá'
        ];
        $room_name = $room_types[$room_type] ?? $room_type;
        
        $message = "
        <html>
        <head>
            <title>Potvrzení rezervace</title>
            <style>
                body { font-family: Arial, sans-serif; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #d4af37; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background: #f9f9f9; }
                .detail { margin: 10px 0; }
                .footer { text-align: center; margin-top: 20px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Hotel Luxus</h2>
                    <p>Děkujeme za vaši rezervaci!</p>
                </div>
                
                <div class='content'>
                    <h3>Rezervace č. $reservation_id</h3>
                    <p>Vaše rezervace byla úspěšně přijata a bude zpracována v nejbližší době.</p>
                    
                    <h4>Detaily rezervace:</h4>
                    <div class='detail'><strong>Jméno:</strong> $firstname $lastname</div>
                    <div class='detail'><strong>Email:</strong> $email</div>
                    <div class='detail'><strong>Telefon:</strong> $phone</div>
                    <div class='detail'><strong>Datum příjezdu:</strong> " . date('d.m.Y', strtotime($checkin)) . "</div>
                    <div class='detail'><strong>Datum odjezdu:</strong> " . date('d.m.Y', strtotime($checkout)) . "</div>
                    <div class='detail'><strong>Typ pokoje:</strong> $room_name</div>
                    <div class='detail'><strong>Počet hostů:</strong> $guests</div>";
        
        if (!empty($special_requests)) {
            $message .= "<div class='detail'><strong>Speciální požadavky:</strong> $special_requests</div>";
        }
        
        $message .= "
                    <p style='margin-top: 20px;'>Brzy vás budeme kontaktovat pro potvrzení a další detaily.</p>
                </div>
                
                <div class='footer'>
                    <p>S pozdravem,<br>Tým Hotel Luxus</p>
                    <p>Václavské náměstí 123, 110 00 Praha 1<br>Tel: +420 123 456 789</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Hotel Luxus <noreply@hotelluxus.cz>' . "\r\n";
        $headers .= 'Reply-To: info@hotelluxus.cz' . "\r\n";
        
        // Odeslat email (pokud je nakonfigurován mail server)
        if (mail($to, $subject, $message, $headers)) {
            $success_message = "Rezervace byla úspěšně odeslána! Potvrzení jste obdrželi na email.";
        } else {
            $success_message = "Rezervace byla uložena s číslem $reservation_id. Kontaktujeme vás v nejbližší době.";
        }
        
        // Přesměrovat na úspěšnou stránku
        header("Location: index.php?success=" . urlencode($success_message));
        exit();
        
    }
    
    // Pokud jsou chyby, zobrazit je
    if (!empty($errors)) {
        $error_message = implode(" | ", $errors);
        header("Location: index.php?error=" . urlencode($error_message));
        exit();
    }
}

// Pokud nebyla data odeslána POST metodou, přesměrovat zpět
header("Location: index.php");
exit();
?>
