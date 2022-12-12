<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_POST['video_url'])) {
        if (!empty($_POST['video_url'])) {

            $video_url = $_POST['video_url'];

            $stmt = $pdo->prepare('DELETE FROM lessons WHERE video_url = :video_url');
            $stmt->execute([':video_url' => $video_url]);

            if ($stmt->rowCount()) {
                echo 'تم حذف الدرس';
                header('refresh: .9; url= /dashboard/lessons.php');
            }else {
                echo 'لا شئ تم حذفه';
                header('refresh: .9; url= /dashboard/lessons.php');
            }

        } else {
            echo 'برجاء ملئ الحقول المطلوبة';
        }
    }
}else{
    die('يجب ان تكون مسئول لتنفيذ هذه العملية');
}