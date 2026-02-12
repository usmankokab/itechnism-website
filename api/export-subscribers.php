<?php
require_once '../controllers/NewsletterController.php';

$newsletter = new NewsletterController();
$subscribers = $newsletter->getSubscribers();

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="newsletter_subscribers_' . date('Y-m-d') . '.csv"');

$output = fopen('php://output', 'w');

// CSV headers
fputcsv($output, ['Email', 'Name', 'Source', 'Subscribed Date']);

// CSV data
foreach ($subscribers as $subscriber) {
    fputcsv($output, [
        $subscriber['email'],
        $subscriber['name'] ?: '',
        $subscriber['source'],
        $subscriber['subscribed_at']
    ]);
}

fclose($output);
?>