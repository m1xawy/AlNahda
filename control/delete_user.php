<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_POST['idNumber'])) {
        if (!empty($_POST['idNumber'])) {

            $id_number = filter_var($_POST['idNumber'], FILTER_VALIDATE_INT);

            if (strlen($id_number) == 14) {

                $stmt = $pdo->prepare('DELETE FROM users WHERE id_number = :idNumber');
                $stmt->execute([':idNumber' => $id_number]);

                if ($stmt->rowCount()) {
                    echo 'تم حذف المستخدم';
                    header('refresh: .9; url= /dashboard/users.php');
                }else {
                    echo 'لا شئ تم حذفه';
                    header('refresh: .9; url= /dashboard/users.php');
                }

            } else {
                echo 'الرقم القومي يجب ان يكون 14 رقم';
            }
        } else {
            echo 'برجاء ملئ الحقول المطلوبة';
        }
    }
}else{
    die('يجب ان تكون مسئول لتنفيذ هذه العملية');
}