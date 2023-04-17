<?php
function redirect($url, $message="", $delay=0) { 
echo "<meta http-equiv='refresh' content='$delay;URL=$url'>"; 
if (!empty($message)) echo "<div style='font-family: Arial, Sans-serif;
font-size: 14pt;' align=center>$message</div>"; 
exit; 
} 
include '../db/ketnoi.php';
$delete = "delete from theloai where id_tl='{$_GET['madm']}'";
$del = mysqli_query($con,$delete);
if ($del)
    {
        redirect ("trang1.php?act=dm", "Xóa danh mục thành công. ", 1);
    }
    else
        echo "Xóa danh mục thất bại";
?>
