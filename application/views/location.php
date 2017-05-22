	<!-- **Main Container** -->
	<div class="main-container">
    
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width"> 
            <div style="clear: both; text-align: center; padding: 10px; color: #ff0000; font-weight: bold; font-size: 20px; "><?php if($this->session->flashdata('allmessage')) { echo $this->session->flashdata('allmessage'); } ?></div>
        	<div class="green-border">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBF4O-qyKNuV64-ckt3XmIVSjz2bQguHKI'></script><div style='overflow:hidden;height:auto;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://indiatvnow.com/'>AURAVEDA</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1aca628afdc6ff30037a68368eae686e459408e2'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(28.539947,77.25203799999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.539947,77.25203799999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Auraveda Wellness Kerala Ayurveda</strong><br>19/2, EPDP Road, Adjacent to "B" Block Gurudwara, Kalkaji, New Delhi<br>110019 New Delhi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            <div class="hr_invisible"> </div>
            
            <div class="column one-third">            	
                <h1> Contact Details </h1>  
                <ul class="contact-details">   
                    <li> <span class="address"> </span> <p align="justify"> 19/2, EPDP Road, Adjacent to "B" Block Gurudwara, Opp to CR Park Main Rd, Kalkaji, New Delhi 110019</p></li>
                    <li> <span class="mail"> </span> <p align="justify"> <a href="#" title=""> info@auraveda.in </a> </p> </li>
                    <li> <span class="phone"> </span> <p align="justify"> 01145049180, +918527008995 </p> </li>                    
                </ul>
            </div>
            
            <div class="column one-third">
                <h1> Working Hours </h1>
               <div class="notice"> <span class="left"> Therapies : </span> <span class="right"> 8am - 8pm </span> </div>
                <div class="notice"> <span class="left"> Dr.Appointment : </span> <span class="right"> 10am - 8pm </span> </div>
                <a href="<?php echo site_url('wellness/book'); ?>" class="big-ico-button red book"> <span> Book an Appointment </span> </a> 
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
     