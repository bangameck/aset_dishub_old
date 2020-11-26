<?php 
function template($folder)
{
    if ($folder == 'head') {
        include "_temp/head.php";
    } else if ($folder == 'top_bar') {
        include "_temp/top_bar.php";
    } else if ($folder == 'menu') {
        include "_temp/menu.php";
    }   else if ($folder == 'foot') {
        include "_temp/footer.php";
    }  else if ($folder == 'js') {
        include "_temp/js.php";
    }
}
