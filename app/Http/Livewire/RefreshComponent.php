<?php

namespace App\Http\Livewire;

use Livewire\Component;
// Include RandomUserService service
use App\Services\RandomUserService;

class RefreshComponent extends Component
{
    public $data;

    public function mount()
    {
        // Initialize your data here        
        $this->data = $this->fecthData();
    }

    public function refreshData()
    {   
        // Retrieve or refresh data here
        $this->data = $this->fecthData();

        $this->emit('refreshComponent');
    }

    public function fecthData()
    {   
        // Retrieve or refresh data here
        // Call the fetchData method from the RandomUser service class
        $randomUserData = RandomUserService::fetchData();
        
        return collect($randomUserData['results'])->map(function ($item, $key) {
                    return [
                        'gender'=> $item['gender'],
                        'name'=> $item['name']['title'].' '.$item['name']['first'].' '.$item['name']['last'],
                        'city'=> $item['location']['city'],
                        'state'=> $item['location']['state'],
                        'country'=> $item['location']['country'],
                        'postcode'=> $item['location']['postcode'],
                        'email'=> $item['email'],
                        'phone'=> $item['phone'],
                        'picture'=> $item['picture']['thumbnail'],
                    ];
                })->first();
    }

    public function render()
    {
        return view('livewire.refresh-component');
    }
}
