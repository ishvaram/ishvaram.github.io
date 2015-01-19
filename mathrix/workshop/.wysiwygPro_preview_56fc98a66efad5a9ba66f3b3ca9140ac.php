<?php
if ($_GET['randomId'] != "mm1sRBoU1rPJAcigwCAFP8cCMteTOeW8qnXL5mVWvS8thEVQseqb67ch8ooSRH7H") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
