<?php
require_once '../config.php';
session_start();
ob_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 1){
    header('Location: /index.php');
}
?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">النهضه لمحو الاميه</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="dropdown text-start">
        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle px-3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            <span class="px-1" href="#"><?= $_SESSION['name'] == NULL ? $_SESSION['username'] : $_SESSION['name'] ?></span>
        </a>
        <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="../account/panel.php">أعدادت الحساب</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">تسجيل خروج</a></li>
        </ul>
    </div>
</header>
