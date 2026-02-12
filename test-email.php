<!DOCTYPE html>
<html>
<head>
    <title>Email Test - iTechnism</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .log { background: #f5f5f5; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .success { color: green; }
        .info { color: blue; }
    </style>
</head>
<body>
    <h2>📧 Email Function Test</h2>
    
    <?php
    require_once 'controllers/ContactController.php';
    
    if ($_POST) {
        echo "<div class='success'>✅ Testing email function...</div>";
        
        $contact = new ContactController();
        $testData = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'company' => $_POST['company'],
            'service' => $_POST['service'],
            'budget' => $_POST['budget'],
            'message' => $_POST['message']
        ];
        
        $result = $contact->submitMessage($testData);
        
        if ($result['success']) {
            echo "<div class='success'>✅ Form submission successful!</div>";
            echo "<div class='info'>📝 Check the log file below to see the email content that would be sent.</div>";
        } else {
            echo "<div style='color: red;'>❌ Error: " . $result['message'] . "</div>";
        }
    }
    ?>
    
    <form method="POST" style="max-width: 500px;">
        <h3>Test Contact Form</h3>
        <p><input type="text" name="name" placeholder="Name" required style="width: 100%; padding: 8px; margin: 5px 0;"></p>
        <p><input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 8px; margin: 5px 0;"></p>
        <p><input type="text" name="phone" placeholder="Phone" style="width: 100%; padding: 8px; margin: 5px 0;"></p>
        <p><input type="text" name="company" placeholder="Company" style="width: 100%; padding: 8px; margin: 5px 0;"></p>
        <p>
            <select name="service" style="width: 100%; padding: 8px; margin: 5px 0;">
                <option value="">Select Service</option>
                <option value="software-qa">Software QA</option>
                <option value="development">Development</option>
                <option value="rpa">RPA Services</option>
            </select>
        </p>
        <p>
            <select name="budget" style="width: 100%; padding: 8px; margin: 5px 0;">
                <option value="">Select Budget</option>
                <option value="5k-15k">$5,000 - $15,000</option>
                <option value="15k-50k">$15,000 - $50,000</option>
            </select>
        </p>
        <p><textarea name="message" placeholder="Message" required style="width: 100%; padding: 8px; margin: 5px 0; height: 80px;"></textarea></p>
        <p><button type="submit" style="background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Test Email Function</button></p>
    </form>
    
    <hr>
    
    <h3>📋 Email Log (What would be sent)</h3>
    <?php
    $logFile = 'logs/email_test.log';
    if (file_exists($logFile)) {
        $logContent = file_get_contents($logFile);
        echo "<div class='log'><pre>" . htmlspecialchars($logContent) . "</pre></div>";
        
        echo "<p><a href='?clear=1' style='color: red;'>Clear Log</a></p>";
        
        if (isset($_GET['clear'])) {
            unlink($logFile);
            echo "<div class='success'>✅ Log cleared!</div>";
            echo "<script>window.location.href = 'test-email.php';</script>";
        }
    } else {
        echo "<div class='info'>No email tests yet. Submit the form above to test.</div>";
    }
    ?>
    
    <hr>
    <p><strong>How it works:</strong></p>
    <ul>
        <li>✅ On localhost: Saves email content to log file (for testing)</li>
        <li>📧 On production: Sends actual email to usman.kokab@gmail.com</li>
        <li>💬 Reply-To is set to customer's email for easy conversation</li>
    </ul>
</body>
</html>