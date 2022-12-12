<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_POST['video_url']) && isset($_POST['title']) && isset($_POST['memo'])) {
        if (!empty($_POST['video_url']) && !empty($_POST['title']) && !empty($_POST['memo'])) {

            $video_url = $_POST['video_url'];
            $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            $memo = filter_var($_POST['memo'], FILTER_SANITIZE_STRING);

            $stmt = $pdo->prepare('UPDATE lessons SET title = :title, memo = :memo WHERE video_url = :video_url');
            $stmt->execute([':title' => $title, ':memo' => $memo, ':video_url' => $video_url]);

            if ($stmt->rowCount()) {
                echo 'تم تعديل الدرس';
                header('refresh: .9; url= /dashboard/lessons.php');
            }else {
                echo 'لا شئ تم تعديلة';
                header('refresh: .9; url= /dashboard/lessons.php');
            }

        } else {
            echo 'برجاء ملئ الحقول المطلوبة';
        }
    }
}else{
    die('يجب ان تكون مسئول لتنفيذ هذه العملية');
}