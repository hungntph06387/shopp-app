<?php

namespace App\Models;

class Cart
{
    public $id= null;
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $totalQty)
    {
        $storeItems = ['qty'=> $totalQty, 'price' => $item->price, 'item'=> $item, 'id'=> $item->id];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItems = $this->items[$id];
            }
        }
        $storeItems['qty'] = $totalQty;
        $storeItems['price'] = $item->price * $storeItems['qty'];
        $this->items[$id] = $storeItems;
        
        $this->totalQty  += $totalQty;
        $this->totalPrice += $item->price;
        
    }

    public function deleteItemCart($item, $id)
    {
       
    }
}
