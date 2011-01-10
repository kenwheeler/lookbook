<?php

class SlugRoute extends CakeRoute {
 
    function parse($url) {
        $params = parent::parse($url);
        if (empty($params)) {
            return false;
        }
        App::import('Model', 'User');
        $User = new User();
        $count = $User->find('count', array(
            'conditions' => array('User.username LIKE ?' => $params['slug'] .'%'),
            'recursive' => -1
        ));
        if ($count) {
            return $params;
        }
        return false;
    }
 
}

?>