<?php

class Model_Nocleg extends ORM
{
    protected $_table_name = 'nocleg';
    protected $_primary_key = 'id_hotelu';
    
    protected $_belongs_to = array(
        'miasto' => array(
            'model' => 'Miasto',
            'foreign_key' => 'id_miejsca',
        ),
    );
}
