<?php $page = 'Login'; ?>
<?php $title = 'تسجيل الدخول'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<main>
    <div class="container text-center py-5">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>تسجيل الدخول</h2>
            <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
        </div>

        <div class="col-md-4 col-lg-4 m-auto">
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="أسم المستخدم">
                    <label for="floatingInput">أسم المستخدم</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="كلمة المرور">
                    <label for="floatingPassword">كلمة المرور</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me">  تذكرني
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">دخول</button>
            </form>
        </div>
    </div>
</main>

<?php include_once 'footer.php'; ?>
