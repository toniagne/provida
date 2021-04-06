<?php

namespace App\Http\Livewire;

use App\Models\ClientType;
use Illuminate\Support\Str;
use Livewire\Component;

class ClientTypes extends Component
{
    public $table, $items, $component_title, $fields, $relationships;
    public $isOpen = 0;
    /**
     * @var string[]
     */

    public function __construct($id = null)
    {
        $this->component_title = "Tipo de Clientes";

        $this->table = new ClientType();
    }

    public function render()
    {
        $this->items = $this->table->all();

        return view('parameters.client_type.index');
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

        $this->fields = [
            'id'        => '',
            'name'  => '',
            'risk'  => '',
            'work_hour'  => ''
        ];

    }

    public function store()
    {
        $this->validate([
            'fields.name' => 'required',
            'fields.risk' => 'required',
            'fields.work_hour' => 'required'
        ]);

        $this->table->updateOrCreate(
            ['id' => $this->fields['id']],  $this->fields
        );

        session()->flash('message',
            $this->fields['id'] ? $this->component_title.' alterada com sucesso!.' : $this->component_title.' criada com sucesso !');

        $this->closeModal();
        $this->resetInputFields();
    }


    public function edit($id)
    {
        $post = $this->table->findOrFail($id)->toArray();
        $this->fields['id'] = $id;

        $this->fields = $post;

        $this->openModal();
    }

    public function delete($id)
    {
        $this->table->find($id)->delete();
        session()->flash('message', $this->component_title . ' deletada com sucesso !');
    }
}
