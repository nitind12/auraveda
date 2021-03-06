<style>
    p{text-align: justify; clear: both}
</style>
<!-- **Main Container** -->
<div class="main-container">

    <!-- **Content Full Width** -->
    <div class="content content-full-width">

        <h1> <?php echo $service_; ?>  </h1>

        <div class="column one-third">
            <?php if($serviceDetails->PIC1_PATH != 'x'){ ?>
                <img src="<?php echo base_url('auraadmin/_assets_/site_images/'.$serviceDetails->PIC1_PATH);?>" alt="<?php echo $serviceDetails->SERVICE;?>" title="<?php echo $serviceDetails->SERVICE;?>" />
            <?php } ?>
            <div class="box-content-with-design">
                <br />
                <!-- Below is for Consulation Includes -->
                <?php if($serviceDetails->SID == 3){ ?>
                    <?php 
                        $includes_ = explode('•', trim($serviceDetails->INCLUDES));
                    ?>
                    <h3> Consultation Includes :</h3>
                    <?php if(count($includes_) > 1){ ?>
                    <ul type="bullet" style="text-align: justify" class="flower-bullet green">
                        <?php for($i=0; $i<count($includes_); $i++){?>
                            <?php if(trim($includes_[$i]) != ''){ ?>
                                <li><?php echo trim($includes_[$i]); ?></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } else { ?>
                    <?php for($i=0; $i<count($includes_); $i++){?>
                        <?php if(trim($includes_[$i]) != ''){ ?>
                            <?php echo trim($includes_[$i]); ?>
                        <?php } ?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
                <!-- Above is for Consulation Includes -->
                <h3> Please Note </h3>
                <?php if($serviceDetails->SID == 15){?>
                <!-- Below is for Duration, time, fee, free, discount or vareity etc. -->
                <table border="0" cellpadding="0" cellspacing="0" class="price-table">
                    <tbody> 
                        <tr>
                            <td class="odd style2"><div align="justify"> Option 1(50min)  </div></td>
                            <td class="even style2"><div align="right"> Rs.1000  </div></td>
                        </tr>
                        <tr>
                            <td class="odd style2"><div align="justify"> Option 2 (1 Hour 15 min)   </div></td>
                            <td class="even style2"><div align="right"> Rs.1200 </div></td>
                        </tr>
                        <tr>
                            <td class="odd style2"><div align="justify"> Option 3 (1 Hour 30 min)  </div></td>
                            <td class="even style2"><div align="right"> Rs.3000  </div></td>
                        </tr>
                    </tbody>
                </table>
                <?php } else {?>
                <table border="0" cellpadding="0" cellspacing="0" class="price-table">
                    <tbody>
                        <?php if($serviceDetails->DURATION != 'x'){?>
                        <tr>
                            <td class="odd style2"><div align="justify"> Duration </div></td>
                            <td class="even style2"><div align="right"><?php echo $serviceDetails->DURATION; ?> </div></td>
                        </tr>
                        <?php } ?>
                        <?php if($serviceDetails->TIME != 'x'){?>
                        <tr>
                            <td class="odd style2"><div align="justify"> Time </div></td>
                            <td class="even style2"><div align="right"><?php echo $serviceDetails->TIME; ?> </div></td>
                        </tr>
                        <?php } ?>
                        <?php if($serviceDetails->FEE != 'x'){?>
                        <tr>
                            <td class="odd style2"><div align="justify"> Fee </div></td>
                            <td class="even style2"><div align="right"><?php echo $serviceDetails->FEE; ?> </div></td>
                        </tr>
                        <?php } ?>
                        <?php if($serviceDetails->FREE_ != 'x'){?>
                        <tr>
                            <td class="odd style2"><div align="justify"> Free </div></td>
                            <td class="even style2"><div align="right"><?php echo $serviceDetails->FREE_; ?> </div></td>
                        </tr>
                        <?php } ?>
                        <?php if($serviceDetails->DISCOUNT_ != 'x'){?>
                        <tr>
                            <td class="odd style2"><div align="justify"> Discount </div></td>
                            <td class="even style2"><div align="right"><?php echo $serviceDetails->DISCOUNT_; ?> </div></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
                <!-- Above is for Duration, time, fee, free, discount or vareity etc. -->

                <!-- Below is for Other treatments as per service category -->
                <br />
                <?php if(count($allservices) > 1){?>
                <h3> Other Treatments </h3>
                <ul class="flower-bullet green">
                    <?php foreach($allservices as $serviceitems){?>
                        <li><a href="<?php echo site_url('wellness/services_we_offer/'.str_replace(' ', '-',$category).'/'.$categid.'/'.$serviceitems->SID); ?>"> <?php echo $serviceitems->SERVICE; ?></a> </li>
                    <?php } ?>
                </ul>
                <?php }  ?>
                <!-- Above is for Other treatments as per service category -->
                <?php if($serviceDetails->SID == 15){?>
                    <?php 
                        $vareity_ = explode('•', trim($serviceDetails->VAREITY));
                    ?>
                    <h3> Varieties </h3>
                    <?php if(count($vareity_) > 1){ ?>
                    <ul type="bullet" style="text-align: justify" class="flower-bullet green">
                        <?php for($i=0; $i<count($vareity_); $i++){?>
                            <?php if(trim($vareity_[$i]) != ''){ ?>
                                <li><?php echo trim($vareity_[$i]); ?></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } else { ?>
                    <?php for($i=0; $i<count($vareity_); $i++){?>
                        <?php if(trim($vareity_[$i]) != ''){ ?>
                            <?php echo trim($vareity_[$i]); ?>
                        <?php } ?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <!-- Below is for Service Detail like image, about, inclusions, benefits -->

        <div class="column two-third last">
        <!-- Below About and Images -->

            <?php 
                $about_ = explode('•', $serviceDetails->ABOUT);
            ?>
            <p>
                <?php if($serviceDetails->PIC2_PATH != 'x'){ ?>
                    <img src="<?php echo base_url('auraadmin/_assets_/site_images/'.$serviceDetails->PIC2_PATH);?>" alt="<?php echo $serviceDetails->SERVICE;?>" title="<?php echo $serviceDetails->SERVICE;?>" />
                <?php } ?>
                <?php for($i=0;$i<count($about_);$i++){ ?>
                    <?php if(trim($about_[$i]) != 'x'){?>
                    <p><?php echo $about_[$i]; ?></p>
                    <?php } ?>
                <?php } ?>
            </p>
        <!-- Above About and Images -->

        <!-- Below Definition(s) -->
        <?php if(trim($serviceDetails->_DEFINE_) != '• x' && trim($serviceDetails->_DEFINE_) != 'x' && trim($serviceDetails->_DEFINE_) != '•x'){ ?>
            <?php 
                $def_ = explode('•', $serviceDetails->_DEFINE_);
            ?>
            <p>
            <?php for($i=0;$i<count($def_);$i++){ ?>
                <?php if(trim($def_[$i]) != ''){ ?>
                    <blockquote style="width:87%; min-height: 40px"> <p><?php echo trim($def_[$i]); ?> </p> </blockquote>
                <?php } ?>
            <?php } ?>
            </p>
        <?php } ?>
        <!-- Above Definition(s) -->
            <p align="justify">
            <?php if(trim($serviceDetails->BENEFITS) != '• x' && trim($serviceDetails->BENEFITS) != 'x' && trim($serviceDetails->BENEFITS) != '•x'){ ?>
            <br />
                Benefits :<br />
        <!-- Below Benefit(s) -->
                <?php 
                    $benefits_ = explode('•', trim($serviceDetails->BENEFITS));
                ?>
                <?php if(count($benefits_) > 1){ ?>
                <ul type="bullet" style="text-align: justify" class="flower-bullet green">
                <?php for($i=0; $i<count($benefits_); $i++){?>
                    <?php if(trim($benefits_[$i]) != ''){ ?>
                        <li><?php echo trim($benefits_[$i]); ?></li>
                    <?php } ?>
                <?php } ?>
                </ul>
                <?php } else { ?>
                    <?php for($i=0; $i<count($benefits_); $i++){?>
                        <?php if(trim($benefits_[$i]) != ''){ ?>
                            <?php echo trim($benefits_[$i]); ?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <!-- Above Benefit(s) -->

        <!-- Below Inclusions(s) -->
            <?php if(trim($serviceDetails->INCLUDES) != '• x' && trim($serviceDetails->INCLUDES) != 'x' && trim($serviceDetails->INCLUDES) != '•x'){ ?>
                <br /> <br />
                <?php if($serviceDetails->SID != 3){ ?>
                    <?php 
                        $includes_ = explode('•', trim($serviceDetails->INCLUDES));
                    ?>
                    Includes :<br />
                    <?php if(count($includes_) > 1){ ?>
                    <ul type="bullet" style="text-align: justify" class="flower-bullet green">
                    <?php for($i=0; $i<count($includes_); $i++){?>
                        <?php if(trim($includes_[$i]) != '' && trim($includes_[$i]) != 'x'){ ?>
                            <li><?php echo trim($includes_[$i]); ?></li>
                        <?php } ?>
                    <?php } ?>
                    </ul>
                    <?php } else { ?>
                    <?php for($i=0; $i<count($includes_); $i++){?>
                        <?php if(trim($includes_[$i]) != ''){ ?>
                            <?php echo trim($includes_[$i]); ?>
                        <?php } ?>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            <!-- Above Inclusions(s) -->
            </p>
            <!-- Above is for Service Detail like image, about, inclusions, benefits -->
            <div class="hr_invisible"> </div>
            <?php if($categid == 4){ ?>
                <ul class="flower-bullet green">
                    <li><a href="<?php echo base_url('assets_/dwlds/Terms&conditions-treatmentpackages.pdf'); ?>" target="_blank"> Terms & Conditions for Heal Your Problem</a></li>
                </ul>
            <?php }else if($categid == 5){?>
            <ul class="flower-bullet green">
                    <li><a href="<?php echo base_url('assets_/dwlds/Terms&conditions-wellnesspackages.pdf'); ?>" target="_blank"> Terms & Conditions for Wellness Therapies</a></li>
                </ul>
            <?php }?>
            <a href="<?php echo site_url('wellness/book'); ?>" class="big-ico-button red book"> <span> Book an Appointment </span> </a>
            <a href="<?php echo site_url('wellness/giftcard'); ?>" class="big-ico-button green leaf"> <span> Gift a Friend </span> </a>
        </div>

        <div class="hr"> </div>
        <div class="clear"> </div>


    </div> <!-- **Content Full Width - End** -->