<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderFilter extends Component
{
    public $order = 'asc';

    protected $queryString = ['order'];

    public function orderFilter($newOrder){

        $this->order = $newOrder;

        return redirect()->route('posts.index',[
            'order' => $this->order
        ]);
    }

    public function render()
    {
        return view('livewire.order-filter');
    }
}
