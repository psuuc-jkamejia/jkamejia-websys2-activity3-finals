<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code CRUD - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles for a "Manly" Look -->
    <style>
      
        .navbar {
            margin-bottom: 20px;
            background-color: #333;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar-toggler-icon {
            background-color: #fff;
        }
        .container {
            max-width: 1100px;
        }
        .card {
            background-color: #333;
            border: none;
            color: #ddd;
        }
        .card-header {
            background-color: #444;
            color: #fff;
            font-weight: bold;
        }
        .btn {
            background-color: #0069d9;
            color: #fff;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .footer {
            background-color: #333;
            color: #888;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">QR Code CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>



<!-- Bootstrap JS (for navbar toggle) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\KENN Folder\QR Activity 3\resources\views/layouts/app.blade.php ENDPATH**/ ?>