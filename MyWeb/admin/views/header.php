<?php
    if(isset($_SESSION['admin'])) {
        $admin_login = $_SESSION['admin']['NAME'] . ": " . $_SESSION['admin']['FULL_NAME'];
    }
    else $admin_login = "Gest";
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
    <script src="../public/js/jquery-3.2.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

    <!-- My style -->
    <script src="../public/js/codejs.js"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?php echo $title ?></title>
    <script>
        $(document).ready(function() {
            var title = '<?php echo $title ?>';
            if(title == 'Quản lí giáo viên')
                $('div.header li#GiaoVien').addClass('active');
            if(title == 'Quản lí học sinh')
                $('div.header li#HocSinh').addClass('active');
            if(title == 'Đăng nhập')
                $('div.header li#DangNhap').addClass('active');
            if(title == 'Quản lý')
                $('div.header li#QuanLy').addClass('active');
        });
    </script>
</head>
<body>
    <div class="container-fuild">
        <div class="header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Hệ thống quản lí trường học - Khu vực admin, giáo viên</h1>
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
                        <a class="navbar-brand" href="?controller=index">Trang chủ</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <?php
                                if(isset($_SESSION['admin']) && $_SESSION['admin']['TYPE'] == 1) {
                                    echo '<li id="QuanLy"><a href="?controller=manage">Quản lý</a></li>';
                                    echo '<li id="GiaoVien"><a href="?controller=teacher">Giáo viên</a></li>';
                                    echo '<li id="HocSinh"><a href="?controller=student">Học sinh</a></li>';
                                    echo '<li id="MonHoc"><a href="?controller=course">Môn học</a></li>';
                                }
                            ?>
                            <li><a href="#">Điểm số</a></li>
                            <li><a href="#">Lớp học</a></li>
                            <li><a href="#">Điểm danh</a></li>
                            <li><a href="#">Thông báo</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                $menu_admin1  = '<li class="dropdown">';
                                $menu_admin1 .= '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-admin"></span> '.$admin_login.'<span class="caret"></span></a>';
                                $menu_admin1 .= '<ul class="dropdown-menu">';
                                $menu_admin1 .= '<li><a href="#">Thay đổi thông tin</a></li>';
                                $menu_admin1 .= '<li><a href="#">Thay đổi mật khẩu</a></li>';
                                $menu_admin1 .= '<li><a href="?controller=admin&action=logout">Đăng xuất</a></li></ul>';

                                $menu_admin2 = '<li id="DangNhap"><a href="?controller=admin&action=login"><span class="glyphicon glyphicon-admin"></span> Đăng nhập</a></li>';
                                if(isset($_SESSION['admin']))
                                    echo $menu_admin1;
                                else echo $menu_admin2;
                            ?>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Menu Bootstrap -->
            </div>
        </div>        
        <div class="container">
        