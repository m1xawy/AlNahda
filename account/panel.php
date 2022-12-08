<?php $page = 'Home'; ?>
<?php $title = 'معلومات الحساب'; ?>
<?php include_once '../head.php'; ?>
<?php include_once '../navbar.php'; ?>

<div class="container py-5">
    <div class="row g-3">
        <div class="col-md-5 col-lg-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">أعدادت الحساب</span>
            </h4>
            <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <li><a class="dropdown-item rounded-2 active" href="/account/panel.php">معلومات</a></li>
                <li><a class="dropdown-item rounded-2" href="/account/change_password.php">تغيير كلمة المرور</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item rounded-2" href="/logout.php">خروج</a></li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">معلومات الحساب</h4>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th scope="row">الاسم:</th>
                    <td><?= $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <th scope="row">البريد الإلكتروني:</th>
                    <td><?= $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <th scope="row">الرقم القومي:</th>
                    <td><?= $_SESSION['id_number']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once '../footer.php'; ?>
