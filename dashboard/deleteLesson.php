<?php $page = 'deleteLesson'; ?>
<?php $title = 'حذف درس'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<?php
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = (int)$_GET['id'];

        $stmt = $pdo->prepare('SELECT * FROM lessons WHERE id = :id');
        $stmt->execute(['id' => $id]);

        if ($stmt->rowCount()) {
            foreach ($stmt->fetchAll() as $lesson){
                $dbId = $lesson['id'];
                $dbTitle = $lesson['title'];
                $dbUrl = $lesson['video_url'];
                $dbDate = $lesson['created_at'];
            }
        }else{
            header('Location: lessons.php');
        }
    }else{
        header('Location: lessons.php');
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
                    <h1 class="h2">حذف درس</h1>
                </div>

                <div class="row g-3">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3"></h4>
                        <form method="post" action="../control/delete_lesson.php" class="needs-validation">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="title" class="form-label">عنوان الدرس</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="" value="<?= $dbTitle ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="video_url" class="form-label">رابط فيديو اليوتيوب</label>
                                    <div class="input-group has-validation">
                                        <input type="hidden" class="form-control" name="video_url" id="video_url" placeholder="" value="<?= $dbUrl ?>">
                                        <input type="text" class="form-control" name="demo_video_url" id="demo_video_url" placeholder="" value="<?= $dbUrl ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="created_at" class="form-label">تاريخ اضافة الدرس</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="created_at" id="created_at" placeholder="" value="<?= $dbDate ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <a href="lessons.php" class="btn btn-secondary" type="submit">الغاء</a>
                            <button class="btn btn-primary" type="submit">حذف</button>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
<?php include 'footer.php'; ?>