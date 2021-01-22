jQuery(document).ready(function() {
 
  jQuery(".group_settings_form").validate({    
    rules: {         
      email: {
        required: true,        
        email: true
      }
     
    },
    // Specify validation error messages
    messages: {  
	  email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined   
    submitHandler: function(form) {		
      //form.submit();	  
	   var ajax_url = jQuery('.group_settings_form #ajax_url').val();
	   var email = jQuery('.group_settings_form #admin_email').val();
	   if(email != ''){
		   jQuery(".group_settings_form .message_display").html('');
			var ajaxData = {
			'action': 'group_settings',
			'user_email': email,
			}		  
			jQuery.post(ajax_url, ajaxData, function(response){	
			  //console.log(response);	
			  jQuery(".group_settings_form .message_display").html(response);			  
			});	
		}		
		return false;
    }
  });
  
 
});

jQuery(document).ready(function() {
	
	jQuery("#group_creation_form").validate({    
		rules: {  
		  groupname: {
			 required: true, 
		  }
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('#group_creation_form #ajax_url').val();	  
	       var group_name = jQuery('#group_creation_form #groupname').val();		   
		   if(group_name !=''){
			    jQuery("#group_creation_form .message_display").html('');
				var ajaxData = {
				'action': 'group_creation',			
				'groupname' : group_name
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){					  	
                  jQuery("#group_creation_form .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery("#group_member_form").validate({    
		rules: {  
		  group_name: {
			 required: true, 
		  },
		  user_email: {
			 required: true,
			 email: true
		  },
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('#group_member_form #ajax_url').val();	  
	       var group_name = jQuery('#group_member_form #group_name').val();
		   var user_email = jQuery('#group_member_form #user_email').val();
		   if(group_name !='' && user_email != ''){
			    jQuery("#group_member_form .message_display").html('');
				var ajaxData = {
				'action': 'group_member',			
				'groupname' : group_name,
				'user_email' : user_email
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){					  	
                  jQuery("#group_member_form .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery("#group_leader_form").validate({    
		rules: {  
		  group_name: {
			 required: true, 
		  },
		  user_email: {
			 required: true,
			 email: true
		  },
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('#group_leader_form #ajax_url').val();	  
	       var group_name = jQuery('#group_leader_form #group_name').val();
		   var user_email = jQuery('#group_leader_form #user_email').val();
		   if(group_name !='' && user_email != ''){
			    jQuery("#group_leader_form .message_display").html('');
				var ajaxData = {
				'action': 'group_leader',			
				'groupname' : group_name,
				'user_email' : user_email
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){					  	
                  jQuery("#group_leader_form .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery("#group_course_form").validate({    
		rules: {  
		  group_name: {
			 required: true, 
		  },
		  course_name: {
			 required: true
		  },
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('#group_course_form #ajax_url').val();	  
	       var group_name = jQuery('#group_course_form #group_name').val();
		   var course_name = jQuery('#group_course_form #course_name').val();
		   var course_content = jQuery('#group_course_form #course_content').val();
		   if(group_name !='' && course_name != ''){
			    jQuery("#group_course_form .message_display").html('');
				var ajaxData = {
				'action': 'group_course_setting',			
				'groupname' : group_name,
				'course_name' : course_name,
				'course_content' : course_content
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){					  	
                  jQuery("#group_course_form .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery("#cpe_mointor_form").validate({    
		rules: {  
		  epid: {
			 required: true, 
		  },
		  course_code: {
			 required: true,
			 maxlength: 22,
			 minlength: 22,
		  },
		  date_of_birth: {
			 required: true, 
		  },
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('#cpe_mointor_form #ajax_url').val();	  
	       var course_code = jQuery('#cpe_mointor_form #course_code').val();
		   var date_of_birth = jQuery('#cpe_mointor_form #date_of_birth').val();
		   var epid = jQuery('#cpe_mointor_form #epid').val();
		   if(course_code !='' && date_of_birth != ''&& epid != ''){
			    jQuery("#cpe_mointor_form .message_display").html('');
				var ajaxData = {
				'action': 'cpe_mointor_course_form',			
				'coursecode' : course_code,
				'date_of_birth' : date_of_birth,
				'epid' : epid
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){					  	
                  jQuery("#cpe_mointor_form .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery(".cpe_mointer_settings").validate({    
		rules: {  
		  cpe_username: {
			 required: true, 
		  },
		  cpe_password: {
			 required: true
		  },
		  cpe_confirm_password: {
			 required: true,
			 equalTo: "#cpe_password"			 
		  },
		  cpe_provider_number: {
			 required: true, 
			 maxlength: 4,
			 minlength: 4,
			 digits: true
		  },
		},  
		submitHandler: function(form) {			  	
		   var ajax_url = jQuery('.cpe_mointer_settings #ajax_url').val();	  
	       var cpe_username = jQuery('.cpe_mointer_settings #cpe_username').val();
		   var cpe_password = jQuery('.cpe_mointer_settings #cpe_password').val();
		   var cpe_confirm_password = jQuery('.cpe_mointer_settings #cpe_password').val();
		   var cpe_provider_number = jQuery('.cpe_mointer_settings #cpe_provider_number').val();
		   if(cpe_username !='' && cpe_password != ''&& cpe_provider_number != ''){
			    jQuery(".cpe_mointer_settings .message_display").html('');
				var ajaxData = {
				'action': 'cpe_mointer_settings',			
				'cpe_username' : cpe_username,
				'cpe_password' : cpe_password,
				'provider_number' : cpe_provider_number
				}		  
				jQuery.post(ajax_url, ajaxData, function(response){		
                  //console.log(response);			  	
                  jQuery(".cpe_mointer_settings .message_display").html(response);				  
				});	
			}		
			return false;
		}
	 });
	 jQuery( "#date_of_birth" ).datepicker({dateFormat: 'mmdd'});
});
