<?php $page = 'Album'; ?>
<?php $title = 'الفيديوهات'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">مثال الألبوم</h1>
                <p class="lead text-muted">وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">الدعوة الرئيسية للعمل</a>
                    <a href="#" class="btn btn-secondary my-2">عمل ثانوي</a>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            $stmt = $pdo->prepare('SELECT * FROM lessons ORDER BY created_at DESC');
            $stmt->execute();

            if ($stmt->rowCount()){
                ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    foreach ($stmt->fetchAll() as $lesson){
                        ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <iframe class="youtube-video" src="<?= $lesson['video_url'] ?>" width="100%" height="225" allowfullscreen></iframe>

                                <div class="card-body">
                                    <p class="card-text"><?= $lesson['memo'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                        </div>
                                        <small class="text-muted"><?= $lesson['created_at'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }else{ ?>
                <div class="alert alert-danger" role="alert">
                    لاتوجد دروس متاحه!
                </div>
            <?php } ?>
        </div>
    </div>

</main>

<?php include_once 'footer.php'; ?>
