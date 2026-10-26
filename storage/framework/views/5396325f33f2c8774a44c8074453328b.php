<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'Valencia Laravel Website'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="/" class="logo">Valencia</a>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 Valencia. All rights reserved.</p>
            <p>WEBDEV3 - Laravel Development</p>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\Users\ADMIN\Valencia\resources\views/layouts/app.blade.php ENDPATH**/ ?>