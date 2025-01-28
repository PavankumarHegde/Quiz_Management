<?php
/* Smarty version 5.4.3, created on 2025-01-28 10:00:47
  from 'file:layouts/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67989cbf0c0062_79711976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe451dcb4c697cc52ac70d28a90be14faaedc61' => 
    array (
      0 => 'layouts/header.tpl',
      1 => 1738054844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67989cbf0c0062_79711976 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamp\\htdocs\\smarty\\templates\\layouts';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Quiz Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Admin&action=index">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Admin&action=add">Add Question</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }
}
