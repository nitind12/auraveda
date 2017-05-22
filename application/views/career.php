<!-- **Main Container** -->
<div class="main-container">

    <!-- **Content Full Width** -->
    <div class="content content-full-width">
        <div style="clear: both; text-align: center; padding: 10px; color: #ff0000; font-weight: bold; font-size: 20px; "><?php if ($this->session->flashdata('allmessage')) {
    echo $this->session->flashdata('allmessage');
} ?></div>
        <h1 class="title"> <span> Apply Here </span> </h1>
        <p> Please Apply here for the desired job roles, you are eligible for. We are hiring for all departments of Ayurvedic Centre's, Our HR Manager will be in touch with you, for the Telephonic Interview. <strong> You can also send your C.V to "info@auraveda.in"</strong></p>

        <div class="hr_invisible"> </div>

        <div class="column two-third">
            <div id="ajax_message"></div>
            <?php
            $data = array(
                'name' => 'frmCareer_',
                'id' => 'frmCareer_',
                'class' => 'booknow-form',
            );
            ?>
                <?php echo form_open_multipart('wellness/apply', $data); ?>
            <p>
                <label> Post Applied for <span class="required"> * </span> </label>                    
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtPostAppliedFor',
                    'id' => 'txtPostAppliedFor',
                    'required' => 'required'
                );
                $options = array();
                $options['Ayurvedic Doctor [BAMS]'] = 'Ayurvedic Doctor [BAMS]';
                $options['Yoga & Naturopathic Doctor [BNYS]'] = 'Yoga & Naturopathic Doctor [BNYS]';
                $options['Certified Yoga Trainer'] = 'Certified Yoga Trainer';
                $options['Ayurveda Therapist cum Yoga Traine'] = 'Ayurveda Therapist cum Yoga Traine';
                $options['Ayurveda Therapist'] = 'Ayurveda Therapist';
                $options['Centre Admin cum Marketing Executive'] = 'Centre Admin cum Marketing Executive';
                $options['Store Supervisor'] = 'Store Supervisor';
                $options['Business Development Manager'] = 'Business Development Manager';
                $options['Marketing Assistant'] = 'Marketing Assistant';
                $options['Receptionist cum Office Assistant'] = 'Receptionist cum Office Assistant';
                echo form_dropdown($data, $options, '');
                ?> 
            </p>
            <p>
                <label> Full Name <span class="required"> * </span> </label>
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
                <label> Total Experience <span class="required"> * </span> </label>
                <select class="day" id="treatment_day" name="experienceYear" style="width: 20px">
                    <option value="">Year</option>
                    <?php for ($i = 1; $i <= 25; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
                </select>

                <select class="day" id="treatment_month" name="experienceMonth" style="width: 20px">
                    <option value="">Month</option>
                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
                </select>
                <select class="day" id="treatment_year" name="experienceDays" style="width: 20px">
                    <option value="">Days</option>
                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
                </select>
            </p>
            <p>
                <label> Notice Period <span class="required"> * </span> </label>
                <select class="salutation" id="noticePeriod" name="noticePeriod">
                    <option>Joining Could be...</option>
                    <option>Immediately</option>
                    <option>Within 7 Days</option>
                    <option>Within 15 Days</option>
                    <option>Within 1 Month</option>
                    <option>Within 2 Month</option>
                </select>
            </p>
            <p>
                <label> Preferred Location </label>
                <select class="treatment" id="treatment" name="preferredLocation">

                    <option value="Delhi NCR">Delhi NCR</option>
                    <option value="North India">North India</option>
                    <option value="South India">South India</option>
                    <option value=">East India">East India</option>
                    <option value="West India">West India</option>
                    <option value="Any where in India">Any where in India </option>
                    <option value="Abroad">Abroad </option>
                </select>
            </p>
            <p>
                <label> Salary Expectations <span class="required"> * </span> </label>
                <input name="salaryExpectation" type="text" />
            </p>
            <p>
                <label> Attach Your Resume in PDF format</label>
                <input type="file" name="txtUploadResume"/>
            </p>
            <p class="submit">
                <input name="booknow" type="submit" value="Apply" />
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
