<?php $page = 'Home'; ?>
<?php $title = 'لوحة التحكم'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home" class="align-text-bottom"></span>
                            لوحة القيادة
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file" class="align-text-bottom"></span>
                            الطلبات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            المنتجات
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>عنوان القسم</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>بيانات</td>
                        <td>عشوائية</td>
                        <td>تثري</td>
                        <td>الجدول</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>تثري</td>
                        <td>مبهة</td>
                        <td>تصميم</td>
                        <td>تنسيق</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php include_once 'footer.php'; ?>
