<div style="clear: both;"></div>
    <section>
        <div class="container">
            <div class="row ">
              <div class="blog-single">
                <h2><?php echo $data[0] -> ptitle; ?></h2><div>
                            <ol class="breadcrumb">
  <li><a href="<?php echo base_url('categories/' . $data[0] -> pcid); ?>">Posted in : <?php echo $data[0] -> cname; ?></a></li>
  <li><a href="<?php echo base_url('post/' . $data[0] -> pid); ?>">On: <?php echo __get_date($data[0] -> pdate, 2); ?></a></li>
</ol>
                        </div>
                <?php echo $data[0] -> pcontent; ?>
              </div>
            </div>
           </div>
    </section>
    <!--./ Request Quote End -->
  