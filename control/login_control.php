<?php
session_start();
require_once '../config.php';

if (isset($_POST['idNumber'],$_POST['password'])){
    if (!empty($_POST['idNumber']) && !empty($_POST['password'])) {
        $id_number = filter_var($_POST['idNumber'], FILTER_VALIDATE_INT);
        $password = $_POST['password'];

        if (strlen($id_number) == 14) {
            if (strlen($password) >= 8 && strlen($password) <= 32){

                $stmt = $pdo->prepare('SELECT * FROM users WHERE id_number = :idNumber');
                $stmt->execute([':idNumber' => $id_number]);

                if ($stmt->rowCount()){
                    foreach ($stmt->fetchAll() as $user){
                        $id = $user['id'];
                        $name = $user['name'];
                        $id_number = $user['id_number'];
                        $passwordHash = $user['password'];
                        $email = $user['email'];
                        $role = $user['role'];
                    }

                    if (password_verify($password, $passwordHash)){
                        $_SESSION['loggedIn'] = true;
                        $_SESSION['id_number'] = $id_number;
                        $_SESSION['name'] = $name;
                        $_SESSION['email'] = $email;
                        $_SESSION['role'] = $role;
                        $_SESSION['id'] = $id;

                        $stmt = $pdo->prepare('UPDATE users SET last_login = :lastLogin WHERE id_number = :idNumber');
                        $stmt->execute([
                            'lastLogin' => date('Y-m-d H:i'),
                            'idNumber' => $id_number
                        ]);

                        header('refresh: .5; url= /index.php');
                    }else{
                        echo 'خطأ فى البيانات';
                    }
                }else{
                    echo 'خطأ فى البانات';
                }
            }else{
                echo 'كلمة المرور يجب ان تكون اكثر من 8 حروف واقل من 32 حرف';
            }
        }else{
            echo 'الرقم القومي غير صحيح';
        }
    } else {
        echo 'برجاء ملئ الحقول المطلوبة';
    }
}