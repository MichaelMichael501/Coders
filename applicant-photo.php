<?php
require_once __DIR__ . '/process/db.php';
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $imgData = file_get_contents($_FILES['userImage']['tmp_name']);
        $imgType = $_FILES['userImage']['type'];
        $apid=include("process/checking-if-exist.php");
        $sql = @"INSERT INTO `applicant photo`(imageType ,imageData,`Applicant Number`) VALUES(?, ?,'')";
        $statement = $conn->prepare($sql);
        $statement->bind_param('ss', $imgType, $imgData);
        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
    }
   
}
?>