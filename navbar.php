<?php
require_once 'config.php';
session_start();
ob_start();
?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">النهضة لمحو الأمية</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page) && $page === 'Home') ? ' active' : '' ?>" aria-current="page" href="/">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page) && $page === 'Album') ? ' active' : '' ?>" href="album.php">الفيديوهات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard/index.html">لوحة التحكم (تجربة)</a>
                    </li>
                </ul>
                <div class="d-flex">
                <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true){ ?>
                    <div class="dropdown text-start">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle px-3" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            <span class="px-3_" href="#"><?= $_SESSION['name'] == NULL ? $_SESSION['idNumber'] : $_SESSION['name'] ?></span>
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item" href="/account/panel.php">أعدادت الحساب</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">تسجيل خروج</a></li>
                        </ul>
                    </div>
                <?php }else { ?>
                    <a class="btn btn-outline-primary me-2" href="register.php">تسجيل</a>
                    <a class="btn btn-primary" href="login.php">دخول</a>
                <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</header>
