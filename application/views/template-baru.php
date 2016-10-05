<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BPLH Kota Bogor</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="<?php echo base_url('assets/css/image/kotabogor.png') ?>">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>"
                    data-toggle="tooltip" data-placement="bottom" title="<?php echo $name_site; ?> Kota Bogor"
                    >
                    <img class="img img-responsive pull-left" style="margin-top: -5px; width: 25px;" src="<?php echo base_url('assets/css/image/kotabogor.png') ?>">
                    <span style="margin-left: 10px;">
                        BPLH
                    </span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php echo menu_now(); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row" style="padding-top:20px;">

                <div class="col-md-8">
                    <div class="row">

                        <?php $this->load->view($konten); ?>

                    </div>
                    
                </div>

                <div class="col-md-4">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-calendar"></i> Kalender</h4>
                                </div>
                                <div class="panel-body">
                                    
                                    <div id="kalender" data-date="<?php echo date('m-d-Y'); ?>"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-image"></i> Banner</h4>
                                </div>
                                <div class="panel-body">
                                   <?php if($banner) : ?>
                                        <?php foreach ($banner->result() as $b): ?>
                                        <p>
                                            <a href="<?php echo $b->link; ?>" target='_blank'>
                                                <img src="<?php echo base_url('uploads/banner/'.$b->banner_file); ?>" 
                                                    alt="<?php echo $b->title; ?>" width='100%'/>
                                            </a>
                                        </p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

        </div>

        <div class="row padding-y-10"></div>
        

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Hak Cipta &copy;  
                        <?php echo date('Y'); ?>
                        <?php echo $name_site; ?>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
    <script type="text/javascript">
        $(function() {
            $("#kalender").datepicker();
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>
