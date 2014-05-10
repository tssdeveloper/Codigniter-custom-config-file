<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 // ------------------------------------------------------------------------

/**
 * CodeIgniter Message Class
 *
 * This class contains functions that enable config files to be managed
 * 
 * @author		PINAL DESAI (pinal.j.desai@gmail.com)
 * @company     TRIMANTRA SOFTWARE SOLUTIONS 
 */
class CI_Message {

	var $message = array();
	var $is_loaded = array();

	/**
	 * Constructor
	 *
	 * Sets the $message data from the primary message.php file as a class variable
	 *
	 * @access   public
	 * @param   string	the message file name
	 * @param   boolean  if messageuration values should be loaded into their own section
	 * @param   boolean  true if errors should just return false, false if an error message should be displayed
	 * @return  boolean  if the file was successfully loaded or not
	 */
	function CI_Message()
	{
		$this->message =& get_message();
		log_message('debug', "Message Class Initialized");
	}
  	
	// --------------------------------------------------------------------

	
	/**
	 * Fetch a message file item
	 *
	 *
	 * @access	public
	 * @param	string	the message item name
	 * @param	string	the index name
	 * @param	bool
	 * @return	string
	 */
	function item($item, $index = '')
	{	
        if ( ! isset($this->message[$item]))
        {
            return FALSE;
        }

        $pref = $this->message[$item];
        
        if ( isset($index) OR is_array($index))
		{	
            if(is_array($index))
            {
                for($i=1; $i <= sizeof($index); $i++)
                {
                    $pref = str_replace('%V'.$i,$index[$i-1],$pref);
                }
            }
            else
            {
                $pref = str_replace('%V',$index,$pref);
            }  
            
            
		}
		return $pref;
    }

}