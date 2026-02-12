<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsubscribe - iTechnism Newsletter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <?php include 'partials/navbar.php'; ?>
    
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <?php if ($result['success']): ?>
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-check text-green-600 text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Successfully Unsubscribed</h2>
                    <p class="text-gray-600 mb-8"><?php echo htmlspecialchars($result['message']); ?></p>
                    <p class="text-sm text-gray-500 mb-6">We're sorry to see you go! You will no longer receive newsletter emails from iTechnism.</p>
                <?php else: ?>
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-times text-red-600 text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Unsubscribe Failed</h2>
                    <p class="text-gray-600 mb-8"><?php echo htmlspecialchars($result['message']); ?></p>
                <?php endif; ?>
                
                <div class="space-y-4">
                    <a href="/itech" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors inline-block">
                        Return to Homepage
                    </a>
                    <a href="/itech/contact" class="w-full border border-gray-300 text-gray-700 py-3 px-6 rounded-lg font-semibold hover:bg-gray-50 transition-colors inline-block">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'partials/footer.php'; ?>
</body>
</html>