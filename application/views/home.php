
    <div id="main-slider">

        <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
<?php foreach ($slideshow as $k => $v) : ?>
                <div class="item <?php echo $k === 0 ? 'active' : ''; ?>">
                    <a target="_blank" href="<?php echo $v -> surl; ?>"><img src="<?php echo __get_upload_file($v -> sfile, 3); ?>" alt="" /></a>
                    <div class="carousel-caption ">
                        <h4 class="back-light"><?php echo $v -> stitle; ?>
                        </h4>
                    </div>
                </div>
<?php endforeach; ?>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
<?php foreach ($slideshow as $k => $v) : ?>
                <li data-target="#carousel-example" data-slide-to="<?php echo $k; ?>" class="<?php echo $k === 0 ? 'active' : ''; ?>"></li>
<?php endforeach; ?>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            <a class="left carousel-control" href="uki1.php.html#carousel-example" data-slide="prev">
                <i class="fa fa-angle-left fa-3x control-icon clr-main"></i>
            </a>
            <a class="right carousel-control" href="uki1.php.html#carousel-example" data-slide="next">
                <i class="fa fa-angle-right fa-3x control-icon clr-main"></i>
            </a>
        </div>

    </div>
    <!--./ Main Slider End -->
    <div id="welocme-note">

        <div class="welcome-div">
            <i class="fa fa-paper-plane-o fa-2x"></i><span>WELCOME GUEST, HOW YOU FEELING ?  </span>
        </div>

    </div>
    <!--./ Welcome Section End -->
    <section id="home-service" style="margin-top:20px;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4  col-sm-4 "  >
                    <i  class="fa fa-desktop fa-5x  icon-round  faa-ring animated"></i>
                    <h4><strong>Responsive Design</strong> </h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-4" >
                    <i class="fa fa-paper-plane-o  fa-5x icon-round  faa-pulse animated"></i>
                    <h4><strong>Easy To Customize</strong> </h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-4" >
                    <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                    <h4><strong>Clean Coding Used </strong></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <!--./ Home Service End -->
    <section id="vedio-sec">
        <div class="container">
            <div class="row pad-top-botm">
                <div class="col-lg-6 col-md-6">
                    <h2>What Is Special About Us ? </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         
                    </p>
                    <button class="btn btn-primary" type="button">
                        Read Full Details <span class="badge">+</span>
                    </button>
                    <br />
                    <br />
                </div>

                <div class="col-lg-6 col-md-6">
                    <iframe class="vedio-style" src="" ></iframe>



                </div>
            </div>
        </div>
    </section>
    <!--./ vedio-sec End -->
    <div class="middle-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 ">
                    <h1>Clients Testimonials</h1>
                    <div id="testimonials" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#testimonials" data-slide-to="0" class=""></li>
                            <li data-target="#testimonials" data-slide-to="1" class=""></li>
                            <li data-target="#testimonials" data-slide-to="2" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                        <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                                            <img src="<?php echo base_url(); ?>assets/img/user.gif" alt="" class="img-u image-responsive" />
                                        </div>
                                        <h5 class="pull-right"><strong class="c-black">Lorem Dolor</strong></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                        <h4><i class="fa fa-quote-left"></i>Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. <i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                                            <img src="<?php echo base_url(); ?>assets/img/user2.png" alt="" class="img-u image-responsive" />
                                        </div>
                                        <h5 class="pull-right"><strong class="c-black">Faucibus luctus</strong></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                        <h4><i class="fa fa-quote-left"></i>Sed ultricies, libero ut adipiscing fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                                            <img src="<?php echo base_url(); ?>assets/img/user.gif" alt="" class="img-u image-responsive" />
                                        </div>
                                        <h5 class="pull-right"><strong class="c-black">Sed ultricies</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ Testimonials End -->
  
    <section id="service-info">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12">
                    <h3 class="clr-main"><strong>OUR SERVICE LIST </strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                    <br />
                    <br />
                </div>
            </div>
            <div class="row pad-top-botm">
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class=" fa fa-folder-open-o fa-4x rotate-icon "></i>

                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Easy To code</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-power-off fa-4x rotate-icon "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Best To Use</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-paper-plane-o fa-4x rotate-icon "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Customize Friendly</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row pad-top-botm ">
                <div class="col-lg-6 col-md-6">
                    <div class="alert alert-info transparent-bk upfront-trans">
                        <i class="fa fa-edit fa-2x "></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      
                    </div>

                    <hr />
                    <iframe src="http://player.vimeo.com/video/18312392" class="vedio-style"></iframe>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-6 col-md-6">

                        <div class="alert alert-success transparent-bk upfront-trans">
                            <i class="fa fa-folder-open-o fa-2x"></i>Lorem ipsum dolor sit amet.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                                              

                    </div>
                    <div class="col-lg-6 col-md-6">

                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border: none; overflow: hidden; width: 235px; height: 258px;"></iframe>

                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="alert alert-info transparent-bk upfront-trans">
                            <i class="fa fa-info fa-2x "></i><b>JUST A  SMALL INFORMATION :  </b>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--./ Service info Section End -->
    <div class="just-stats">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-md-3 ">
                    <div class="stats-div">
                        <i class="fa fa-rocket fa-5x"></i>
                        <h3>3000+</h3>
                        <h4>Projects</h4>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 ">
                    <div class="stats-div">
                        <i class="fa fa-globe fa-5x"></i>
                        <h3>149+</h3>
                        <h4>Countries</h4>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 ">

                    <div class="stats-div">
                        <i class="fa fa-building fa-5x"></i>
                        <h3>250 +</h3>
                        <h4>Offices</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 ">
                    <div class="stats-div">
                        <i class="fa fa-comments-o fa-5x"></i>
                        <h3>1305+</h3>
                        <h4>Clients</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ stats div end -->
      <div id="media-sec">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12" >
                    <div class="text-center">
                        <h3>WHAT MEDIA SAY'S ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                        <br />
                        <br />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                        <small>Consectetur adipiscing elit</small>
                    </blockquote>

                </div>
                <div class="col-lg-6 col-md-6">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                        <small>Consectetur adipiscing elit</small>
                    </blockquote>

                </div>
            </div>

        </div>

    </div>
    <!--./ Media Section End -->
