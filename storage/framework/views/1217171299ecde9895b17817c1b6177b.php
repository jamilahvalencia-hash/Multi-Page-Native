

<?php $__env->startSection('title', 'About Us | Valencia'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-header">
    <h1>About Us</h1>

    <p>Get to know more about the Valencia website.</p>
</section>

<section class="content-section">
    <h2>About Our Project</h2>

    <p>
        Valencia is a multi-page website developed using the
        Laravel framework. This project demonstrates how
        Laravel Blade templates can organize website content
        into reusable layouts and individual pages.
    </p>

    <h2>Our Purpose</h2>

    <p>
        The purpose of this project is to demonstrate the
        migration of a native PHP website into Laravel.
        It uses Blade Layout Inheritance to maintain a
        consistent navigation bar, page structure, and footer.
    </p>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ADMIN\Valencia\resources\views/about.blade.php ENDPATH**/ ?>