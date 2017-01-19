<!-- **Top-Menu** -->
<div id="top-menu">
    <ul class="menu">
        <li class="<?php if ($menuActive == 1) {echo "current_page_item";} ?>"> <a href="<?php echo site_url('wellness'); ?>" title=""> <span> Its home </span> Home </a>
        </li>
        <li class="<?php if ($menuActive == 2) {echo "current_page_item";} ?>"> <a href="#" title=""> <span> Who we are </span> About </a>
            <ul>
                <li> <a href="<?php echo site_url('wellness/auraveda_at_glance'); ?>" title=""> Auraveda At Glance </a>  </li>
                <li> <a href="<?php echo site_url('wellness/photo_gallery'); ?>" title=""> Photo Gallery </a>  </li>
            </ul>
        </li>
        <li class="<?php if ($menuActive == 3) {echo "current_page_item";} ?>"> <a href="#" title=""> <span> What we offer </span> Services </a>
            <ul>
                <?php foreach($servicemenu as $serviceitem){?>
                <li> <a href="<?php echo site_url('wellness/services_we_offer/'.str_replace(' ', '-',$serviceitem->CATEGORY).'/'.$serviceitem->CATEGID.'/'.$serviceitem->SID_FOR_MENU); ?>" title=""> <?php echo $serviceitem->CATEGORY; ?> </a>  </li>
                <?php } ?>
		<li> <a href="<?php echo site_url('wellness/membership'); ?>" title=""> Membership Packages </a>  </li>
            </ul>
        </li>
        <li class="<?php if ($menuActive == 4) {echo "current_page_item";} ?>"> <a href="#" title=""> <span> Know more </span> Ayurveda </a>
            <ul>
                <li> <a href="<?php echo site_url('wellness/ayurveda_basic_principles'); ?>" title=""> Basic Principles </a>  </li>
                <li> <a href="<?php echo site_url('wellness/ayurvedic_methodology'); ?>" title=""> Ayurvedic Methodology </a>  </li>
                <li> <a href="<?php echo site_url('wellness/panchakarma_role'); ?>" title=""> Role of Panchakarma </a>  </li>
                <li> <a href="<?php echo site_url('wellness/rejuvenation_concept'); ?>" title=""> Concept of Rejuvenation </a>  </li>
                <li> <a href="<?php echo site_url('wellness/therapies_types/1'); ?>" title=""> Types of Therapies </a>  </li>
            </ul>
        </li>
        <li> <a href="#" title=""> <span> What's up </span> Blog </a> </li>
        <li class="<?php if ($menuActive == 5) {echo "current_page_item";} ?>"> <a href="<?php echo site_url('wellness/ayurveda_medicines'); ?>" title=""> <span> Shop Now </span> Medicine </a> </li>
        <li class="<?php if ($menuActive == 6) {echo "current_page_item";} ?>"> <a href="<?php echo site_url('wellness/book'); ?>" title=""> <span> Why the wait </span> Book Now </a> </li>
        <li class="<?php if ($menuActive == 7) {echo "current_page_item";} ?>"> <a href="<?php echo site_url('wellness/career'); ?>" title=""> <span> Join Us </span> Career </a> </li>
        <li class="<?php if ($menuActive == 8) {echo "current_page_item";} ?>"> <a href="<?php echo site_url('wellness/contact'); ?>" title=""> <span> We are here </span> Contact </a> </li>
    </ul>
</div><!-- **Top-Menu - End** -->

<!-- **Logo** -->
<div id="logo">
    <a href="index.html" title=""> <img src="<?php echo base_url('assets_/images/logo.png'); ?>" alt="" title="" /> </a>
</div><!-- **Logo - End** -->
<!-- **Logo** -->

<!-- **Searchform** -->
<form action="#" id="searchform" method="get">
    <fieldset>
        <input name="Search" type="text" onblur="this.value = (this.value == '') ? 'Enter Keyword' : this.value;" onfocus="this.value = (this.value == 'Enter Keyword') ? '' : this.value;" value="Enter Keyword" alt="Search our site" class="text_input" />
        <input name="submit" type="submit" class="button" value="" />
    </fieldset>
</form><!-- **Searchform - End** -->
</div>
</div>

<?php if ($menuActive != 1){?>
<div id="main">
    <!-- **Breadcrumb** -->
    <div class="breadcrumb">
        <div class="container">
            <a href="<?php echo site_url('wellness'); ?>" title=""> Home </a>
            <span class="arrow"> </span>
            <span class="current-crumb"> <?php echo $page_name?> </span>
        </div>  <!-- **Breadcrumb - End** -->           
    </div>
    
<?php }?>