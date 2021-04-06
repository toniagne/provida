<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Unity;

class Unities extends Component
{
    public $unities, $city, $unity, $unity_id, $owner;
    public $isOpen = 0;

    public function render()
    {
        $this->unities = Unity::all();
        return view('registrations.unity.index');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->city = '';
        $this->unity = '';
        $this->unity_id = '';
        $this->owner = '';
    }

    public function store()
    {
        $this->validate([
            'city' => 'required',
            'unity' => 'required',
            'owner' => 'required',
        ]);

        Unity::updateOrCreate(['id' => $this->unity_id], [
            'city' => $this->city,
            'unity' => $this->unity,
            'owner' => $this->owner,
        ]);

        session()->flash('message',
            $this->unity_id ? 'Cidade/Unidade alterada com sucesso!.' : 'Cidade/Unidade criada com sucesso !');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Unity::findOrFail($id);
        $this->unity_id = $id;
        $this->city = $post->city;
        $this->unity = $post->unity;
        $this->owner = $post->owner;

        $this->openModal();
    }

    public function delete($id)
    {
        Unity::find($id)->delete();
        session()->flash('message', 'Cidades / Unidades deletada com sucesso !');
    }

}
