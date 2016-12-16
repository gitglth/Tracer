<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller {

	public function action_index()
	{
            $post = $this->request->post();
            
            if($post)
            {
                if($post['haslo']==$post['haslo2'])
                {
                    if(!isset($post['ubezpieczenie'])) $post['ubezpieczenie'] = 0;
                    $user = ORM::factory('Uczestnik');
                    $user->values($post)->save();
                }
                    $this->redirect('../Login');
            }
            else
            {
                $this->response->body(View::factory('Register'));
            }
        }
}