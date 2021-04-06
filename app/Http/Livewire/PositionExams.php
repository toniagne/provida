<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Frequency;
use App\Models\Position;
use App\Models\PositionExam;
use Livewire\Component;

class PositionExams extends Component
{
    public $table, $items, $component_title, $fields, $relationships ;
    public $isOpen = 0;
    /**
     * @var string[]
     */

    public function __construct($id = null)
    {
        $this->component_title = "Exames por Cargo";

        $this->table = new PositionExam();

        $this->relationships = [
            'exams'         => Exam::all(),
            'positions'     => Position::all(),
            'frequencies'   => Frequency::all()
        ];
    }

    public function render()
    {
        $this->items = $this->table->all();

        return view('registrations.position_exam.index');
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
            'id'                => '',
            'exam_id'           => '',
            'position_id'        => '',
            'admission'          => '',
            'admission_month'    => '',
            'periodical'         => '',
            'periodical_frequency_id'    => '',
            'change_position'    => '',
            'back_work'          => '',
            'dismission'         => ''
        ];

    }

    public function store()
    {
        $this->validate([
            'fields.exam_id' => 'required',
            'fields.position_id' => 'required'
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
