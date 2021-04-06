<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Frequency;
use App\Models\Unity;
use Livewire\Component;

class Exams extends Component
{
    public $table, $table_id, $name, $frequency_id, $unity_id, $amount, $frequencies, $unities, $component_title;
    public $isOpen = 0;

    public function __construct($id = null)
    {
        $this->component_title  = "Exames";
        $this->frequencies      = Frequency::all();
        $this->unities          = Unity::all();
    }

    public function render()
    {
        $this->table = Exam::all();
        return view('registrations.exam.index');
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
        $this->frequency_id = '';
        $this->unity_id = '';
        $this->amount = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'frequency_id' => 'required',
            'unity_id' => 'required',
            'amount' => 'required',
        ]);

        Exam::updateOrCreate([
            'id'            => $this->table_id], [
            'name'          => $this->name,
            'frequency_id'  => $this->frequency_id,
            'unity_id'      => $this->unity_id,
            'amount'        => $this->amount,
        ]);

        session()->flash('message',
            $this->table_id ? $this->component_title.' alterada com sucesso!.' : $this->component_title.' criada com sucesso !');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Exam::findOrFail($id);
        $this->table_id = $id;
        $this->name = $post->name;
        $this->frequency_id = $post->frequency_id;
        $this->unity_id = $post->unity_id;
        $this->amount = $post->amount;

        $this->openModal();
    }

    public function delete($id)
    {
        Exam::find($id)->delete();
        session()->flash('message', $this->component_title . ' deletada com sucesso !');
    }
}
