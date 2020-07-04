<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use Livewire\Component;

class Commnets extends Component
{

	public $comments  =[
		[
		
	'body'=>'	NATIONAL Tablighi Jamaat gathering: Clarify 
				blacklisting 3,500 foreign nationals, SC tells 
				govt',
     'created_at'=>'3 min ago',
     'creator'  =>'gulam',
     ]
   		
	];
	public $newCommnet;
	public function addCommnet()
	{
		array_unshift($this->comments, [
        'body'=>$this->newCommnet,
       'created_at'=>Carbon::now()->diffForHumans(),
        'creator'  =>'gulam',

		]);
		$this->newCommnet ="";
		
	}
    public function render()
    {
        return view('livewire.commnets');
    }
}
