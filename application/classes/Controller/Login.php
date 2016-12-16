<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
            $session = Session::instance();
            $uid = $session->get('id',0);
            if($uid)
            {
                $this->redirect('../Userpanel');
            }
            else
            {
                $post = $this->request->post();
                if($post)
                {
                    $user = ORM::factory('Uczestnik')->where('login','=',$post['login'])->where('haslo','=',$post['haslo'])->find();
                    if($user->id_uczestnika)
                    {
                        $session = Session::instance();
                        $session->set('id', $user->id_uczestnika);
                        $this->redirect('../Userpanel');
                    }
                    else $this->response->body(View::factory('Login')->set('invalid',1));
                }
                else
                {
                    $this->response->body(View::factory('Login'));
                }
            }
	}
        
        public function action_logout()
        {
            $session = Session::instance();
            $session->delete('id');
            $this->redirect('../Login');
        }
        
        public function action_testbazy()
        {
            $dane = ORM::factory('Uczestnik',1);
            
            
            $this->response->body(View::factory('Testbazy')->set('dane',$dane));
        }

}