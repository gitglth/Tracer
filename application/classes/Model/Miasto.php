<?php

class Model_Miasto extends ORM
{
    protected $_table_name = 'miasto';
    protected $_primary_key = 'id_miejsca';
    
    protected $_belongs_to = array(
        'etap' => array(
            'model' => 'Etap',
            'foreign_key' => 'id_etapu',
        ),
    );
    
    protected $_has_many = array(
        'nocleg' => array(
            'model' => 'Nocleg',
            'foreign_key' => 'id_miejsca',
        )
    );
}
