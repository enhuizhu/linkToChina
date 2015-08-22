<?php get_header(); ?>
            <div class="container">
           
                         <div class="block-template">
                        <div class="title">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            <?php echo get_the_title(); ?>
                        </div>

                        <div class="content">
                         
                            <?php
                                $post = get_post();
                                echo $post->post_content;
                            ?>

                        </div>


                    </div>             
          
        </div>
 <?php get_footer(); ?>