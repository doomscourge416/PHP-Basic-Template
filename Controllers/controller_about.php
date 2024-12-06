<?php

class Controller_About extends Controller {

    function action_index() {
        $this->view->generate('About_View.php', 'Template_View.php');
    }

}

?>