<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Userpanel extends Controller {

	public function action_index()
	{
            $session = Session::instance();
            $uid = $session->get('id', 0);
            if($uid)
            {
                $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->find_all();
                $this->response->body(View::factory('User')->set('wycieczki',$wycieczki)->set('uid',$uid));
            }
            else
            {
                $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->find_all();
                $this->response->body(View::factory('Guest')->set('wycieczki',$wycieczki));
            }
        }
        
        public function action_list()
        {
            $session = Session::instance();
            $uid = $session->get('id', 0);
            if($uid)
            {
                if(isset($_GET['date']) && isset($_GET['place']))
                {
                    if(!empty($_GET['date']) && !empty($_GET['place']))
                    {
                        $date = $_GET['date'];
                        $place = $_GET['place'];
                        $filtr1 = [];
                        $filtr2 = [];
                        $daty = ORM::factory('Etap')->where('data_rozpoczecia','<=',$date)->where('data_zakonczenia','>=',$date)->find_all();
                        foreach($daty as $data)
                        {
                            array_push($filtr1,$data->id_wycieczki);
                        }
                        $miejsca = ORM::factory('Miasto')->where('kraj','like',$place)->or_where('miasto','like',$place)->or_where('powiat','like',$place)->find_all();
                        foreach($miejsca as $miejsce)
                        {
                            array_push($filtr2,$miejsce->id_wycieczki);
                        }
                        if(count($filtr)) $wycieczki = ORM::factory('Wycieczka')->where('id_uczestnika','=',$uid)->where('status','=','A')->where('id_wycieczki','in',$filtr1)->where('id_wycieczki','in',$filtr2)->find_all();
                        else $wycieczki = new stdClass();
                    }
                    else if(!empty($_GET['date']))
                    {
                        $date = $_GET['date'];
                        $filtr = [];
                        $daty = ORM::factory('Etap')->where('data_rozpoczecia','<=',$date)->where('data_zakonczenia','>=',$date)->find_all();
                        foreach($daty as $data)
                        {
                            array_push($filtr,$data->id_wycieczki);
                        }
                        if(count($filtr)) $wycieczki = ORM::factory('Wycieczka')->where('id_uczestnika','=',$uid)->where('status','=','A')->where('id_wycieczki','in',$filtr)->find_all();
                        else $wycieczki = new stdClass();
                    }
                    else if(!empty($_GET['place']))
                    {
                        $place = $_GET['place'];
                        $filtr = [];
                        $miejsca = ORM::factory('Miasto')->where('kraj','like',$place)->or_where('miasto','like',$place)->or_where('powiat','like',$place)->find_all();
                        foreach($miejsca as $miejsce)
                        {
                            array_push($filtr,$miejsce->id_wycieczki);
                        }
                        if(count($filtr)) $wycieczki = ORM::factory('Wycieczka')->where('id_uczestnika','=',$uid)->where('status','=','A')->where('id_wycieczki','in',$filtr)->find_all();
                        else $wycieczki = new stdClass();
                    }
                    else
                    {
                        $wycieczki = ORM::factory('Wycieczka')->where('id_uczestnika','=',$uid)->where('status','=','A')->find_all();
                    }
                }
                else
                {
                    $wycieczki = ORM::factory('Wycieczka')->where('id_uczestnika','=',$uid)->where('status','=','A')->find_all();
                }
                $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
            }
            else
            {
                if(isset($_GET['date']) && isset($_GET['place']))
                {
                    if(!empty($_GET['date']) && !empty($_GET['place']))
                    {
                        $date = $_GET['date'];
                        $place = $_GET['place'];
                        $filtr1 = [];
                        $filtr2 = [];
                        $daty = ORM::factory('Etap')->where('data_rozpoczecia','<=',$date)->where('data_zakonczenia','>=',$date)->find_all();
                        foreach($daty as $data)
                        {
                            array_push($filtr1,$data->id_wycieczki);
                        }
                        $miejsca = ORM::factory('Miasto')->where('kraj','like',$place)->or_where('miasto','like',$place)->or_where('powiat','like',$place)->find_all();
                        foreach($miejsca as $miejsce)
                        {
                            array_push($filtr2,$miejsce->id_wycieczki);
                        }
                        if(count($filtr1) && count($filtr2))
                        {
                            $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->where('id_wycieczki','in',$filtr1)->where('id_wycieczki','in',$filtr2)->find_all();
                            $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
                        }
                        else $this->response->body(View::factory('Tracelist'));
                    }
                    else if(!empty($_GET['date']))
                    {
                        $date = $_GET['date'];
                        $filtr = [];
                        $daty = ORM::factory('Etap')->where('data_rozpoczecia','<=',$date)->where('data_zakonczenia','>=',$date)->find_all();
                        foreach($daty as $data)
                        {
                            array_push($filtr,$data->id_wycieczki);
                        }
                        if(count($filtr)) 
                        {
                            $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->where('id_wycieczki','in',$filtr)->find_all();
                            $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
                        }
                        else $this->response->body(View::factory('Tracelist'));
                    }
                    else if(!empty($_GET['place']))
                    {
                        $place = $_GET['place'];
                        $filtr = [];
                        $miejsca = ORM::factory('Miasto')->where('kraj','like',$place)->or_where('miasto','like',$place)->or_where('powiat','like',$place)->find_all();
                        foreach($miejsca as $miejsce)
                        {
                            array_push($filtr,$miejsce->id_wycieczki);
                        }
                        if(count($filtr))
                        {
                            $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->where('id_wycieczki','in',$filtr)->find_all();
                            $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
                        }
                        else $this->response->body(View::factory('Tracelist'));
                    }
                    else
                    {
                        $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->find_all();
                        $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
                    }
                }
                else
                {
                    $wycieczki = ORM::factory('Wycieczka')->where('status','=','A')->find_all();
                    $this->response->body(View::factory('Tracelist')->set('wycieczki',$wycieczki));
                }
                
            }
        }
        
        public function action_remove()
        {
            $session = Session::instance();
            $uid = $session->get('id', 0);
            if($uid)
            {
                $post = $this->request->post();
                if($post)
                {
                    $wycieczka = ORM::factory('Wycieczka',$post['id_wycieczki']);
                    $wycieczka->status = 'D';
                    $wycieczka->save();
                    $this->redirect('../Userpanel/list');
                }
                else
                {
                    $this->redirect('../Userpanel/list');
                }
            }
            else
            {
                $this->response->body(View::factory('Login'));
            }
        }
        
        public function action_add()
        {
            $session = Session::instance();
            $uid = $session->get('id', 0);
            if($uid)
            {
                $post = $this->request->post();
                if($post)
                {
                    $post['id_uczestnika'] = $uid;
                    
                    $post['data_rozpoczecia'] = $post['data_rozpoczecia_y'].'-'.$post['data_rozpoczecia_m'].'-'.$post['data_rozpoczecia_d'];
                    $post['data_zakonczenia'] = $post['data_zakonczenia_y'].'-'.$post['data_zakonczenia_m'].'-'.$post['data_zakonczenia_d'];
                    
                    $ilosc = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->where('id_uczestnika','=',$uid)->count_all();
                    if($ilosc==0)
                    {
                        $wycieczka = ORM::factory('Wycieczka');
                        $wycieczka->values($post)->save();
                    }
                    else $wycieczka = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->find();
                    $post['id_wycieczki'] = $wycieczka->id_wycieczki;
                    
                    $etap = ORM::factory('Etap');
                    $etap->values($post)->save();
                    $post['id_etapu'] = $etap->id_etapu;
                    
                    $miasto = ORM::factory('Miasto');
                    $miasto->values($post)->save();
                    $post['id_miejsca'] = $miasto->id_miejsca;
                    
                    $nocleg = ORM::factory('Nocleg');
                    $nocleg->values($post)->save();
                    $this->response->body(View::factory('Newtrace')->set('nowyetap',1)->set('nazwa_wycieczki',$post['nazwa_wycieczki'])->set('biuro_podrozy',$post['biuro_podrozy']));
                }
                else
                {
                    $this->response->body(View::factory('Newtrace'));
                }
            }
            else
            {
                $this->redirect('../Login');
            }
        }
        
        public function action_addfinal()
        {
            $session = Session::instance();
            $uid = $session->get('id', 0);
            if($uid)
            {
                $post = $this->request->post();
                if($post)
                {
                    $post['id_uczestnika'] = $uid;
                    
                    $post['data_rozpoczecia'] = $post['data_rozpoczecia_y'].'-'.$post['data_rozpoczecia_m'].'-'.$post['data_rozpoczecia_d'];
                    $post['data_zakonczenia'] = $post['data_zakonczenia_y'].'-'.$post['data_zakonczenia_m'].'-'.$post['data_zakonczenia_d'];
                    
                    $ilosc = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->where('id_uczestnika','=',$uid)->count_all();
                    if($ilosc==0)
                    {
                        $wycieczka = ORM::factory('Wycieczka');
                        $wycieczka->values($post)->save();
                    }
                    else $wycieczka = ORM::factory('Wycieczka')->where('nazwa_wycieczki','=',$post['nazwa_wycieczki'])->find();
                    $post['id_wycieczki'] = $wycieczka->id_wycieczki;
                    
                    $etap = ORM::factory('Etap');
                    $etap->values($post)->save();
                    $post['id_etapu'] = $etap->id_etapu;
                    
                    $miasto = ORM::factory('Miasto');
                    $miasto->values($post)->save();
                    $post['id_miejsca'] = $miasto->id_miejsca;
                    
                    $nocleg = ORM::factory('Nocleg');
                    $nocleg->values($post)->save();
                    $this->redirect('../Userpanel');
                }
                else
                {
                    $this->response->body(View::factory('Newtrace'));
                }
            }
            else
            {
                $this->redirect('../Login');
            }
        }
        
        public function action_trace()
        {
            $session = Session::instance();
            $uid = $session->get('id', 0);
            $post = $this->request->post();
            if($post)
            {
                $wycieczka = ORM::factory('Wycieczka',$post['id_wycieczki']);
            }
            else
            {
                $wycieczka = ORM::factory('Wycieczka',$this->request->param('id',1));
            }
            $this->response->body(View::factory('Trace')->set('wycieczka',$wycieczka));
        }
}