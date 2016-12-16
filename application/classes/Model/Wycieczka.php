<?php

class Model_Wycieczka extends ORM
{
    protected $_table_name = 'wycieczka';
    protected $_primary_key = 'id_wycieczki';
    
    protected $_belongs_to = array(
        'uczestnik' => array(
            'model' => 'Uczestnik',
            'foreign_key' => 'id_uczestnika',
        ),
    );
    
    protected $_has_many = array(
        'etap' => array(
            'model' => 'Etap',
            'foreign_key' => 'id_wycieczki',
        )
    );
}
