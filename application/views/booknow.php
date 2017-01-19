<!-- **Main Container** -->
<div class="main-container">

    <!-- **Content Full Width** -->
    <div class="content content-full-width">
    <div style="clear: both; text-align: center; padding: 10px; color: #ff0000; font-weight: bold; font-size: 20px; "><?php if($this->session->flashdata('allmessage')) { echo $this->session->flashdata('allmessage'); } ?></div>
        <h1 class="title"> <span> Book Now </span> </h1>
        <p> Book appointments with our ayurvedic doctor, for consultation, health cheackup and lifestyle consultation. You can also book an appointment for treatment sessions - Book Doctor Appointments Online.  <strong>[ Dr.Consultation Fees = Rs.250/-only ]</strong></p>

        <div class="hr_invisible"> </div>

        <div class="column two-third">
            <?php if ($this->session->flashdata('_msg_')) { ?>
                <div class="row">
                    <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                        <?php echo $this->session->flashdata('_msg_'); ?>
                    </div>
                    <div class="col-sm-12">
                        &nbsp;
                    </div>
                </div>
            <?php } ?>
            <?php
            $data = array(
                'name' => 'frmBooking_',
                'id' => 'frmBooking_',
                'class' => 'booknow-form',
            );
            ?>
            <?php echo form_open('wellness/book_online', $data); ?>
            <p>
                <label> First Name <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtFirstName',
                    'id' => 'txtFirstName',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </p>
            <p>
                <label> Last Name <span class="required"> * </span> </label>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtLastName',
                    'id' => 'txtLastName',
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
                $data = array(
                    'type' => 'date',
                    'name' => 'txtAppointmentDate',
                    'id' => 'txtAppointmentDate',
                    'required' => 'required',
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
                for ($loop1 = 1; $loop1 <= 8; $loop1++) {
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
                    'name' => 'txtPurpose',
                    'id' => 'txtPurpose',
                    'required' => 'required'
                );
                $options = array();
                $options['Consultation with Doctor 30min'] = 'Consultation with Doctor 30min';
                $options['A Session of Shiro Abhyanga(Head massage)30min'] = 'A Session of Shiro Abhyanga(Head massage)30min';
                $options['A Session of Paada Abhyanga(Foot massage)30min'] = 'A Session of Paada Abhyanga(Foot massage)30min';
                $options['A Session of full body Abhyanga with steam bath 60 min'] = 'A Session of full body Abhyanga with steam bath 60 min';
                $options['A Session of full body Abhyanga 45 min'] = 'A Session of full body Abhyanga 45 min';
                $options['A Session of Abhyanga with Shirodhara 90min'] = 'A Session of Abhyanga with Shirodhara 90min';
                $options['To take the Membership packages'] = 'To take the Membership packages';
                $options['To Plan for a Seasonal detox package'] = 'To Plan for a Seasonal detox package';
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
            <?php echo form_close(); ?>
        </div>

        <div class="column one-third last">
            <div class="booknow-page">
                <h1> Contact Details </h1>
                <ul class="contact-details">
                    <li> <span class="address"> </span> <p align="justify"> 19/2, EPDP raod, Adjacent to B-Block <br /> Gurudwara, Opp to, CR Park Main Rd <br /> Block B, Kalkaji, New Delhi 110019 </p> </li>
                    <li> <span class="mail"> </span> <p align="justify"> <a href="#" title=""> info@auraveda.in </a> </p> </li>
                    <li> <span class="phone"> </span> <p align="justify"> 01145049180, +918527008995  </p> </li>
                </ul>
                <h4 class="title"> <span> Working Hours </span> </h4>
                <div class="notice"> <span class="left"> Treatment : </span> <span class="right"> 8am - 8pm </span> </div>
                <div class="notice"> <span class="left"> Dr.Appointment : </span> <span class="right"> 10am - 8pm </span> </div>
                <p align="justify"> <strong> Note: </strong> Wednesday is our weekly off. For special urgency's or specially customized, regular treatments only, you can take appointments in advance. </p>

            </div>
        </div>

    </div> <!-- **Content Full Width - End** -->
