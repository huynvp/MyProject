<?php
    if(isset($_SESSION['user'])) {
        $user_login = $_SESSION['user']['FULL_NAME'];
    }
    else $user_login = "Gest";
    //echo md5('123');
    $title = (isset($this->title)) ? $this->title : 'Hệ thống quản lí trường học';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <!-- My style -->
    <script src="public/js/codejs.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title><?php echo $title ?></title>
    <script>
        $(document).ready(function() {
            var title = '<?php echo $title ?>';
            if(title == 'Trang người dùng')
                $('div.header li#GioiThieu').addClass('active');
            else if(title == 'Đăng nhập')
                $('div.header li#DangNhap').addClass('active');

        });
    </script>
</head>
<body>
    <div class="container-fuild">
        <div class="header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Hệ thống quản lí trường học</h1>
                </div>
            </div>
            <div class="header-menu">
                <!-- Menu do Bootstrap cung cấp có hỗ trợ menu trên di động -->
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../MyWeb">Trang chủ</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li id="GioiThieu"><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Xem điểm</a></li>
                            <li><a href="#">Thông báo</a></li>
                            <li><a href="#">Hình ảnh</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                $menu_user1 = '<li class="dropdown">';
                                $menu_user1 .= '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Người đăng nhập: '.$user_login.'<span class="caret"></span></a>';
                                $menu_user1 .= '<ul class="dropdown-menu">';
                                $menu_user1 .= '<li><a href="#">Thay đổi thông tin</a></li>';
                                $menu_user1 .= '<li><a href="#">Thay đổi mật khẩu</a></li>';
                                $menu_user1 .= '<li><a href="?controller=user&action=logout">Đăng xuất</a></li></ul>';

                                $menu_user2 = '<li id="DangNhap"><a href="?controller=user&action=login"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>';
                                if(isset($_SESSION['user']))
                                    echo $menu_user1;
                                else echo $menu_user2;
                            ?>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Menu Bootstrap -->
            </div>
        </div>        
        <div class="container">
        