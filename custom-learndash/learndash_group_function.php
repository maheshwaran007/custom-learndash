<?php

function learndash_group_callback_function(){?>
     <div class="learndash_form">
		 <h2>Learndash Group Creation</h2>	 
		 <form name='learndash_group_create' class='learndash_form_content' id='group_creation_form'>
		   <div class="learndash_form_div">
			<label>Group Name</label>
			<input name="groupname" type="text" id="groupname"  class="groupname "> 
			<br/>
			<input type="submit" id="submit" name="submit"  value='submit'>
			<div class='message_display'></div>
			<input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">	
		  </div>		   
		 <form>
    </div>
<?php	
}
function learndash_group_memeber_function(){ ?>
     <div class="learndash_form">
   	 <h2>Learndash Group Memeber</h2>	 
	 <form name='group_settings' class='learndash_form_content' id='group_member_form'>
	   <div class="learndash_form_div">
		   <div>
			   <label>Group Name</label>
			   <input type="text" id="group_name" name="group_name">
		   </div>
		   <br/>
		   <div>
			   <label>User Email</label>
			   <input type="email" id="user_email" name="user_email">
		   </div>
		   <br/>
		   <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">
		   <input type="submit" id="submit" name="submit" value='submit'>
		   <div class='message_display'></div>
	   </div>
	 <form>
	 </div>
<?php	
}
function learndash_group_leader_function(){ ?>
    <div class="learndash_form">
	 <h2>Learndash Group Leader</h2>	
	 <form name='group_leader_settings' class='learndash_form_content' id='group_leader_form'>
	   <div class="learndash_form_div">
			<div>
				<label>Group Name</label>
				<input type="text" id="group_name" name="group_name">
			</div>
			<br/>
			<div>
				<label>User Email</label>
				<input type="email" id="user_email" name="user_email">	   
		   </div>
		   <br/>
		   <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">
		   <input type="submit" id="submit" name="submit" value='submit'>
		   <div class='message_display'></div>
	   </div>
	 <form>
	 </div>
<?php	
}

function learndash_group_settings_function(){
	?>	 
	<div class="learndash_form">
	 <h2>Settings</h2>	 
	 <h3>learndash group</h3>
	 <form name='group_settings' class='group_settings_form'>
	   <div class="learndash_group_div">
	    <div>
		   <label>Learndash Group Author Email</label>
		   <?php $author_email = esc_html(get_option( 'learmdash_group_author' )); ?>
		   <input type="email" id="admin_email" name="admin_email" value='<?php echo $author_email; ?>'>
	   </div>
	   <br/>
	   <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">	   
	   <input type="submit" id="submit" name="submit" value='submit'>
	   <div class='message_display'></div>
	   </div>
	 </form>
	 <h3>cpe monitor settings</h3>
	 <?php
	    global $wpdb;
		$table_name = $wpdb->prefix . 'cpe_mointor_settings';
	    $result = $wpdb->get_results("SELECT * FROM ".$table_name." WHERE id = 1"); 	
        $cpe_username = '';		
		$cpe_password ='';
		$cpe_provider_number ='';
		if($wpdb->num_rows > 0 ){			
			 $cpe_username = ($result['0']->Username)?$result['0']->Username:'';
			 $cpe_password = ($result['0']->Password)?$result['0']->Password:'';
			 $cpe_provider_number = ($result['0']->ProviderNumber)?$result['0']->ProviderNumber:'';
		}
	 ?>
	 <form name='cpe_mointer_settings' class='cpe_mointer_settings'>
	     <div class="learndash_group_div">
			 <div>
			   <label>cpe monitor username</label>		   
			   <input type="text" id="cpe_username" name="cpe_username" value='<?php echo $cpe_username; ?>'>
			 </div>
			 <br/>
			 <div>
			   <label>cpe monitor password</label>		   
			   <input type="password" id="cpe_password" name="cpe_password" value='<?php echo $cpe_password; ?>'>
			 </div>
			 <br/>
			 <div>
			   <label>cpe monitor confirm password</label>		   
			   <input type="password" id="cpe_confirm_password" name="cpe_confirm_password" value='<?php echo $cpe_password; ?>'>
			 </div>
			 <br/>
			 <div>
			   <label>provider number</label>		   
			   <input type="text" id="cpe_provider_number" name="cpe_provider_number" value='<?php echo $cpe_provider_number; ?>'>
			 </div>
			 <br/>
			 <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">	   
			 <input type="submit" id="submit" name="submit" value='submit'>
			 <div class='message_display'></div>
		 </div>
	 <form>
	 
	 </div>
<?php	
}
function learndash_course_settings_function(){ ?>
  <div class="learndash_form">
	  <h2>Course creation with group map</h2>	
	  <form name='group_course_settings' class='learndash_form_content' id='group_course_form'>
	   <div class="learndash_form_div">
	    <div>
			<label>Course Name</label>
			<input type="text" id="course_name" name="course_name">
		</div>
		<br/>
		<div>
			<label>Course Content</label>
			<input type="text" id="course_content" name="course_content">
		</div>
		<br/>
	    <div>
			<label>Group Name</label>
			<input type="text" id="group_name" name="group_name">
		</div>
	    <br/>		
	   <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">
	   <input type="submit" id="submit" name="submit" value='submit'>
	   <div class='message_display'></div>
	 <form>
   </div>
<?php	
}
function cpe_mointor_course_settings(){ ?>
	<div class="learndash_form">
	  <h2>Cpe monitor</h2>	
	  <form name='cpe_mointor_settings' class='learndash_form_content' id='cpe_mointor_form'>
	   <div class="learndash_form_div">
	    <div>
			<label>Course Code</label>
			<input type="text" id="course_code" name="course_code">
		</div>
		<br/>
		<div>
			<label>date of birth</label>
			<input type="text" id="date_of_birth" name="date_of_birth">
		</div>
		<br/>
	    <div>
			<label>NABP e-Profile id</label>
			<input type="text" id="epid" name="epid">
		</div>
	    <br/>		
	   <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo $ajax_url = admin_url( 'admin-ajax.php' ); ?>">
	   <input type="submit" id="submit" name="submit" value='submit'>
	   <div class='message_display'></div>
	   </div>
	 <form>
   </div>
 <?php  
}
add_action( 'wp_ajax_group_settings', 'group_settings' );
function group_settings(){
	global $wpdb;	
	$author_email = sanitize_email($_REQUEST['user_email']);
	$user = get_user_by('email',$author_email);	
	if($user){		
		if( in_array("administrator", $user->roles)){
			update_option( 'learmdash_group_author', $author_email );
			echo "<p class='success_msg'>Email address successfully updated</p>";
		}else{
			echo "<p class='error_msg'>Please enter a vaild admin role email address</p>";
		}
	}else{
		echo "<p class='error_msg'>Please enter a vaild admin role email address</p>";
	}
	exit;	
}

add_action( 'wp_ajax_group_creation', 'group_creation' );
function group_creation(){
	global $wpdb;	
	$group_content = '';	
	$groupname = sanitize_text_field($_REQUEST['groupname']);
	$author_email = sanitize_email(get_option('learmdash_group_author' ));
	$sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'groups' AND post_status IN ('draft','publish') AND post_title like '".$groupname."'";		
	$group_result = $wpdb->get_results( $sql );	
	if(empty($group_result)){
		$user = get_user_by('email',$author_email);
		if($user){
			$post_author_id = $user->ID;
			$group  =  array(
				'post_title'    => $groupname,
				'post_status'   => 'publish',
				'post_type'     => 'groups',
				'post_content'  => $group_content,
				'post_author'   => $post_author_id, 
				'post_name'     => $groupname
			);
			$group_id = wp_insert_post($group);
			echo "<p class='success_msg'>Successfully group created</p>";
		}
	}else{
	  echo "<p class='error_msg'><span>".$groupname."</span> group already created</p>";
	}	
	exit;	
}
add_action( 'wp_ajax_group_member', 'group_member' );
function group_member(){
	global $wpdb;			
	$groupname = sanitize_text_field($_REQUEST['groupname']);
	$emailaddress = sanitize_email($_REQUEST['user_email']);
	$sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'groups' AND post_status IN ('draft','publish') AND post_title like '".$groupname."'";		
	$group_result = $wpdb->get_results( $sql );	
	if(!empty($group_result)){
	   $group_user_sql = "SELECT ID FROM ".$wpdb->prefix."users  WHERE user_email like '".$emailaddress ."' ";
	   $group_user = $wpdb->get_results($group_user_sql);	   
	   if(!empty($group_user)){			  
		  $group_user_id = isset($group_user['0']->ID)?$group_user['0']->ID:'';	
		  $group_id = isset($group_result['0']->ID)?$group_result['0']->ID:'';
		  $postmeta = "learndash_group_users_".$group_id;
		  $exits_members = (get_post_meta($group_id,$postmeta))?get_post_meta($group_id,$postmeta):'';	
		  $group_users_new 	= array();
          if($exits_members){		
			  $group_users_new = $exits_members['0'];	
			  array_push($group_users_new,$group_user_id);
			  $group_users_new = array_unique($group_users_new);			  
		  }else{
			  $group_users_new = array($group_user_id);
		  }	 
		  learndash_set_groups_users( $group_id, $group_users_new );	
          echo "<p class='success_msg'>Successfully group member added</p>";		  
	   }else{
		  echo "<p class='error_msg'>Please enter a valid user email address</p>";
	   }
	   
	}else{
	   echo "<p class='error_msg'>Please enter a valid group name</p>";	
	}
	exit;
}	

add_action( 'wp_ajax_group_leader', 'group_leader' );
function group_leader(){	
	global $wpdb;		
    $groupname = sanitize_text_field($_REQUEST['groupname']);
	$emailaddress = sanitize_email($_REQUEST['user_email']);	
	$sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'groups' AND post_status IN ('draft','publish') AND post_title like '".$groupname."'";	
	$group_result = $wpdb->get_results( $sql );	
	if(!empty($group_result)){
	  $group_user_sql = "SELECT ID FROM ".$wpdb->prefix."users  WHERE user_email like '".$emailaddress ."' ";	  
	  $group_user = $wpdb->get_results($group_user_sql);	
	   if(!empty($group_user)){			  
		  $group_user_id = isset($group_user['0']->ID)?$group_user['0']->ID:'';		  
		  $user = new WP_User($group_user_id);		 
		  if ( ! in_array( 'group_leader', (array) $user->roles ) && ! in_array( 'administrator', (array) $user->roles ) ) {
               //The user have not the "group leader" role
			   $user->add_role( 'group_leader' );			   
		   }		   
		   $group_id = isset($group_result['0']->ID)?$group_result['0']->ID:'';
		   $postmeta = "new_learndash_group_leader_".$group_id;
		   $exits_leader = (get_post_meta($group_id,$postmeta))?get_post_meta($group_id,$postmeta):'';	
		   $group_users_new = array();
           if($exits_leader){		
			  $group_users_new = $exits_leader['0'];	
			  array_push($group_users_new,$group_user_id);
			  $group_users_new = array_unique($group_users_new);			  
		   }else{
			  $group_users_new = array($group_user_id);
		   }		
		   update_post_meta($group_id,$postmeta,$group_users_new);		 
		   learndash_set_groups_administrators( $group_id, $group_users_new );
		   echo "<p class='success_msg'>Successfully group leader added</p>";
	   }else{
		   echo "<p class='error_msg'>Please enter a valid user email address</p>";
	   }

	}else{
		echo "<p class='error_msg'>Please enter a valid group name</p>";
	}
	exit;
}	

add_action( 'wp_ajax_group_course_setting', 'group_course_setting' );
function group_course_setting(){	    
	global $wpdb;
	$groupname = sanitize_text_field($_REQUEST['groupname']);
	$coursename = sanitize_text_field($_REQUEST['course_name']);
	$course_content = sanitize_text_field($_REQUEST['course_content']);
	$author_email = sanitize_email(get_option('learmdash_group_author' ));
	//check course if already exit or not.		
	$sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'sfwd-courses' AND post_status IN ('draft','publish') AND post_title like '".$coursename."'";	
	
	$course_result = $wpdb->get_results( $sql );	
	if(empty($course_result)){
		    //$group_content = '';
			 $user = get_user_by('email',$author_email);
			 if($user){
				 $post_author_id = $user->ID;
				 $course  =  array(
					'post_title'    => $coursename,
					'post_status'   => 'publish',
					'post_type'     => 'sfwd-courses',
					'post_content'  => $course_content,
					'post_author'   => $post_author_id, 
					'post_name'     => $coursename
		         );
				 $wdm_course_id = wp_insert_post($course);
				 $group_sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'groups' AND post_status IN ('draft','publish') AND post_title like '".$group_name."'";	
				 $group_result = $wpdb->get_results( $group_sql );	
				 if(!empty($group_result)){			   
				   $group_id = isset($group_result['0']->ID)?$group_result['0']->ID:'';
				   update_post_meta( $wdm_course_id, 'learndash_group_enrolled_' . $group_id, time() );
				   echo "<p class='success_msg'>successfully course post created and group mapped</p>";
				 }else{
				   echo "<p class='error_msg'>please enter a valid group name</p>";
				 }			 
				  
			 }			 		
	    
	}else{
		// course exit and assign to group   
		$wdm_course_id = isset($course_result['0']->ID)?$course_result['0']->ID:'';		
		$group_sql = "SELECT ID FROM ".$wpdb->prefix."posts  WHERE post_type like 'groups' AND post_status IN ('draft','publish') AND post_title like '".$group_name."'";	
		$group_result = $wpdb->get_results( $group_sql );	
		if(!empty($group_result)){		
			$group_id = isset($group_result['0']->ID)?$group_result['0']->ID:'';
			update_post_meta( $wdm_course_id, 'learndash_group_enrolled_' . $group_id, time() );
			echo "<p class='success_msg'> Exiting course post  mapped with group</p>";
		}
	}
	exit;
}

add_action( 'wp_ajax_cpe_mointor_course_form', 'cpe_mointor_course_form' );
function cpe_mointor_course_form(){
	$table_name = $wpdb->prefix . 'cpe_mointor_settings';
	$result = $wpdb->get_results("SELECT * FROM ".$table_name." WHERE id = 1"); 	
	$username = '';		
	$password ='';
	$provider_number ='';
	if($wpdb->num_rows > 0 ){			
		 $username = ($result['0']->Username)?$result['0']->Username:'';
		 $password = ($result['0']->Password)?$result['0']->Password:'';
		 $provider_number = ($result['0']->ProviderNumber)?$result['0']->ProviderNumber:'';
	}	
	$uan = isset($_REQUEST['coursecode'])?$_REQUEST['coursecode']:'';
	$date_of_birth = isset($_REQUEST['date_of_birth'])?$_REQUEST['date_of_birth']:'';
	$epid  = isset($_REQUEST['epid'])?$_REQUEST['epid']:'';	
	$date_of_participation = date("Y-m-d");
	$course_status = '';
	if($uan && $date_of_birth && $epid){
		
		$request_url = "https://cpemonitor.acpe-accredit.org/service/cpemonitorservice.asmx/SubmitCPEActivityJSON?provider_number=$provider_number&epid=$epid&date_of_birth=$date_of_birth&uan=$uan&date_of_participation=$date_of_participation&action=I&username=$username&password=$password";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_GET, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_GETFIELDS,$parameter);
		$result = curl_exec($ch);
		$new_result = json_decode($result,TRUE);	
		$course_status = '';	
		if($new_result['status'] == 'Accepted'){
		  $course_status = '<p class="success_msg">Cpe Mointer Activity Accepted<p>';
		}else{
		  $course_status = '<p class="error_msg">'.$new_result['error_message'].'</p>'; 
		}	
		//print_r($result->IsValid);//ErrorMessage
		curl_close($ch);
		
	}else{
		$course_status = "<p class='error_msg'>Course code, date of birth and epid is required</p>";
	}
	echo $course_status;
	exit;
}

add_action( 'wp_ajax_cpe_mointer_settings', 'cpe_mointer_settings' );
function cpe_mointer_settings(){	
	global $wpdb;
	$cpe_username = sanitize_text_field($_REQUEST['cpe_username']);
	$cpe_password = sanitize_text_field($_REQUEST['cpe_password']);
	$cpe_confirm_password = sanitize_text_field($_REQUEST['cpe_confirm_password']);
	$cpe_provider_number = sanitize_text_field($_REQUEST['provider_number']);
	$current_date = date("Y-m-d");	
	 if($cpe_username && $cpe_password && $cpe_provider_number){
		$table_name = $wpdb->prefix . 'cpe_mointor_settings';		
		$result = $wpdb->get_results("SELECT * FROM ".$table_name." WHERE id = 1"); 		
		if($wpdb->num_rows > 0 ){
		   $user_id = 1;
		   $wpdb->query( $wpdb->prepare("UPDATE $table_name  
                SET Username = %s , Password = %s,ProviderNumber= %s
             WHERE id=%s",$cpe_username,$cpe_password,$cpe_provider_number,$user_id)
           );
		   echo "<p class='success_msg'> Cpe Monitor Settings Updated </p>";
		}else{				
			$wpdb->insert($table_name, array(
				'Username' => $cpe_username,
				'Password' => $cpe_password,
				'ProviderNumber' => $cpe_provider_number,
				'created_date' => $current_date
			));
			echo "<p class='success_msg'>Cpe Monitor Settings successfully inserted </p>";
		}
	}else{
		echo "<p class='error_msg'>please enter the values </p>";
	}
	exit;
}