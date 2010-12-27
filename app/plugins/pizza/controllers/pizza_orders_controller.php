<?php
class PizzaOrdersController extends PizzaAppController{
    
    var $name='PizzaOrders';


    function index(){
        $this->set('Pizza',$this->PizzaOrder->find('all'));
    }

}

?>
