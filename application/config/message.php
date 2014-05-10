<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| MESSAGE 
| -------------------------------------------------------------------------
| Purpose of this file is to store all the messages used in the application at one place.
|
| * @author      PINAL DESAI (pinal.j.desai@gmail.com)
| * @company     TRIMANTRA SOFTWARE SOLUTIONS 
| 
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you need to take care of when ever adding data to this file.
|
| 1. Make sure to specify controller name  and the function name
| 2. Start Messgae key with prefix  "msg_"
| 3. Start General / Common Message key with Prefix "msg_cn_"  
| 4. Use %V in message as a variable, if single variable is needed for dynamic text or value.
| 5. Use %V1, %V2, %V3 etc... as a variables if multiple variable is needed in message is the same message.
|
|
|
|  To call message with no parameter 
|
|       $this->message->item('msg_key');
|       
|       
|       
|  To call message with single parameter 
|
|       $this->message->item('msg_key','Value to replace');       
|       
|       
|       
|  To call message with multiple parameter 
|  Pass values in array. value should be in order to the respective variable.
|
|       $this->message->item('msg_key', array("Value 1","Value 2", "Value 3"));  
|
*/          

// Conroller CODE
//  welcome                     =   c1
//  dashboard                   =   c2   
//  deal                        =   c3
// ===================================================================================================================
// Controller Name  :  General Messages 
// -------------------------------------------------------------------------------------------------------------------

$message['msg_cn_welcome']                  = "Welcome to CodeIgniter!";    
$message['msg_cn_']                         = "1 NOT FOUND";   
$message['msg_cn_registered_email']         = "Email Address is already registered.";   
$message['msg_cn_invalid_info']             = "Invalid %V found.";   
$message['msg_cn_not_available']            = "%V information is not available.";
$message['msg_cn_valid_field']              = "The %V1 field must contain a valid %V2.";
$message['msg_cn_already_active']           = "User account is already activated.";
$message['msg_cn_not_active']               = "User account is not activated.";
$message['msg_cn_email_sent']               = "%V Email has been sent to the registred email address.";
$message['msg_cn_not_registered']           = "Email Address is not registered.";
$message['msg_cn_incorrect_login']          = "The username or password you entered is incorrect.";
$message['msg_cn_add_success']              = "%V has been added successfully.";
$message['msg_cn_delete_success']           = "%V has been deleted successfully.";
$message['msg_cn_update_success']           = "%V has been updated successfully.";

// ===================================================================================================================
// Controller Name  :  welcome
// Function Name    :  registration
// -------------------------------------------------------------------------------------------------------------------

$message['msg_c1_terms_condition']          = "Please agree to Terms and Conditions of Blue Square Deals.";
$message['msg_c1_2'] = "%V1 FOUND in %V2 %V3";
$message['msg_c1_3'] = "%V NOT FOUND";

// ===================================================================================================================
// Controller Name  :  welcome
// Function Name    :  Registration Thankyou
// -------------------------------------------------------------------------------------------------------------------

// ===================================================================================================================
// Controller Name  :  welcome
// Function Name    :  reset_password
// -------------------------------------------------------------------------------------------------------------------
$message['msg_c1_reset_pass_apply']          = "Reset Password is applied successfully.Your Password has been changed.";

// ===================================================================================================================
// Controller Name  :  deal
// Function Name    :  edit_deal
// -------------------------------------------------------------------------------------------------------------------
$message['msg_c3_not_update']          = "Deal is already Published.If you Save this deal again then deal status will change to unpublish and again send for approve.";
/* End of file message.php */
/* Location: ./system/application/config/message.php */