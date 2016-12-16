<?php

class Model_Etap extends ORM
{
    protected $_table_name = 'etap';
    protected $_primary_key = 'id_etapu';
    
    protected $_belongs_to = array(
        'wycieczka' => array(
            'model' => 'Wycieczka',
            'foreign_key' => 'id_wycieczki',
        ),
    );
    
    protected $_has_many = array(
        'miasto' => array(
            'model' => 'Miasto',
            'foreign_key' => 'id_etapu',
        )
    );
}
