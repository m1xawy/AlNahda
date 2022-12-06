<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">النهضة لمحو الأمية</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page) && $page === 'Home') ? ' active' : '' ?>" aria-current="page" href="/">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page) && $page === 'Album') ? ' active' : '' ?>" href="album.php">الفيديوهات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard/index.html">لوحة التحكم (تجربة)</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-primary me-2" href="login.php">دخول</a>
                    <a class="btn btn-primary" href="register.php">تسجيل</a>
                </div>
            </div>
        </div>
    </nav>
</header>
