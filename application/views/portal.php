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
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                
                <!-- Header Carousel -->
                <div id="myCarousel" class="carousel slide">

                    <ol class="carousel-indicators">
                        <?php
                        if($slide->num_rows()>0) {
                            $no = 0;
                            foreach ($slide->result() as $rows) {
                            $cls = "";
                            if($no==0) {
                                $cls = "active";
                            }
                        ?>

                        <li data-target="#myCarousel" data-slide-to="<?php echo $no; ?>" class="<?php echo $cls; ?>"></li>

                        <?php
                            $no++;
                            }
                        } else {
                        ?>
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                        <?php
                        }
                        ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        if($slide->num_rows()>0) {
                            $no = 1;
                            foreach ($slide->result() as $rows) {
                            $cls = "";
                            if($no==1) {
                                $cls = "active";
                            }
                        ?>
                        <div class="item <?php echo $cls ?>">
                            <img src="<?php echo base_url('uploads/slide/'.$rows->slide_file)?>" style="width: 100%;" class="img img-responsive img-slide">
                         </div>
                        <?php
                            $no++;
                            }
                        } else {
                        ?>
                            <div class="item active">
                            <img src="<?php echo base_url('uploads/slide/red.jpg')?>" style="width: 100%;" class="img img-responsive img-slide">
                          </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>

            </div>
            </div>

    </div>

    <!-- Page Content -->
    <div class="container">

        <div class="row" style="padding-top:20px;">


                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 box">
                            <?php
                            if($sambutan) {
                                foreach ($sambutan->result() as $s) {
                            ?>
                                <div class="sambutan">
                                    <h1 class="page-header">
                                        <?php echo $s->title ?>
                                    </h1>
                                    <div class="clearfix" align="justify">
                                    <?php echo $s->body; ?>
                                    </div>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>


                        <div class="col-md-12 col-sm-12" style="margin-top: 40px;">
                            <h1 class="page-header">
                                Berita Terbaru
                            </h1>
                            <?php
                            if ($terbaru) {
                                foreach ($terbaru->result() as $row) {
                            ?>
                            <div class="row list-content clearfix" style="padding-bottom: 20px;">
                                <div class="col-md-4">
                                    <div class="image-container">
                                        <a href="<?php echo linked($row->post_id, $row->title) ?>">
                                            <img style="width: 200px;" src="<?php echo get_image($row->body, $row->image) ?>" alt="<?php echo $row->title ?>">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-8 no-left-padding">
                                    <h4 class="no-margin"><a href="<?php echo linked($row->post_id, $row->title) ?>"><?php echo $row->title ?></a></h4>
                                    <div class="content-meta margin-y-5">
                                        <small><i class="fa fa-calendar"></i> <?php echo convert_tanggal($row->date_publish) ?> </small>
                                        <small class="margin-x-10"><i class="fa fa-eye"></i> Views : <?php echo $row->view ?></small>
                                        <small><i class="fa fa-user"></i> By <a><?php echo $row->user_name ?></a></small>
                                    </div>
                                    <div align="justify">
                                        <?php echo strip_tags(substr($row->body, 0,350))?>..
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>

                            <div class="clearfix padding-y-10">
                                <div class="pull-right"><h4><a href="<?php echo site_url('kategori/kode/'.$row->category_id) ?>" class="more">Berita sebelumnya <i class="fa fa-angle-right"></i></a></h4></div>
                            </div>
                        </div>


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
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h4> <i class="fa fa-fw fa-file"></i> Terpopuler</h4>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    if ($populer) {
                                    $no = 1;
                                        foreach ($populer->result() as $p) {
                                    ?>
                                        <div class="media">
                                            <div class="pull-left">
                                                <span class="num-populer">
                                                    <?php echo $no; ?>.
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">
                                                    <a href="<?php echo linked($p->post_id, $p->title) ?>"><?php echo $p->title ?></a>
                                                </h5>
                                            </div>
                                        </div>
                                    <?php
                                    $no++;
                                        }
                                    }
                                    ?>
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

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <h3><i class="fa fa-picture-o"></i> Galeri</h3>
                        <?php
                        if ($galeri) {
                            foreach ($galeri->result() as $g) {
                        ?>
                                <img style="width: 150px;height: 150px;padding-right: 10px;" class="pull-left img img-responsive" src="<?php echo base_url('uploads/galeri/'.$g->image)?>">
                            
                        <?php
                            }
                        }
                        ?>
                        <div class="row"></div>
                            
                        <br>

                        <div class="pull-left">
                            <a href="<?php echo site_url('galeri'); ?>">
                                Selengkapnya <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </p>
                </div>
                <div class="col-md-4">
                    
                    <h3>
                        <i class="fa fa-phone-square"></i> Kontak Kami
                    </h3>
                        <?php echo $embed_map ?>
                    <p>
                        Alamat : <?php echo $alamat ?>
                    </p>
                    <p>
                        Telp. <?php echo $no_telp ?>
                    </p>
                    <p>
                        Email : <?php echo $mail_site ?>
                    </p>
                    <p>
                        Sosial Media : <br/>
                        Facebook (<?php echo $fb_site ?>) <br/>
                        Twitter (<?php echo $twitter_site ?>)
                    </p>

                </div>
            </div>
        </div>

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
        });
    </script>

</body>

</html>
