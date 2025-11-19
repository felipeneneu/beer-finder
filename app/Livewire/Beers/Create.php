<?php

namespace App\Livewire\Beers;

use App\Livewire\Forms\BeerForm;
use Livewire\Component;

class Create extends Component
{

    public BeerForm $form;


    public function save()
    {
        try {
            $beer = $this->form->store();
            return redirect(route('beers.index'))->success("{$this->form->name} criada com sucesso!");
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.beers.create');
    }
}
