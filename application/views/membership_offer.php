<!-- **Main Container** -->
<div class="main-container">

    <!-- **Content Full Width** -->
    <div class="content content-full-width">

        <h1>Choose Your Packages </h1>

        <div class="column one-third">
            <img src="<?php echo base_url('assets_/images/post-images/postfract1.jpg'); ?>" alt="" title="" />
            <div class="box-content-with-design">
                <h3> Please Note </h3>

                <table border="0" cellpadding="0" cellspacing="0" class="price-table">
                    <tbody>
                        <tr>
                            <td class="odd style2"><div align="justify"> Duration </div></td>
                            <td class="even style2"><div align="right"> 1.00 - 1.30 hrs  </div></td>
                        </tr>
                        <tr>
                            <td class="odd style2"><div align="justify"> Time  </div></td>
                            <td class="even style2"><div align="right"> 2 to 4 weeks </div></td>
                        </tr>
                        <tr>
                            <td class="odd style2"><div align="justify"> Fee </div></td>
                            <td class="even style2"><div align="right"> Rs.1500 to 2500  </div></td>
                        </tr>
                        <tr>
                            <td class="odd style2"><div align="justify"> Discounts </div></td>
                            <td class="even style2"><div align="right"> 25% - 45%  </div></td>
                        </tr>
                    </tbody>
                </table>          <br />  <br /> <br />  

                <?php if(count($allservices) > 1){?>
                <h3> Other Packages </h3>
                <ul class="flower-bullet green">
                    <?php foreach($allservices as $serviceitems){?>
                        <li><a href="<?php echo site_url('wellness/services_we_offer/'.str_replace(' ', '-',$category).'/'.$categid.'/'.$serviceitems->SID); ?>"> <?php echo $serviceitems->SERVICE; ?></a> </li>
                    <?php } ?>
                </ul>
                <?php }  ?>

            </div>
        </div>

        <div class="column two-third last">
            <img src="<?php echo base_url('assets_/images/Packages.jpg'); ?>" alt="s2" />      <br />   <br />
            <p align="justify"> Auraveda wellness therapy packages offers 6 months & 12 months membership for our clients. These memberships include vouchers for the treatments and free consultations. Vouchers can also be gifted to your family members, friends & relatives.</p>
            <p>Click to know more</p>
            <p><a href="<?php echo base_url('assets_/dwlds/6monthsMembershipPackage.pdf'); ?>" class="big-ico-button green leaf"> <span> Six months Packages </span> </a> </p>
            <p><a href="<?php echo base_url('assets_/dwlds/MembershipAnnualpackages2pages.pdf'); ?>" class="big-ico-button green leaf"> <span> One Year Packages </span> </a> </p>
            <p><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /></p>
            <a href="booknow.html" class="big-ico-button red book"> <span> Book an Appointment </span> </a>
            <a href="giftcard.html" class="big-ico-button green leaf"> <span> Gift a Friend </span> </a> </p>
        </div>
    </div>