<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $data_matrimonio = htmlspecialchars($_POST['data_matrimonio']);
    $messaggio = htmlspecialchars($_POST['messaggio']);

    // Define the headers
    $headers = "From: info@studiofotografico.local \r\n"; // Use the user's email as the "From" address
    $headers .= "Reply-To: " . $email . "\r\n"; // Set Reply-To to the user's email
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Ensure proper encoding

    // Define the headers
    $headers2 = "From: info@studiofotografico.local \r\n"; // Use the user's email as the "From" address
    $headers2 .= "Reply-To: info@studiofotografico.local \r\n"; // Set Reply-To to the user's email
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Ensure proper encoding

    /**
     * Invia mail uno
     */
    mail('info@ilnostrosito.it', 'Nuova richiesta dal sito', $messaggio, $headers);


    /**
     * Invia mail due
     */
    mail($email, 'Nuova richiesta dal sito', $messaggio, $headers2);


    /**
     * Notifica l'utente del successo
     */
    echo 'La tua email è stata inviata correttamente.';

    ?>
    <script>

        // Countdown timer
        let countdown = 3;
        const countdownElement = document.getElementById("countdown");
        
        const timer = setInterval(function() {
            countdown--;
            if (countdownElement) {
                countdownElement.textContent = countdown;
            }
            
            if (countdown <= 0) {
                clearInterval(timer);
                  // Torna alla pagina precedente con parametro URL
                const referrer = document.referrer;
                const separator = referrer.includes('?') ? '&' : '?';
                const newUrl = referrer + separator + 'status=success';
                window.location.href = newUrl;
            }
        }, 1000);
    </script>
    <?php
}
