<?php $page = 'Register'; ?>
<?php $title = 'انشاء حساب'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<?php
if (isset($_SESSION['loggedIn'])){
    header('Location: index.php');
}
?>
<main>
    <div class="container">

        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>انشاء حساب</h2>
            <!--
            <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
            -->
        </div>

        <div class="row g-3">
            <div class="col-md-7 col-lg-8 m-auto">
                <h4 class="mb-3">انشاء حساب</h4>
                <form class="needs-validation" method="post" action="/control/register_control.php" novalidate_>
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="username" class="form-label">اسم المستخدم</label>
                            <input type="text" class="form-control" id="username" name="name" placeholder="اسم المستخدم" required>
                            <div class="invalid-feedback">
                                اسم المستخدم الخاص بك مطلوب.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">البريد الإلكتروني <span class="text-muted">(اختياري)</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">الرقم القومي</label>
                            <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="" required>
                            <div class="invalid-feedback">
                                يرجى إدخال الرقم القومي الخاص بك.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                يرجى إدخال كلمة المرور صحيحة.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">إعادة إدخال كلمة المرور</label>
                            <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                يرجى إعادة إدخال كلمة المرور صحيحة.
                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">تسجيل</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include_once 'footer.php'; ?>
