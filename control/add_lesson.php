<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $_SESSION['role'] === 1){
    if (isset($_POST['video_url']) && isset($_POST['title']) && isset($_POST['memo'])) {
        if (!empty($_POST['video_url']) && !empty($_POST['title']) && !empty($_POST['memo'])) {

            $url = $_POST['video_url'];
            $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            $memo = filter_var($_POST['memo'], FILTER_SANITIZE_STRING);
            $utube = preg_match('/[\\?\\&]v=([^\\?\\&]+)/',$url,$url_match);
            $embed_url = 'https://www.youtube.com/embed/'.$url_match[1];

            $stmt = $pdo->prepare("INSERT INTO lessons (video_url, title, memo)VALUES (:embed_url, :title, :memo)");
            $stmt->execute([':embed_url' => $embed_url, ':title' => $title, ':memo' => $memo]);

            if ($stmt->rowCount()) {
                echo 'تم اضافة درس جديد';
                header('refresh: .9; url= /dashboard/lessons.php');
            }
        } else {
            echo 'برجاء ملئ الحقول المطلوبة';
        }
    }
}else{
    die('يجب ان تكون مسئول لتنفيذ هذه العملية');
}