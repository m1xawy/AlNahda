<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_POST['name']) && isset($_POST['idNumber']) && isset($_POST['email']) && isset($_POST['role'])) {
        if (!empty($_POST['name']) && !empty($_POST['idNumber']) && !empty($_POST['email'])) {

            $name = $_POST['name'];
            $id_number = filter_var($_POST['idNumber'], FILTER_VALIDATE_INT);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];
            $role = $_POST['role'];

            if (preg_match('/^[a-z0-9-_. ]*$/i', $name)) {
                if (strlen($id_number) == 14) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) || empty($_POST['email'])) {

                        if (!empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
                            if (strlen($password) >= 8 && strlen($password) <= 32) {
                                if ($passwordConfirm === $password) {
                                    $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 11]);

                                } else {
                                    echo 'كلمة المرور غير متطابقتان';
                                    header('refresh: .9; url= /dashboard/users.php');
                                    die();
                                }
                            } else {
                                echo 'كلمة المرور يجب ان تكون اكثر من 8 حروف واقل من 32 حرف';
                                header('refresh: .9; url= /dashboard/users.php');
                                die();
                            }
                        }else {
                            $stmt = $pdo->prepare('SELECT * FROM users WHERE id_number = :idNumber');
                            $stmt->execute([':idNumber' => $id_number]);

                            if ($stmt->rowCount()) {
                                foreach ($stmt->fetchAll() as $user) {
                                    $password = $user['password'];
                                }
                            }
                        }

                        $stmt = $pdo->prepare('UPDATE users SET name = :name, email = :email, password = :password, role = :role WHERE id_number = :idNumber');
                        $stmt->execute([
                            ':name' => $name,
                            ':email' => $email,
                            ':password' => $password,
                            ':role' => $role,
                            ':idNumber' => $id_number
                        ]);
                        if ($stmt->rowCount()) {
                            echo 'تم تعديل بيانات المستخدم';
                            header('refresh: .9; url= /dashboard/users.php');
                        }else {
                            echo 'لا شئ تم تعديلة';
                            header('refresh: .9; url= /dashboard/users.php');
                        }

                    } else {
                        echo 'اكتب البريد الإلكتروني بشكل صحيح';
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
}else{
    die('يجب ان تكون مسئول لتنفيذ هذه العملية');
}