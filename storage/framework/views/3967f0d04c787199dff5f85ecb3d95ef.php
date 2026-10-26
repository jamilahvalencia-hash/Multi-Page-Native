

<?php $__env->startSection('title', 'Home | Valencia'); ?>

<?php $__env->startSection('content'); ?>

<section class="hero">
    <h1>Welcome to Valencia Website!</h1>

    <p>
        Welcome to my Laravel multi-page website.
        This project demonstrates how to migrate a native PHP
        website into Laravel using Blade Layout Inheritance.
    </p>

    <a href="/about" class="btn">Learn More</a>
</section>

<section class="features">
    <h2>Explore Our Website</h2>

    <div class="card-container">

        <div class="card">
            <h3>About Us</h3>
            <p>Learn more about our website and its purpose.</p>
            <a href="/about">Read More</a>
        </div>

        <div class="card">
            <h3>Our Services</h3>
            <p>Discover the services featured on our website.</p>
            <a href="/services">View Services</a>
        </div>

        <div class="card">
            <h3>Contact Us</h3>
            <p>Visit our contact page to get in touch with us.</p>
            <a href="/contact">Contact Us</a>
        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ADMIN\Valencia\resources\views/home.blade.php ENDPATH**/ ?>