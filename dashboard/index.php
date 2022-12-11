<?php $page = 'Dashboard'; ?>
<?php $title = 'لوحة التحكم'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<div class="container-fluid">
    <div class="row">

        <?php include 'sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">لوحة الادارة</h1>
            </div>

            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark_ border">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">حكمة اليوم,</h1>
                    <p class="lead my-3">العمل عمل واللهو لهو ، ولن تجد احداً يعرف اللهو حقاً إلا إذا كان يعرف العمل حقاً ، الخائب خائب في كل شيء ، في العمل واللعب. - أحمد بهجت</p>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">اجمالي عدد المستخدمين</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">اجمالي عدد المستخدمين المتاحين <br/> فى السجيلات</p><br/>
                            <a href="#" class="stretched-link">انتقل الى السجل</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <h2 class="text-primary p-5 h1 fw-bold">50</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">اجمالي عدد الدروس</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">اجمالي عدد الدروس المتاحة <br/> فى السجيلات</p><br/>
                            <a href="#" class="stretched-link">انتقل الى السجل</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <h2 class="text-primary p-5 h1 fw-bold">50</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include_once 'footer.php'; ?>
