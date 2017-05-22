<!-- **Newsletter** -->
<div id="newsletter">
    <?php if ($this->session->flashdata('_msg_')) { ?>
        <div class="row">
            <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                <?php echo $this->session->flashdata('_msg_'); ?>
            </div>            
        </div>
    <?php } ?>
    <h2> Subscribe to Newsletter </h2>
    <?php
    $data = array(
        'name' => 'frmNewsletter_',
        'id' => 'frmNewsletter_',
    );
    ?>
    <?php echo form_open('wellness/newsletter', $data); ?>
    <?php
    $data = array(
        'type' => 'text',
        'name' => 'txtFirstName',
        'placeholder' => 'Enter Name',
        'id' => 'txtFirstName',
        'required' => 'required'
    );
    echo form_input($data);
    ?>
    <?php
    $data = array(
        'type' => 'text',
        'name' => 'txtEmail',
        'placeholder' => 'Email',
        'pattern' =>"[^@]+@[^@]+\.[a-zA-Z]{2,6}",
        'id' => 'txtFirstName',
        'required' => 'required'
    );
    echo form_input($data);
    echo form_hidden('page', uri_string());
    ?>
    <input name="booknow" type="submit" value="Subscribe" />
    <?php echo form_close(); ?>
</div><!-- **Newsletter - End** -->

</div><!-- **Main Container - End** -->
</div> 
<!-- ** Footer** -->
<div id="footer">
    <style type="text/css">
        .facebookOuter {
            background:none; 
            width:214px; 
            padding:1px;
            //border:1px solid #CCCCCC;
            margin-top:20px;
            margin-right:-10px;
        }
        .facebookOuter h4{
            color:#FFF;
            margin:0;
        }
        .facebookInner {
            background: none;
            width:214px;
            height:245px;
            overflow:hidden;
            //border:1px thin #6699FF;
        }
    </style>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=YourAppIdHere";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="main-container">

        <!-- **Recent Entries** -->
        <div class="column one-fourth">
            <div class="widget widget_recent_entries">
                <h2 class="widgettitle"> <span> Latest Facebook Posts </span> </h2>
                <div class="facebookOuter">
                    <div class="facebookInner">
                        <div class="fb-like-box" 
                             data-width="214" data-height="245" 
                             data-href="https://www.facebook.com/AuravedaWellness/" 
                             data-border-color="#F4F4F4" data-show-faces="true" 
                             data-stream="true" data-header="true">
                        </div>          
                    </div>
                </div>

                <div id="fb-root"></div>

                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script></div>
        </div><!-- **Recent Entries - End** -->

        <!-- **Resources** -->
        <div class="column one-fourth">
            <div class="widget">
                <h2 class="widgettitle"> <span> Resources </span> </h2>
                <ul>
                    <?php
                    $category = "Heal-Your-Problem";
                    $categid = 4;
                    ?>
                    <?php foreach ($allresources as $resourceItem) { ?>
                        <li><a href="<?php echo site_url('wellness/services_we_offer/' . str_replace(' ', '-', $category) . '/' . $categid . '/' . $resourceItem->SID); ?>"> <?php echo $resourceItem->SERVICE; ?> </a> </li>
<?php } ?>
                </ul>
            </div>
        </div><!-- **Resources - End** -->

        <!-- **Testimonials** -->
        <div class="column one-fourth">
            <div class="widget">
                <h2 class="widgettitle"> <span> Testimonials </span> </h2>

                <div class="testimonial-skin-carousel">
                    <ul class="testimonial-carousel">
                        <li>
                            <blockquote> 
                                <div align="justify">“This place was recommended to us when we were looking for a good Ayurvedic centre in Delhi. And it did not disappoint! The Doctor, is knowledgeable and was sensitive to my personal circumstance. The staffs are professional and I felt in safe hands during the treatments. Everything the doctor prescribed was spot on and all in all the treatment was a great success.”   
                                    <span> - Mis Daniela Sinclair, New Zealand </span>  
                                </div>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote> 
                                <div align="justify">“Great professional staff from Kerala. Auraveda Wellness  is  more convenient and cost effective for authentic treatment than going to south India for treatment. It's nothing less than a hospital/clinic.” 
                                    <span> - Mr Raghav Sing, New Delhi </span>
                                </div>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <div align="justify">“Excellent experience and amazing ambiance; amiable and efficient Doctors. Once you visit you will get hooked to it in addition to relief to your problems. Wishing the centre and doctors all the best”  
                                    <span> - Mr Narayanan Srinivasan, New Delhi </span>
                                </div>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote> 
                                <div align="justify">“It's a Traditionally oriented setup completely justifying their purpose. Use of earthy materials in the interiors and local aromatic fragrances, makes the place very serene and relaxing apart from being technically well equipped. The staff here is very cordial and are aware of proper techniques to be used for various ailments. Had a completely satisfying experience.”
                                    <span> - Mis Anisha, New Delhi </span>
                                </div>
                            </blockquote>
                        </li>
                    </ul> 
                </div>

            </div>
        </div><!-- **Testimonials - End** -->

        <!-- **Contact Us** -->
        <div class="column one-fourth last">
            <div class="widget">
                <h2 class="widgettitle"> <span> Contact Us </span> </h2>
                <ul class="contact-details">
                    <li> <span class="mail"> </span> <p align="justify">  info@auraveda.in </p> 
                    </li>
                    <li> <span class="phone"> </span> <p align="justify"> 01145049180, +918527008995 </p> </li>  
                    <li> <span class="address"> </span> <p align="justify"> 19/2, EPDP Road, Adjacent to "B" Block Gurudwara,<br>Opp to CR Park Main Rd, Kalkaji, New Delhi 110019
                        </p> </li>                
                </ul>                                      
            </div>
            <div class="widget social-widget">
                <h2> <span> We're Social </span> </h2>
                <ul>
                    <li> 
                        <a href="https://www.facebook.com/AuravedaWellness/" target='_blank' title=""> 
                            <img src="<?php echo base_url('assets_/images/facebook-hover.png'); ?>" alt="image" title="" />
                            <img src="<?php echo base_url('assets_/images/facebook.png'); ?>" alt="image" title="" />                                
                        </a> 
                    </li>
                    <li> 
                        <a href="https://twitter.com/AuravedaWellnes" target='_blank' title=""> 
                            <img src="<?php echo base_url('assets_/images/twitter-hover.png'); ?>" alt="image" title="" />
                            <img src="<?php echo base_url('assets_/images/twitter.png'); ?>" alt="image" title="" />                                
                        </a> 
                    </li>
                    <li> 
                        <a href="https://plus.google.com/u/0/117890041484200115512" target='_blank' title=""> 
                            <img src="<?php echo base_url('assets_/images/flickr-hover.png'); ?>" alt="image" title="" />
                            <img src="<?php echo base_url('assets_/images/flickr.png'); ?>" alt="image" title="" />                                
                        </a> 
                    </li>
                    <li> 
                        <a href="https://www.youtube.com/watch?v=0Aw4j6Ukq78" target='_blank' title=""> 
                            <img src="<?php echo base_url('assets_/images/youtube-hover.png'); ?>" alt="image" title="" />
                            <img src="<?php echo base_url('assets_/images/youtube.png'); ?>" alt="image" title="" />                                
                        </a> 
                    </li>
                    <li> 
                        <a href="https://www.tripadvisor.in/ShowUserReviews-g304551-d10771541-r420181803-Auraveda_Wellness-New_Delhi_National_Capital_Territory_of_Delhi.html" title="Trip Advisor Auraveda" target="_blank"> 
                            <img src="<?php echo base_url('assets_/images/logo1.png'); ?>" alt="Trip Advisor" title="Trip Advisor" />
                            <img src="<?php echo base_url('assets_/images/logo1.png'); ?>" alt="Trip Advisor" title="Trip Advisor" />
                        </a>
                    </li>
                </ul>  
            </div>
        </div><!-- **Contact Us - End** -->


    </div>
</div><!-- **Footer - End** -->

<!-- **Footer Bottom** -->
<div class="footer-bottom"> 
    <div class="main-container">  
        <div class="column one-half">
            <p> &copy; Auraveda 2017 | All Rights Reserved | <a href="<?php echo base_url('assets_/dwlds/Terms&conditions-Website.pdf'); ?>" target="_blank"> Terms & Conditions</a></p>        
        </div>
        <div class="column one-half last">
            <p>  Developed by: <a href="http://www.teamfreelancers.com" target="_blank">Teamfreelancers</a></p>        
        </div>
    </div>
</div><!-- **Footer Bottom - End** -->

</div><!-- **Main - End**-->


<!-- **jQuery** -->
<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery-1.10.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery-migrate-1.2.1.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery.arctext.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery.jcarousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_/js/responsive-nav.html'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets_/js/jquery.meanmenu.min.html'); ?>" type="text/javascript"></script>

<script type="text/javascript">
                    $(document).ready(function () {
                        $("span.arctext").each(function () {
                            $(this).arctext({radius: $(this).attr('data-radius')});
                        });
                    });
</script>

<script type="text/javascript" src="<?php echo base_url('assets_/js/jquery.nivo.slider.js'); ?>"></script>
<script src="<?php echo base_url('assets_/js/jquery.tipTip.minified.js'); ?>" type="text/javascript"></script>
<script type='text/javascript' src="<?php echo base_url('assets_/js/spa.custom.js'); ?>"></script>
<script src="<?php echo base_url('assets_/js/isotope.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
                    (function () {
                        var _analytics_scr = document.createElement('script');
                        _analytics_scr.type = 'text/javascript';
                        _analytics_scr.async = true;
                        _analytics_scr.src = 'http://wedesignthemes.com/_Incapsula_Resource?SWJIYLWA=2977d8d74f63d7f8fedbea018b7a1d05&amp;ns=2';
                        var _analytics_elem = document.getElementsByTagName('script')[0];
                        _analytics_elem.parentNode.insertBefore(_analytics_scr, _analytics_elem);
                    })();
// ]]>
</script></body>

</html>
