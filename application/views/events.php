    <!--./ Social Div End -->
   <div class="general-subhead">
       <h1><?php echo $data[0] -> etitle; ?></h1>
   </div>
     <!--./ Gereral Subhead End -->
    
    <section >
        <div class="container events-detail">
            <div class="row">
                <img src="<?php echo __get_upload_file($data[0] -> ecover, 5); ?>">
            </div>
            <div class="row ">
                <?php echo $data[0] -> econtent; ?>
            </div>
           </div>
    </section>
    <!--./ Request Quote End -->
  