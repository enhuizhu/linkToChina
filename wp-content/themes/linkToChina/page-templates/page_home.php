<?php
/**
 * Template Name: home
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
                           <i class="glyphicon glyphicon-scale"></i> 运费估算
                        </div>

                        <div class="content">
                            
                            <form class="form-inline">
                              
                              <div class="form-group">
                                <label for="companies">
                                    物流公司
                                </label>
                                <select name="companies" id="companies">
                                    <option value="1"> Parcel Force </option>
                                    <option value="2"> EMS </option>
                                    <option value="3"> 比利时邮政 </option>
                                </select>
                              </div>

                              <div class="form-group">
                                  <label for="weight">
                                      重量
                                  </label>
                                  <input type="text" name="weight" id="weight">
                                  kg
                              </div>

                               <div class="form-group">
                                  <label for="width">
                                      长
                                  </label>
                                  <input type="text" name="weight" id="width">
                                  厘米
                              </div>

                              <div class="form-group">
                                  <label for="wide">
                                      宽
                                  </label>
                                  <input type="text" name="weight" id="wide">
                                  厘米
                              </div>

                               <div class="form-group">
                                  <label for="height">
                                      高
                                  </label>
                                  <input type="text" name="weight" id="height">
                                  厘米
                              </div>

                              <div class="row">
                                  <input type="submit" value="估算运费" class="btn btn-danger pull-right">
                              </div>

                            </form>



                        </div>
            
        </div>
       </div>
                    
        <div class="container">
           
                         <div class="block-template">
                        <div class="title">
                            <i class="glyphicon glyphicon-user"></i>关于我们
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