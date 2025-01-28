<?php
/* Smarty version 5.4.3, created on 2025-01-27 12:02:34
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_679767cacc9b07_38011842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18514e371e34ef37727bcd9c88877f2f4558ecaa' => 
    array (
      0 => 'index.tpl',
      1 => 1737975745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_679767cacc9b07_38011842 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamp\\htdocs\\smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer Vacation Trips</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        nav {
            background-color: #003366; /* Dark Blue Background */
        }
        .nav-link {
            color: white !important; /* White text for links */
            font-size: 1rem; /* Font size for menu items */
            padding: 0.5rem 1rem; /* Spacing for menu items */
            display: flex;
            align-items: center; /* Align icons with text */
            gap: 0.5rem; /* Space between icon and text */
        }
        .nav-link:hover {
            color: #ccccff !important; /* Light blue hover effect */
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white !important;
        }
        .navbar-toggler {
            border-color: white;
        }
        .navbar-toggler-icon {
            background-color: white; /* White toggle icon for visibility */
        }
        .bi {
            font-size: 1.2rem; /* Adjust icon size */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Hamburger Menu -->
            <button class="navbar-toggler order-0 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Brand Name -->
            <a class="navbar-brand order-1" href="#">Summer Trips</a>
            
            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse order-2" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-map"></i> Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
