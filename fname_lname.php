<?php
/*
Plugin Name: First name Last name
Plugin URI: http://www.thefunkhouse.co.uk
Plugin Description: Adds First name and Last name to registration form.
Version: 0.1
Author:Lee Doel
Author URI: http://www.thefunkhouse.co.uk
*/


add_action('register_form', 'fnln_addFields');
add_action('user_register', 'fnln_updateFields', 10, 1);


/**
 * Add fields to the new user registration page that the user must fill out to register
*/
function fnln_addFields(){ ?>
		<p>
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" id="first_name" class="input" value="" size="20" />
		</p>
        <p>
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" id="last_name" class="input" value="" size="20" />
		</p>
		<?php

}

/**
 * Add the additional metadata into the database after the user is created
*/
function fnln_updateFields($user_id){
		
		update_usermeta( $user_id, 'first_name', $_POST['first_name']);
		update_usermeta( $user_id, 'last_name', $_POST['last_name']);
}

?>