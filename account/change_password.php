<?php $page = 'Home'; ?>
<?php $title = 'تغيير كلمة المرور'; ?>
<?php include_once '../head.php'; ?>
<?php include_once '../navbar.php'; ?>

<div class="container py-5">
    <div class="row g-3">
        <div class="col-md-5 col-lg-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">أعدادت الحساب</span>
            </h4>
            <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <li><a class="dropdown-item rounded-2" href="/account/panel.php">معلومات</a></li>
                <li><a class="dropdown-item rounded-2 active" href="/account/change_password.php">تغيير كلمة المرور</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item rounded-2" href="/logout.php">خروج</a></li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">تغيير كلمة المرور</h4>

        </div>
    </div>
</div>

<?php include_once '../footer.php'; ?>
