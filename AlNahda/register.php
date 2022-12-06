<?php $page = 'Register'; ?>
<?php $title = 'انشاء حساب'; ?>
<?php include_once 'head.php'; ?>
<?php include_once 'navbar.php'; ?>

<main>
    <div class="container">

        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>انشاء حساب</h2>
            <p class="lead">فيما يلي مثال على نموذج تم إنشاؤه بالكامل باستخدام عناصر تحكم النموذج في Bootstrap. لكل مجموعة نماذج مطلوبة حالة تحقق يمكن تشغيلها بمحاولة إرسال النموذج دون استكماله.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-7 col-lg-8 m-auto">
                <h4 class="mb-3">انشاء حساب</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">الاسم الأول</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                يرجى إدخال اسم أول صحيح.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">اسم العائلة</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                يرجى إدخال اسم عائلة صحيح.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">اسم المستخدم</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="اسم المستخدم" required>
                                <div class="invalid-feedback">
                                    اسم المستخدم الخاص بك مطلوب.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">البريد الإلكتروني <span class="text-muted">(اختياري)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                يرجى إدخال عنوان بريد إلكتروني صحيح لتصلكم تحديثات الشحن.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 الشارع الأول" required>
                            <div class="invalid-feedback">
                                يرجى إدخال عنوان الشحن الخاص بك.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">عنوان 2 <span class="text-muted">(اختياري)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="شقة 24">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">البلد</label>
                            <select class="form-select" id="country" required>
                                <option value="">اختر...</option>
                                <option>الولايات المتحدة الأمريكية</option>
                            </select>
                            <div class="invalid-feedback">
                                يرجى اختيار بلد صحيح.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">المنطقة</label>
                            <select class="form-select" id="state" required>
                                <option value="">اختر...</option>
                                <option>كاليفورنيا</option>
                            </select>
                            <div class="invalid-feedback">
                                يرجى اختيار اسم منطقة صحيح.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">الرمز البريدي</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                الرمز البريدي مطلوب.
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
