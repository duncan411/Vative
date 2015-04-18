<div class="separator"></div>

<footer class="footer footer-big footer-transparent content-info" 
        style="background-image: url('<?= get_template_directory_uri() ?>/images/footer-bg.jpg');" role="contentinfo">

  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                         <div class="form-group">
                            <select name="huge" class="selectpicker" data-style="btn-default btn-fill btn-block" data-menu-style="dropdown-blue">
                               <option value="id">Bahasa Indonesia</option>       
                              <option value="ms">Bahasa Melayu</option>
                              <option value="ca">Català</option>                        
                              <option value="da">Dansk</option>                        
                              <option value="de" selected="">Deutsch</option>                        
                              <option value="en">English</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="huge" class="selectpicker" data-style="btn-default btn-fill btn-block" data-menu-style="dropdown-blue">                            
                              <option value="ARS">ARS</option>                        
                              <option value="AUD">AUD</option>                                         
                              <option value="EUR" selected="">EUR</option>                        
                              <option value="GBP">GBP</option>                        
                              <option value="HKD">HKD</option>                        
                              <option value="ZAR">ZAR</option>  
                            </select>
                        </div>    
                    </div>

                    <div class="col-md-3 col-md-offset-1">
                        <h5 class="title">Company</h5>
                        <nav>
                            <?php  
                                wp_nav_menu([
                                    'menu' => 'primary',  // Menu name
                                    'depth' => -1,
                                    'menu_class' => 'company'
                                ]); 
                            ?>
                        </nav>
                    </div>

                    <div class="col-md-3">
                        <h5 class="title">Company</h5>
                        <nav>
                            <?php  
                                wp_nav_menu([
                                    'menu' => 'primary', // Menu name
                                    'depth' => -1,
                                    'menu_class' => 'company'
                                ]); 
                            ?>
                        </nav>
                    </div>

                    <div class="col-md-3">
                        <h5 class="title">Happy people</h5>
                        <nav class="numbers">
                            <ul>
                                <li>
                                    <h4>13.723 <small>accounts</small></h4>
                                </li>
                                <li>
                                    <h4>55.234 <small>downloads</small></h4>
                                </li>
                                <li>
                                    <h4>99.092 <small>shares</small></h4>
                                </li>
    
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr />
                <div class="social-area text-center"> 
                        <h5>Join us on</h5>
                        <a href="#" class="btn btn-social btn-round">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#"  class="btn btn-social btn-round">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-social btn-round">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        
                        <a href="#" class="btn btn-social btn-round">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
    
                <div class="copyright">
                    &copy; 2015 Vative
                </div>
            </div>
    </div>
</footer>
