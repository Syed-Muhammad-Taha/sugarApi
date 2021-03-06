<?php
require_once('include/SugarQuery/SugarQuery.php');

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class WonOpp extends SugarApi
{
   public function registerApiRest()
   {
       return array(
           //GET
           'MyGetEndpoint' => array(
               //request type
               'reqType' => 'GET',

               //set authentication
               'noLoginRequired' => false,

               //endpoint path
               'path' => array('customApi', 'getClosedWon'),

               //endpoint variables
               'pathVars' => array('', ''),

               //method to call
               'method' => 'MyGetMethod',

               //short help string to be displayed in the help documentation
               'shortHelp' => 'An example of a GET endpoint',

               //long help to be displayed in the help documentation
               //'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
           ),
       );
   }

   /**
    * Method to be used for my MyEndpoint/GetExample endpoint
    */
   public function MyGetMethod($api, $args)
   {
       
       //echo "In MyGetMethod<br>";

       //custom logic
	$module = 'Opportunities';
        //custom logic
	$sugarQuery = new SugarQuery();

	//fetch the bean of the module to query
	$bean = BeanFactory::newBean($module);
	$sql = new SugarQuery();
	$sql->select('name','date_closed','description');
	$sql->from($bean);
	$sql->Where()->equals('sales_stage', 'Closed Won');
	$result = $sql->execute();

	$count = count($result);

	if ($count == 0) {
	  //  echo "No result found";
	} elseif ($count >= 1) {

	     return $result;	    
	}

	
   }

}
?>
