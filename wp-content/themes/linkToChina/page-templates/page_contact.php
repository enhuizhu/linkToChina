<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage link to china
 * @since link to china 1.0
 */
?> 

 <?php get_header(); ?>
            <div class="container">
           
                         <div class="block-template">
                        <div class="title">
                            <i class="glyphicon glyphicon-envelope"></i>联系我们
                        </div>

                        <div class="content">
                            <div>
                                
                              <?php
                                  $post = get_post();
                                  echo $post->post_content;
                              ?>


                            </div>
                            
                        </div>


                    </div>             
          
        </div>
 <?php get_footer(); ?>