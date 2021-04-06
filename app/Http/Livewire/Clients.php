<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\ClientType;
use App\Models\Employee;
use App\Models\Unity;
use Livewire\Component;

class Clients extends Component
{
    public $table, $items, $component_title, $fields, $relationships ;
    public $isOpen = 0;
    /**
     * @var string[]
     */

    public function __construct($id = null)
    {
        $this->component_title = "Clientes";

        $this->table = new Client();

        $this->relationships = [
            'client_types'    => ClientType::all(),
            'unities'         => Unity::all(),
            'employees'       => Employee::all()
        ];
    }

    public function render()
    {
        $this->items = $this->table->all();

        return view('registrations.clients.index');
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
            'id'              => '',
            'client_type_id'  => '',
            'unity_id'        => '',
            'employee_id'       => '',
            'name'          => '',
            'document'     => '',
            'phone'   => '',
            'address'   => '',
            'email'   => ''
        ];

    }

    public function store()
    {
        $this->validate([
            'fields.client_type_id' => 'required',
            'fields.unity_id' => 'required',
            'fields.employee_id' => 'required',
            'fields.name' => 'required',
        ]);

        $this->table->updateOrCreate(
            ['id' => $this->fields['id']],  $this->fields
        );

        session()->flash('message',
            $this->fields['id'] ? $this->component_title.' alterada com sucesso!.' : $this->component_title.' criada com sucesso !');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function passGenerate()
    {

        $this->fields['password'] = Str::random(6);;
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
