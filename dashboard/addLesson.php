<?php $page = 'editUser'; ?>
<?php $title = 'اضافة درس'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">اضافة درس</h1>
                </div>

                <div class="row g-3">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3"></h4>
                        <form method="post" action="../control/add_lesson.php" class="needs-validation">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="title" class="form-label">عنوان الدرس</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                                        <div class="invalid-feedback">
                                            اكتب عنوان للدرس الخاص بك.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="video_url" class="form-label">رابط فيديو اليوتيوب</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="video_url" id="video_url" placeholder="">
                                        <div class="invalid-feedback">
                                            اكتب رابط الفيديو الخاص بك.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="exam_url" class="form-label">رابط الأختبار</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="exam_url" id="exam_url" placeholder="">
                                        <div class="invalid-feedback">
                                            اكتب رابط الأختبار.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="memo" class="form-label">تفاصيل الدرس</label>
                                    <div class="input-group has-validation">
                                        <textarea class="form-control" name="memo" id="memo" rows="2" placeholder=""></textarea>
                                        <div class="invalid-feedback">
                                            اكتب تفاصيل الدرس.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">اضافة</button>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
<?php include 'footer.php'; ?>