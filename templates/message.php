<?php
    if (Session::exists('success')) {
        echo '<span class=\"msg success\"> ' . Session::message('success') . "</span>";
    }
?>
