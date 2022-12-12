<?php $page = 'Lessons'; ?>
<?php $title = 'قائمة الدروس'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">قائمة الدروس</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="addLesson.php" class="btn btn-sm btn-primary">
                            <span data-feather="plus" class="align-text-bottom"></span>
                            اضافة درس جديد
                        </a>
                    </div>
                </div>

                <?php
                $stmt = $pdo->prepare('SELECT * FROM lessons ORDER BY created_at DESC');
                $stmt->execute();

                if ($stmt->rowCount()){
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">الرابط</th>
                                <th scope="col">تاريخ اضافة الدرس</th>

                                <?php if($_SESSION['role'] === 1){ ?>
                                    <th scope="col">تعديلات</th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;
                            foreach ($stmt->fetchAll() as $lesson){
                                ?>

                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $lesson['title'] ?></td>
                                    <td><?= $lesson['video_url'] ?></td>
                                    <td><?= $lesson['created_at'] ?></td>

                                    <?php if($_SESSION['role'] === 1){ ?>
                                        <td>
                                            <a href="deleteLesson.php?id=<?= $lesson['id'] ?>"><span data-feather="trash-2"></span> حذف </a> |
                                            <a href="editLesson.php?id=<?= $lesson['id'] ?>"><span data-feather="edit"></span> تعديل </a>
                                        </td>
                                    <?php } ?>
                                </tr>

                                <?php $i++ ?>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>

                <?php }else{ ?>
                    <div class="alert alert-danger" role="alert">
                        لاتوجد دروس متاحه!
                    </div>
                <?php } ?>
            </main>

        </div>
    </div>
<?php include 'footer.php'; ?>