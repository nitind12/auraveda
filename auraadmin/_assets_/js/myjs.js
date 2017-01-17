$(function(){

	$('#old_pwd').focus(function(){$('#msg_').html('');});
	$('#new_pwd').focus(function(){$('#msg_').html('');});
	$('#new_re-pwd').focus(function(){$('#msg_').html('');});
	
	$('#changepwdbutt').click(function(){
		if($.trim($('#old_pwd').val()) == ''){
			$('#msg_').html("X: Please mention your old password");
		} else if($.trim($('#new_pwd').val()) == ''){
			$('#msg_').html("X: New password should not be left blank.");
		} else if($.trim($('#new_pwd').val()) != $.trim($('#new_re-pwd').val())){
			$('#msg_').html("X: Please confirm the new password correctly.");
		} else {
			url_ = site_url_ + '/c_pwd/changepwd';
			data_ = $('#frm_cpwd').serialize();

			$('#msg_').html('<span style="color: #0000ff">Loading...</span>');
			
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					if(data == "All three chances over."){
						$('#fullform').css({'padding':'20px'});
						$('#fullform').html("Please contact administrator to reset your password.<br /><a href='"+site_url_+"/dashboard/log__out'>Logout</a>");
					} else {
						if(data == 'good'){
							good = '<span style="padding: 5px; border-radius: 5px; background: #00AA00; color: #ffffff;"> Password changed successfully </span><br /><br />[ <a href="'+site_url_+'/login">Click here login again</a> ]';
							$('#fullform').css({'padding':'20px'});
							$('#fullform').html(good);	
						}
					}
					$('#frm_cpwd')[0].reset();
				}
			});
		}
	});

	$('#chkStatus').click(function(){ 
		if($('#chkStatus').is(':checked')){
			$('#txtStatus').val(1);
		} else {
			$('#txtStatus').val(0);
		}
	});

	$('#cmbServiceCategory').change(function(){
		url_ = site_url_ + '/service/fetchServices';
		data_ = "categid="+$('#cmbServiceCategory').val();
		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			success: function(data){
				$('#cmbService').html(data);
			}
		});
	})
	//$('#cmbService').change(function(){
		//if($('#cmbService').val() == 'new'){
			//$('#service_click_modal_button').click();
		//}
	//});


	// For About Service ----------------------------------------------------------
		$("#txtAboutService").focus(function() {
		    if(document.getElementById('txtAboutService').value === ''){
		        document.getElementById('txtAboutService').value +='• ';
			}
		});
		$("#txtAboutService").blur(function(){
			if($.trim(document.getElementById('txtAboutService').value) == '•'){
		        document.getElementById('txtAboutService').value ='';
			}
		});
		$("#txtAboutService").keyup(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        document.getElementById('txtAboutService').value +='• ';
			}
			var txtval = document.getElementById('txtAboutService').value;
			if(txtval.substr(txtval.length - 1) == '\n'){
				document.getElementById('txtAboutService').value = txtval.substring(0,txtval.length - 1);
			}
		});
	// ------------------------------------x----------------------------------------

	// For Definition --------------------------------------------------------------
		$("#txtDefine").focus(function() {
		    if(document.getElementById('txtDefine').value === ''){
		        document.getElementById('txtDefine').value +='• ';
			}
		});
		$("#txtDefine").blur(function(){
			if($.trim(document.getElementById('txtDefine').value) == '•'){
		        document.getElementById('txtDefine').value ='';
			}
		});
		$("#txtDefine").keyup(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        document.getElementById('txtDefine').value +='• ';
			}
			var txtval = document.getElementById('txtDefine').value;
			if(txtval.substr(txtval.length - 1) == '\n'){
				document.getElementById('txtDefine').value = txtval.substring(0,txtval.length - 1);
			}
		});
	// ------------------------------------x----------------------------------------

	// For Inclusions --------------------------------------------------------------
		$("#txtIncludes").focus(function() {
		    if(document.getElementById('txtIncludes').value === ''){
		        document.getElementById('txtIncludes').value +='• ';
			}
		});
		$("#txtIncludes").blur(function(){
			if($.trim(document.getElementById('txtIncludes').value) == '•'){
		        document.getElementById('txtIncludes').value ='';
			}
		});
		$("#txtIncludes").keyup(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        document.getElementById('txtIncludes').value +='• ';
			}
			var txtval = document.getElementById('txtIncludes').value;
			if(txtval.substr(txtval.length - 1) == '\n'){
				document.getElementById('txtIncludes').value = txtval.substring(0,txtval.length - 1);
			}
		});
	// -------------------------------------x---------------------------------------

	// For Benefits ----------------------------------------------------------------
		$("#txtBenefits").focus(function() {
		    if(document.getElementById('txtBenefits').value === ''){
		        document.getElementById('txtBenefits').value +='• ';
			}
		});
		$("#txtBenefits").blur(function(){
			if($.trim(document.getElementById('txtBenefits').value) == '•'){
		        document.getElementById('txtBenefits').value ='';
			}
		});
		$("#txtBenefits").keyup(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        document.getElementById('txtBenefits').value +='• ';
			}
			var txtval = document.getElementById('txtBenefits').value;
			if(txtval.substr(txtval.length - 1) == '\n'){
				document.getElementById('txtBenefits').value = txtval.substring(0,txtval.length - 1);
			}
		});
	// -------------------------------------x---------------------------------------

	// For Vareity ----------------------------------------------------------------
		$("#txtVareity").focus(function() {
		    if(document.getElementById('txtVareity').value === ''){
		        document.getElementById('txtVareity').value +='• ';
			}
		});
		$("#txtVareity").blur(function(){
			if($.trim(document.getElementById('txtVareity').value) == '•'){
		        document.getElementById('txtVareity').value ='';
			}
		});
		$("#txtVareity").keyup(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        document.getElementById('txtVareity').value +='• ';
			}
			var txtval = document.getElementById('txtVareity').value;
			if(txtval.substr(txtval.length - 1) == '\n'){
				document.getElementById('txtVareity').value = txtval.substring(0,txtval.length - 1);
			}
		});
	// -------------------------------------x---------------------------------------

});