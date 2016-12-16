<?php

class Model_Uczestnik extends ORM
{
    protected $_table_name = 'uczestnik';
    protected $_primary_key = 'id_uczestnika';
    
    protected $_has_many = array(
        'wycieczka' => array(
            'model' => 'Wycieczka',
            'foreign_key' => 'id_uczestnika',
        )
    );
}