<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.6.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/page_khoa-hoc.css">
    <script src="js/style.js" type="text/javascript"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

</head>
<body>
    <!-- BEGIN HEADER -->
    <?php include('header.php'); ?>
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->

    <div class="s-section-1">
        <div class="container">
            <div class="c-headline-3 h2 ht-mrt30">
                <h2 class="c_name"><a href=""><i class="fa fa-folder-o" aria-hidden="true"></i><span>OFFLINE LEVEL 5</span></a></h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="heading-1">Documents</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="javascript:;" class="b_name">Listening</a>
                                <div class="b_cta">
                                    <a href="javascript:;" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="javascript:;" class="download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="javascript:;" class="b_name">Reading update</a>
                                <div class="b_cta">
                                    <a href="javascript:;" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="javascript:;" class="download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="javascript:;" class="b_name">Listening update</a>
                                <div class="b_cta">
                                    <a href="javascript:;" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="javascript:;" class="download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="heading-1">Exercises</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="exercises-danh-sach.php" class="b_name">Reading</a>
                                <div class="b_cta">
                                    <a href="exercises-danh-sach.php" class="view"><span>Chi tiết</span> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="exercises-danh-sach.php" class="b_name">Listening</a>
                                <div class="b_cta">
                                    <a href="exercises-danh-sach.php" class="view"><span>Chi tiết</span> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="exercises-danh-sach.php" class="b_name">Speaking</a>
                                <div class="b_cta">
                                    <a href="exercises-danh-sach.php" class="view"><span>Chi tiết</span> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="b-card-69">
                                <a href="exercises-danh-sach.php" class="b_name">Writing</a>
                                <div class="b_cta">
                                    <a href="exercises-danh-sach.php" class="view"><span>Chi tiết</span> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php include('footer.php'); ?>
    <!-- END FOOTER -->
</body>
</html>