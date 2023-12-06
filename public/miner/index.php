<?php
function adminer_object() {
  
  class AdminerSoftware extends Adminer {
    
	function name() {
      return 'Adminer (OSPanel)';
    }
	
    function login($login, $password) {
      return ($login == '' && $password == '');
    }
    
     function databases($flush = true) {
            if (isset($_GET['sqlite']))
                return ["E:/OSPanel/domains/vue/database/database.sqlite"];
            return get_databases($flush);
        }
  }
  
  return new AdminerSoftware;
}
 
//include "./adminer.php";

include "./adminer-4.8.1-en.php";