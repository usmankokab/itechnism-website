<?php
// Email configuration for production
class EmailConfig {
    // Change these for production
    const SMTP_HOST = 'smtp.gmail.com'; // Your SMTP server
    const SMTP_PORT = 587;
    const SMTP_USERNAME = 'your-email@gmail.com'; // Your email
    const SMTP_PASSWORD = 'your-app-password'; // App password
    const FROM_EMAIL = 'noreply@itechnism.com'; // Your domain email
    const TO_EMAIL = 'usman.kokab@gmail.com'; // Where to receive messages
    
    // For production, you may need PHPMailer for better email delivery
    public static function sendEmail($to, $subject, $message, $replyTo = null) {
        // Simple mail() function - works on most shared hosting
        $headers = "From: " . self::FROM_EMAIL . "\r\n";
        if ($replyTo) {
            $headers .= "Reply-To: $replyTo\r\n";
        }
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        return mail($to, $subject, $message, $headers);
    }
}
?>