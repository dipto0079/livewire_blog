<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }
    public function render()
    {
        $data =['name'=>'test app','mno'=>'012222222222','data'=>'fhggggggggggggg'];
        return view('livewire.counter',['data'=>$data]);
    }
}
