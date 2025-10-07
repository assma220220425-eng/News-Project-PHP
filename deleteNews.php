<?php
include "connectionOnDataBase.php";
ob_start(); // لتجنّب مشاكل header()

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: view_news.php?deleted=false');
    exit;
}

$sql = "UPDATE newsdata SET deleted = 1 WHERE id_user = $id";
$result = $connection->query($sql);
header('Location: view_news.php?deleted=' . ($result ? 'true' : 'false'));
exit;
