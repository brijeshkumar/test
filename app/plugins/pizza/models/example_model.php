<?php
class ExampleModel extends PizzaAppModel{
    var $name='ExampleModel';
    //var $hasMany=array('Pizza.PizzaOrder');
     var $hasMany = array(
                'PizzaOrder' => array(
                        'className' => 'Pizza.PizzaOrder'
                )
        );

}

?>
