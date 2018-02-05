<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../public/js/jquery-3.2.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <style>
        .page {
            overflow:hidden;
            min-height:297mm;
            margin-left:auto;
            margin-right:auto;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            overflow:hidden;
            text-align: right;
        }

        .title {
            text-align:center;
            position:relative;
            color: #BB0000;
            font-weight: bold;
        }
        #gv {
            text-align: right;
        }

        .table {
            font-size: 11px;
        }
    </style>
</head>
<body onload="window.print();">
    <div id="page" class="page">
        <div class="header">
            <h6><?php echo date("d/m/Y - H:i:s") . " - Giáo viên phụ trách: Nguyễn Văn A" ?></h6>
        </div>
        <br/>
        <div class="title">
            <h3>Bảng điểm học sinh lớp xxx - Học kì 1 - Năm học: 2017-2018</h3>
            -------oOo-------<br>
            <h5 id='gv'>Giáo viên: Nguyễn Văn A</h5>
        </div>        
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Cột điểm 1</th>
                        <th>Cột điểm 2</th>
                        <th>Cột điểm 3</th>
                        <th>Cột điểm 4</th>
                        <th>Cột điểm 5</th>
                        <th>Cột điểm 6</th>
                        <th>Cột điểm 7</th>
                        <th>Cột điểm 8</th>
                        <th>Điểm trung bình</th>
                        <th>Kết quả</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        for ($i=0; $i < 70; $i++) { 
                            echo '<tr>
                                <td>'.($i+1).'</td>
                                <td>Nguyễn Quang Huy</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>8.5</td>
                                <td>Qua môn</td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>