<?php $page = 'Users'; ?>
<?php $title = 'سجل المستخدمين'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">سجل المستخدمين</h1>

                </div>

                <?php
                    $stmt = $pdo->prepare('SELECT * FROM users ORDER BY role DESC');
                    $stmt->execute();

                    if ($stmt->rowCount()){
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الأسم</th>
                            <th scope="col">الرقم القومي</th>
                            <th scope="col">البريد الاكتروني</th>
                            <th scope="col">الصلاحيات</th>
                            <th scope="col">تاريخ اخر دخول</th>

                            <?php if($_SESSION['role'] === 1){ ?>
                                <th scope="col">تعديلات</th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                            $i = 1;
                            foreach ($stmt->fetchAll() as $user){
                        ?>

                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $user['name'] == NULL ? ' - ' : $user['name'] ?></td>
                            <td><?= $user['id_number'] ?></td>
                            <td><?= $user['email'] == NULL ? ' - ' : $user['email'] ?></td>
                            <td><?= $user['role'] === 1 ? 'مسئول' : 'مستخدم'?></td>
                            <td><?= $user['last_login'] == NULL ? ' - ' : $user['last_login'] ?></td>

                            <?php if($_SESSION['role'] === 1){ ?>
                                    <td>
                                        <a href="deleteUser.php?id=<?= $user['id'] ?>" class="<?= $user['id'] === $_SESSION['id'] ? 'disabled' : '' ?>"><span data-feather="trash-2"></span> حذف </a> |
                                        <a href="editUser.php?id=<?= $user['id'] ?>" class="<?= $user['id'] === $_SESSION['id'] ? 'disabled' : '' ?>"><span data-feather="edit"></span> تعديل </a>
                                    </td>
                            <?php } ?>
                        </tr>

                        <?php $i++ ?>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>

                <?php } ?>
            </main>

        </div>
    </div>
<?php include 'footer.php'; ?>