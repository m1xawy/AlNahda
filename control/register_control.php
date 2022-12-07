<?php
session_start();
require_once '../config.php';

if (isset($_POST['name']) && isset($_POST['idNumber']) && isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
    if (!empty($_POST['name']) && !empty($_POST['idNumber']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

        $name =  $_POST['name'];
        $id_number = filter_var($_POST['idNumber'], FILTER_VALIDATE_INT);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
        $passwordConfirm = $_POST['passwordConfirm'];

        if (preg_match('/^[a-z0-9-_. ]*$/i', $name)) {
            if (strlen($id_number) == 14) {
                if (strlen($password) >= 8 && strlen($password) <= 32) {
                    if ($passwordConfirm === $password) {

                        $stmt = $pdo->prepare('SELECT * FROM users WHERE id_number = :idNumber');
                        $stmt->execute(['idNumber' => $id_number]);

                        if ($stmt->rowCount()) {
                            echo "الرقم القومي موجود مسبقا";

                        } else {
                            $stmt = $pdo->prepare('INSERT INTO users (`name`, `id_number`, `email`, `password`) VALUES (?, ?, ?, ?)');
                            $stmt->execute([
                                $name,
                                $id_number,
                                $email,
                                password_hash($password, PASSWORD_DEFAULT, ['cost' => 11])
                            ]);
                            if ($stmt->rowCount()) {
                                $_SESSION['loggedIn'] = true;
                                $_SESSION['id_number'] = $id_number;
                                $_SESSION['name'] = $name;
                                $_SESSION['email'] = $email;
                                $_SESSION['role'] = 0;

                                echo 'تم اضافة موظف جديد';
                                header('refresh: .9; url= /index.php');
                            }
                        }
                    } else {
                        echo 'كلمة المرور غير متطابقتان';
                    }
                } else {
                    echo 'كلمة المرور يجب ان تكون اكثر من 8 حروف واقل من 32 حرف';
                }
            } else {
                echo 'الرقم القومي يجب ان يكون 14 رقم';
            }
        } else {
            echo 'أسم المستخدم غير صحيح';
        }
    } else {
        echo 'برجاء ملئ الحقول المطلوبة';
    }
}
