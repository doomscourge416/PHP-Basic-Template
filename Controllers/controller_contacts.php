<?php 

class Controller_Contacts extends Controller {

    function action_index(){
        $this->view->generate('Contacts_View.php', 'Template_View.php');
    }

}

?>