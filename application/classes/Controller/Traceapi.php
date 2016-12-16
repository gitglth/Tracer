<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Traceapi extends Controller {

	public function action_index()
	{
            $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->find_all();
            
            $this->response->body(View::factory('Api')->set('wycieczki',$wycieczki));
	}
        
        public function action_add()
        {
            $post = $this->request->post();
            
            if($post)
            {
                $post['id_uczestnika'] = 1;
                
                if(!isset($post['id_wycieczki']))
                {
                    if(isset($post['nazwa_wycieczki']))
                    {
                        $ilosc = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->count_all();
                        if($ilosc==0)
                        {
                            $wycieczka = ORM::factory('Wycieczka');
                            $wycieczka->values($post)->save();
                        }
                        else $wycieczka = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->find();
                        $post['id_wycieczki'] = $wycieczka->id_wycieczki;
                    }
                }
            }

            if(isset($post['odleglosc']))
            {
                $etap = ORM::factory('Etap');
                $etap->values($post)->save();
                $post['id_etapu'] = $etap->id_etapu;
            }

            if(isset($post['kraj']))
            {
                $miasto = ORM::factory('Miasto');
                $miasto->values($post)->save();
                $post['id_miejsca'] = $miasto->id_miejsca;
            }

            if(isset($post['ilosc_nocy']))
            {
                $nocleg = ORM::factory('Nocleg');
                $nocleg->values($post)->save();
            }
            
            $this->response->body(var_dump($post));
        }
        
        public function action_test()
        {
            $this->response->body(View::factory('Addtest'));
        }
}