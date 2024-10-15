<?php
    session_start();

    if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
    }
    header("Location: /Music Website/index.php");
    die;
?>
<body>
    <button type=''>Log Out</button>
</body>