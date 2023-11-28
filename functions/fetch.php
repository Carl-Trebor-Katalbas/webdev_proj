<?php
    $query = "SELECT * from tblsubject
                LEFT JOIN tblsyllabus
                ON tblsyllabus.subject_id = tblsubject.Subject_ID";
    $result = mysqli_query($dbc, $query);
?>