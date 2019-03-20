<!doctype html>
<html>
    <head>
        <title>XXX</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1200">
        <link rel = "stylesheet" type = "text/css" href = "<?= $baseurl ?>/a_assets/css/jquery.ui.timepicker.css">
        <link rel="stylesheet" file="text/css" href="<?= $baseurl ?>/a_assets/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href = "<?= $baseurl ?>/a_assets/javascript/choosen/chosen.css">
        <link rel = "stylesheet" type = "text/css" href = "<?= $baseurl ?>/a_assets/css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "<?= $baseurl ?>/a_assets/javascript/DataTables/css/jquery.dataTables.min.css">
        <script src = "<?= $baseurl ?>/a_assets/javascript/jquery.js"></script>
        <script src = "<?= $baseurl ?>/a_assets/javascript/jquery-ui.min.js"></script>
        <script src = "<?= $baseurl ?>/a_assets/javascript/main.js"></script>

        <script src="<?= $baseurl ?>/a_assets/javascript/ckeditor/ckeditor.js"></script>
        <script src="<?= $baseurl ?>/a_assets/javascript/ckeditor/adapters/jquery.js"></script>
        <script src="<?= $baseurl ?>/a_assets/javascript/choosen/chosen.jquery.min.js"></script>
        <script src="<?= $baseurl ?>/a_assets/javascript/DataTables/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            <?php 
                echo "var base = '".$baseurl."';";
            ?>
        </script>
    </head>
    <body class="">
        <div class="save_done">
            <div class="my_save_bord"></div>
            <div class="main_save">
                <h4 id='save_not'>Saved</h4>
                <h4 id='update_not'>Update</h4>
            </div>
        </div>
        <header id="main_head">
            <a href="<?= $baseurl ?>/" class="logo">
                <img class="inline_head_log" src="<?= $baseurl ?>/assets/images/front/Vector.png" alt="">
                <span class="inline_head_log logo_tx"><b>AAMFOS2019.</b>org</span>
            </a>
            <div class='notification'>
                <ul class='main_not_menu'>
                    <li class='dropdown li-not'>
                        <a href="#" class='dropdown-toggle notification-event'>
                            <img class='user_not_img' src='<?= $baseurl ?>/assets/images/user/1.jpg' alt='' />
                            <span id="sign_out_title">Admin</span>
                        </a>
                        <ul class="dropdown_menu">
                            <li class="user-header">
                                <img src="<?= $baseurl ?>/a_assets/images/user/1.jpg" class="img-circle" alt="User Image">
                                <p>Admin</p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
<!--                                    <a href="#" class="buttin_a">Profile</a>-->
                                </div>
                                <div class="pull-right">
                                    <a href="<?= $baseurl ?>/login/logout/" class="buttin_a">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>

