<?php

namespace App\Http\Livewire;

use App\Models\Position;
use Livewire\Component;

class Positions extends Component
{
    public $table, $table_id, $name, $cod, $description, $component_title;
    public $isOpen = 0;

    public function __construct($id = null)
    {
       $this->component_title = "Cargos";
    }

    public function render()
    {
        $this->table = Position::all();
        return view('registrations.position.index');
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
        $this->name = '';
        $this->cod = '';
        $this->description = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'cod' => 'required',
            'description' => 'required',
        ]);

        Position::updateOrCreate(['id' => $this->table_id], [
            'name' => $this->name,
            'cod' => $this->cod,
            'description' => $this->description,
        ]);

        session()->flash('message',
            $this->table_id ? $this->component_title.' alterada com sucesso!.' : $this->component_title.' criada com sucesso !');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Position::findOrFail($id);
        $this->table_id = $id;
        $this->name = $post->name;
        $this->cod = $post->cod;
        $this->description = $post->description;

        $this->openModal();
    }

    public function delete($id)
    {
        Position::find($id)->delete();
        session()->flash('message', $this->component_title . ' deletada com sucesso !');
    }
}
