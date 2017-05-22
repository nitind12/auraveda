   
<!-- **Main Container** -->
<div class="main-container">

    <!-- **Content Full Width** -->
    <div class="content content-full-width"> 
        <div style="clear: both; text-align: center; padding: 10px; color: #ff0000; font-weight: bold; font-size: 20px; "><?php if ($this->session->flashdata('allmessage')) {
    echo $this->session->flashdata('allmessage');
} ?></div>
        <h1 class="title"> <span> GIVE US THE DETAILS </span> </h1>
        <p> Buy Gift Cards for your friends, family, relatives or knowns and gift them with the traditional ayurvedic healing &amp; rejuvenation therapies for their healthy lifestyle. Please provide details of the User of this Gift Card, in the form given below. <strong> [ Please Dial : 8527-008-995 for the Available Discounts & Pricing ]</strong></p>    

        <div class="hr_invisible"> </div>

        <div class="column two-third">
            <?php
            $data = array(
                'name' => 'frmGiftCard_',
                'id' => 'frmGiftCard_',
                'class' => 'booknow-form',
            );
            ?>
                <?php echo form_open('wellness/gift_a_card', $data); ?>
            <p>
                <label> My Name is <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtName',
                    'id' => 'txtName',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label> Buying Gift Card For <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtNameForGiftCard',
                    'id' => 'txtNameForGiftCard',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label for="txtGender">Gender</label><br>
                <?php
                $data = array(
                    'type' => 'radio',
                    'required' => 'required',
                    'name' => 'optGender',
                    'id' => 'optMale',
                    'value' => 'M',
                    'checked' => 'checked',
                );
                echo form_input($data);
                ?>
                Male
                <?php
                $data = array(
                    'type' => 'radio',
                    'required' => 'required',
                    'name' => 'optGender',
                    'id' => 'optFemale',
                    'value' => 'F',
                );
                echo form_input($data);
                ?>
                Female
            </p>
            <p>
                <label> Mobile No. <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtClientMobile',
                    'id' => 'txtClientMobile',
                    'pattern' => '[0-9]*',
                    'oninvalid' => "setCustomValidity('Plz enter 10 digit Contact Number')",
                    'onchange' => "try{setCustomValidity('')}catch(e){}",
                    'minlength' => '10',
                    'maxlength' => '10',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label> Email <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'email',
                    'name' => 'txtClientEmail',
                    'id' => 'txtClientEmail',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label> Address</label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtAddress',
                    'id' => 'txtAddress',
                );
                echo form_textarea($data);
                ?>
            </p>
            <p>
                <label> Date of Appointment <span class="required"> * </span></label>
                <?php
                $yr_ = date('Y');
                $mnt_ = date('m');
                $dt_ = date('d') + 1;
                $data = array(
                    'type' => 'date',
                    'name' => 'txtAppointmentDate',
                    'id' => 'txtAppointmentDate',
                    'required' => 'required',
                    'min' => $yr_ . "-" . $mnt_ . "-" . $dt_,
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label>Preferred Time <span class="required"> * </span></label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'preTime',
                    'id' => 'preTime',
                    'required' => 'required'
                );
                $options = array();
                for ($loop1 = 8; $loop1 <= 11; $loop1++) {
                    $options[$loop1 . 'AM'] = $loop1 . ' AM';
                }
                $options['12PM'] = '12 PM';
                for ($loop1 = 1; $loop1 <= 7; $loop1++) {
                    $options[$loop1 . 'PM'] = $loop1 . ' PM';
                }
                echo form_dropdown($data, $options);
                ?>
            </p>
            <p>
                <label>Appointment Purpose <span class="required"> * </span></label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtGift',
                    'id' => 'txtGift',
                    'required' => 'required'
                );
                $options = array();
                $options['A Session of Shiro Abhyanga(Head massage)30min'] = 'A Session of Shiro Abhyanga(Head massage)30min';
                $options['A Session of Paada Abhyanga(Foot massage)30min'] = 'A Session of Paada Abhyanga(Foot massage)30min';
                $options['A Session of full body Abhyanga with steam bath 60 min'] = 'A Session of full body Abhyanga with steam bath 60 min';
                $options['A Session of full body Abhyanga 45 min'] = 'A Session of full body Abhyanga 45 min';
                $options['A Session of Abhyanga with Shirodhara 90min'] = 'A Session of Abhyanga with Shirodhara 90min';
                $options['A session of Shirodhara 60min'] = 'A session of Shirodhara 60min';
                $options['Consultation with Ayurvedic Physician'] = 'Consultation with Ayurvedic Physician';
                $options['A membership package of 1 year validity'] = 'A membership package of 1 year validity';
                $options['A membership package of 6 months validity'] = 'A membership package of 6 months validity';
                $options['A seasonal detox package'] = 'A seasonal detox package';
                $options['Consultation and a course of Panchakarma therapy package'] = 'Consultation and a course of Panchakarma therapy package';
                echo form_dropdown($data, $options, '');
                ?>                
            </p>
            <p>
                <label> No. of Persons <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtNoPerson',
                    'id' => 'txtNoPerson',
                    'pattern' => '[0-9]*',
                    'oninvalid' => "setCustomValidity('Plz enter Person in Number')",
                    'onchange' => "try{setCustomValidity('')}catch(e){}",
                    'minlength' => '1',
                    'maxlength' => '3',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label> Special Notes</label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtSpNotes',
                    'id' => 'txtSpNotes',
                );
                echo form_textarea($data);
                ?>
            </p>
            <p class="submit">
                <input name="booknow" type="submit" value="Book Now" />
            </p>                    
            </form>   
        </div>

        <div class="column one-third last">    
            <div class="booknow-page">
                <h1> Contact Details </h1>  
                <ul class="contact-details">   
                    <li> <span class="address"> </span> <p align="justify"> 19/2, EPDP Road, Adjacent to "B" Block Gurudwara, Opp to CR Park Main Rd, Kalkaji, New Delhi 110019</p> </li>             
                    <li> <span class="mail"> </span> <p align="justify"> <a href="#" title=""> info@auraveda.in </a> </p> </li>
                    <li> <span class="phone"> </span> <p align="justify"> 01145049180, +918527008995  </p> </li>                        
                </ul>
                <h4 class="title"> <span> Working Hours </span> </h4>
                <div class="notice"> <span class="left"> Therapies : </span> <span class="right"> 8am - 8pm </span> </div>
                <div class="notice"> <span class="left"> Dr.Appointment : </span> <span class="right"> 10am - 8pm </span> </div>
                <p align="justify"> <strong> Note: </strong> <b><i>Wednesday is our weekly off.</i></b><br> A prior booking and scheduling has to be done for all specially customized and regular treatment sessions. Call 01145049180 or 8527008995. Your timely arrival is appreciated. </p>

            </div>          
        </div>

    </div> <!-- **Content Full Width - End** -->   	