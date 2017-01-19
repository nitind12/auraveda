	<!-- **Main Container** -->
	<div class="main-container">
    
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width"> 
            <div style="clear: both; text-align: center; padding: 10px; color: #ff0000; font-weight: bold; font-size: 20px; "><?php if($this->session->flashdata('allmessage')) { echo $this->session->flashdata('allmessage'); } ?></div>
        	<div class="green-border"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.9922821590644!2d77.24984931449274!3d28.539951695017166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3d757fede37%3A0x90f33258a8795250!2sAuraveda+Wellness+Kerala+Ayurveda+Center%2C+Kalkaji%2C+New+Delhi!5e0!3m2!1sen!2sin!4v1466832681631" width="930" height="340" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
            
            <div class="hr_invisible"> </div>
            
            <div class="column one-third">            	
                <h1> Contact Details </h1>  
                <ul class="contact-details">   
                    <li> <span class="address"> </span> <p align="justify"> 19/2 EPDP raod, Adjacent to <br />  "B" Block Gurudwara, opp to, CR Park <br /> Main Rd Block B, Kalkaji, New Delhi 110019 </p> </li>             
                    <li> <span class="mail"> </span> <p align="justify"> <a href="info@auraveda.in" title=""> info@auraveda.in info.auraveda@gmail.com </a> </p> </li>
                    <li> <span class="phone"> </span> <p align="justify"> 01145049180, +918527008995 </p> </li>                    
                </ul>
            </div>
            
            <div class="column one-third">
                <h1> Working Hours </h1>
               <div class="notice"> <span class="left"> Treatment : </span> <span class="right"> 8am - 8pm </span> </div>
                <div class="notice"> <span class="left"> Dr.Appointment : </span> <span class="right"> 10am - 8pm </span> </div>
                <a href="booknow.html" class="big-ico-button red book"> <span> Book an Appointment </span> </a> 
            </div>
            
            <div class="column one-third last">
            	<div class="enquiry-form">
                    <h1> Enquiry </h1>
                    <div id="ajax_message"></div>
    				 <form name="frmcontact" id="frmcontact" action="<?php echo site_url('wellness/contactus'); ?>" method="post">
                        <input id="txtname" name="txtname" type="text" value="Name"
                            onblur="this.value=(this.value=='') ? 'Name' : this.value;" onfocus="this.value=(this.value=='Name') ? '' : this.value;" />
                        <input id="txtemail" name="txtemail" type="text" value="Email" 
                            onblur="this.value=(this.value=='') ? 'Email' : this.value;" onfocus="this.value=(this.value=='Email') ? '' : this.value;" />
                        <textarea id="txtmessage" name="txtmessage"
                            onblur="this.value=(this.value=='') ? 'Message' : this.value;" onfocus="this.value=(this.value=='Message') ? '' : this.value;" cols="" rows="">Message</textarea>
                        <input name="submit" id="send" type="submit" value="Message" />
                    </form>
                </div>
            </div>
        </div> <!-- **Content Full Width - End** -->   	
     