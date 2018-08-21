
   
    <div id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" id="about-ftr">
                    <i class="fa fa-building fa-2x"></i>
                    <span>A Small Introduction</span>
                    <small>replace this dummy text with your text</small>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Praesent suscipit sem vel ipsum elementum venenatis. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Praesent suscipit sem vel ipsum elementum venenatis.
                     
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Praesent suscipit sem vel ipsum elementum venenatis.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <i class="fa fa-paper-plane-o fa-2x"></i>
                    <span>From the blog</span>
                    <small>replace this dummy text with your text</small>
                    <div id="blog-footer-div">
                        <?php
                        $posts = __get_last_posts();
                        foreach ($posts as $key => $value) {
                        ?>
                        <div class="media">
                            <div class="pull-left">
                                <img src="<?php echo __grep_image_url($value -> pcontent); ?>" class="img-circle" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="<?php echo base_url('post/' . $value -> pid); ?>"><?php echo $value -> ptitle; ?></a></span>
                                <small class="muted">Posted <?php echo __get_date($value -> pdate, 2); ?></small>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <i class="fa fa-sliders fa-2x"></i>
                    <span>Our location</span>
                    <small>replace this dummy text with your text</small>
                    234/90, Newyork Street , USA
                    <br />
                    Call: 456-0980-0000
                     <br />
                    mail: info@domain.com
                    <br />
                    <br />
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email" required />
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Subdcribe!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         </div>

    <!--./ footer-sec  End -->
    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    &copy; <?php echo date('Y'); ?> All rights reserved
                </div>
            </div>

        </div>
    </div>
    <!--./ footer-end End -->
    <!--  Jquery Core Script -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <!--  Custom Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
   
</body>
</html>
