	<!-- **Main Container** -->
	<div class="main-container">
    
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width"> 
        
        	<h1 class="title"> <span> Book Now </span> </h1>
            <p> Book appointments with our ayurvedic doctor, for consultation, health cheackup and lifestyle consultation. You can also book an appointment for treatment sessions - Book Doctor Appointments Online.  <strong>[ Dr.Consultation Fees = Rs.250/-only ]</strong></p>    
            
            <div class="hr_invisible"> </div>
            
            <div class="column two-third">
            	<div id="ajax_message"></div>
            	<form id="booknow-form" action="http://wedesignthemes.com/html/spa-treats/php/booknow.php" method="get" class="booknow-form">
                	<p>
                        <label> First Name <span class="required"> * </span> </label>
                        <input name="fname" type="text" />
                    </p>
                    <p>
                        <label> Last Name <span class="required"> * </span> </label>
                        <input name="lname" type="text" />
                    </p>
                    <p>
                        <label> Gender </label>
                        <span class="gender">
                            <input type="radio" class="radiob1" id="Male" name="Gender" value="Male" />
                            Male
                            <input type="radio" class="Female" id="Female" name="Gender" value="Female" checked="checked" />
                            Female
                        </span>
                    </p>
                    <p>
                        <label> Telephone <span class="required"> * </span> </label>
                        <input name="phone" type="text" />
                    </p>
                    <p>
                        <label> Email <span class="required"> * </span> </label>
                        <input name="email" type="text" />
                    </p>
                    <p>
                        <label> Address </label>
                        <textarea name="address" cols="" rows=""></textarea>
                    </p>
                    <p>
                    	<label> Date of Appointment <span class="required"> * </span> </label>
                        <select class="day" id="treatment_day" name="treatment_day">	
                            <option value="">Day</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
							<option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        
                        <select class="day" id="treatment_month" name="treatment_month">
                            <option value="">Month</option>
                            <option value="1">Jan</option>
                            <option value="2">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
						    <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select>
                        <select class="day" id="treatment_year" name="treatment_year">
                            <option value="">Year</option>
                            <option value="2012">2016</option>                            
                        </select>
                    </p>
                    <p>
                    	<label> Preferred time <span class="required"> * </span> </label>
                        <select class="salutation" id="PreferredTime" name="PreferredTime">
	                        <option>Time</option>
                        	<option>8 AM</option>
                            <option>9 AM</option>
                            <option>10 AM</option>
                            <option>11 AM</option>
                            <option>12 PM</option>
                            <option>01 PM</option>
                            <option>02 PM</option>
                            <option>03 PM</option>
                            <option>04 PM</option>
                            <option>05 PM</option>
                            <option>06 PM</option>
							<option>07 PM</option>
                            <option>08 PM</option>
                      </select>
                    </p>
                    <p>
                    	<label> Appointment Purpose </label> 
                        <select class="treatment" id="treatment" name="treatment">
                            
                            <option value="">Consultation with Doctor 30min</option>
                            <option value="">A Session of Shiro Abhyanga(Head massage)30min</option>
                            <option value="">A Session of Paada Abhyanga(Foot massage)30min</option>
							<option value="">A Session of full body Abhyanga with steam bath 60 min</option>
                            <option value="">A Session of full body Abhyanga 45 min</option>
                            <option value="">A Session of Abhyanga with Shirodhara 90min</option>
                            <option value="">To take the Membership packages</option>
							<option value="">To Plan for a Seasonal detox package</option>                     
                        </select>       
                    </p>
                    <p>
                        <label> No. of Persons <span class="required"> * </span> </label>
                        <input name="persons" type="text" />
                    </p>
                    <p>
                        <label> Special Notes </label>
                        <textarea name="requests" cols="" rows=""></textarea>
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
      