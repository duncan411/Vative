<div class="card card-horizontal">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="image" style="background-image: url(file:///C:/wamp/www/x_get_shit_done_pro_html_1.2/x_get_shit_done_pro_html_1.2/HTML/assets/img/blog_1.png); background-size: cover; background-position: 50% 50%;">
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>                             
                                        <div class="filter filter-azure">
                                            <button type="button" class="btn btn-neutral btn-round">
                                                <i class="fa fa-heart"></i> Recommend
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="content">
                                       <p class="category text-info">
                                            <i class="fa fa-trophy"></i> <?php the_category(' '); ?> 
                                        </p>
    
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="title"><?php the_title(); ?></h4>
                                        </a>
                                        <a href="#">
                                            <p class="description"><?php the_excerpt_rss(); ?></p>
                                        </a>
                                         <div class="footer">
                                             <?php get_template_part('templates/entry-meta'); ?>
                                            <div class="stats">
                                                <a href="#">
                                                   <i class="fa fa-male"></i> <p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
                                                </a>
                                            </div>
                                            <div class="stats">
                                              <a href="#">
                                                <i class="fa fa-comments"></i> 23 Comments
                                              </a>
                                            </div>
                                            <div class="stats">
                                               <a href="#">
                                               <i class="fa fa-clock-o"></i>  <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
                                               </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

 