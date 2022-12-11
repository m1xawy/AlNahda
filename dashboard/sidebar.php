<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= isset($page) && $page == 'Dashboard' ? 'active' : ''?>" aria-current="page" href="/dashboard/index.php">
                    <span data-feather="home" class="align-text-bottom"></span>
                    لوحة القيادة
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($page) && $page == 'Album' ? 'active' : ''?>" href="album.php">
                    <span data-feather="file" class="align-text-bottom"></span>
                    الدروس
                </a>
            </li>
        </ul>

        <?php if($_SESSION['role'] === 1){ ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                <span>الأعدادات</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link <?= isset($page) && $page == 'Users' ? 'active' : ''?>" href="users.php">
                        <span data-feather="users" class="align-text-bottom"></span>
                        المستخدمين
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isset($page) && $page == 'Settings' ? 'active' : ''?>" href="settings.php">
                        <span data-feather="settings" class="align-text-bottom"></span>
                        أعدادات الموقع
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
