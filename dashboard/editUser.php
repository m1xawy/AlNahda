<?php $page = 'editUser'; ?>
<?php $title = 'تعديل مستخدم'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<?php
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = (int)$_GET['id'];

        $stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);

        if ($stmt->rowCount()) {
            foreach ($stmt->fetchAll() as $user){
                $dbId = $user['id'];
                $dbName = $user['name'];
                $dbIDNumber = $user['id_number'];
                $dbEmail = $user['email'];
                $dbRole = $user['role'];
            }
        }else{
            header('Location: users.php');
        }
    }else{
        header('Location: users.php');
    }
}else{
    header('Location: index.php');
}
?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">تعديل مستخدم</h1>
                </div>

                <div class="row g-3">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3"></h4>
                        <form method="post" action="../control/edit_user.php" class="needs-validation">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">الأسم</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?= $dbName ?>">
                                        <div class="invalid-feedback">
                                            اكتب الاسم الخاص بك.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="idNumber" class="form-label">الرقم القومي</label>
                                    <div class="input-group has-validation">
                                        <input type="hidden" class="form-control" name="idNumber" id="hIDNumber" placeholder="" value="<?= $dbIDNumber ?>">
                                        <input type="text" class="form-control" name="demoIDNumber" id="idNumber" placeholder="" value="<?= $dbIDNumber ?>" disabled>
                                        <div class="invalid-feedback">
                                            الرقم القومي الخاص بك مطلوب.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?= $dbEmail ?>">
                                    <div class="invalid-feedback">
                                        يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                                    <div class="invalid-feedback">
                                        يرجى إدخال كلمة المرور صحيحة.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="passwordConfirm" class="form-label">إعادة إدخال كلمة المرور</label>
                                    <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="">
                                    <div class="invalid-feedback">
                                        يرجى إعادة إدخال كلمة المرور صحيحة.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="passwordConfirm" class="form-label">الصلاحيات</label>
                                    <select class="form-select" name="role" id="role" <?= $dbId === $_SESSION['id'] ? 'disabled' : '' ?>>
                                        <option <?= $dbRole === 1 ? 'selected' : ''?> value="1">مسئول</option>
                                        <option <?= $dbRole === 0 ? 'selected' : ''?> value="0">مستخدم</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        يرجى اختيار الصلاحيات.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">تعديل</button>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
<?php include 'footer.php'; ?>