<?php

namespace App\Http\Livewire;

use App\Models\Matter;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Materia extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $pageTitle, $componentName, $selected_id, $name, $grade, $course, $search;

    public function mount(){
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'MATERIAS';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'destroy' => 'Destroy'
    ];

    public function render()
    {
        if (strlen($this->search) > 0) {
            $data = Matter::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        } else {
            $data = Matter::orderBy('id', 'desc')->paginate(5);
        }
        // $matters = Matter::orderBy('id', 'desc')->paginate(5);
        return view('livewire.materia.materia', ['matters' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    } 
    
    public function store(){
        $rules = [
            'name' => 'required|unique:matters|min:3',
        ];
        $messages = [
            'name.required' => 'Nombre de la Materia es requerido',
            'name.unique' => 'El nombre de la Materia ya existe',
            'name.min' => 'EL nombre de la Materia debe tener al menos 3 caracteres'
        ];
        $this->validate($rules, $messages);
        Matter::create([
            'name' => $this->name,
            'course' => 'Séptimo',
            'grade' => 'Primaria'
        ]);
        $this->resetUI();
        $this->emit('materia-added', 'Materia Agregada');
    }
    public function show($id)
    {
        $matter = Matter::find($id, ['id', 'name', 'course', 'grade']);
        $this->name = $matter->name;
        $this->course = $matter->course;
        $this->grade = $matter->grade;
        $this->emit('show-matter', 'Show Modal!!');
    }

    public function edit($id){
        $matter = Matter::find($id, ['id', 'name', 'course', 'grade']);
        $this->name = $matter->name;
        $this->selected_id = $matter->id;
        $this->resetValidation();
        $this->emit('show-modal', 'Show Modal!!');
    }
    public function update()
    {
        $rules = [
            'name' => "required|unique:matters,name,{$this->selected_id}|min:3",
        ];
        $messages = [
            'name.required' => 'Nombre de la Materia es requerido',
            'name.unique' => 'El nombre de la Materia ya existe',
            'name.min' => 'EL nombre de la Materia debe tener al menos 3 caracteres'
        ];
        $this->validate($rules, $messages);
        $matter = Matter::find($this->selected_id);
        $matter->update([
            'name' => $this->name,
        ]);
        $this->resetUI();
        $this->emit('materia-updated', 'Materia Actualizada');
    }

    public function Destroy(Matter $matter)
    {
        $matter->delete();
        $this->resetUI();
        $this->emit('matter-deleted', 'Materia Eliminada');
    }

    public function resetUI(){
        $this->name = '';
        $this->selected_id = 0;
        $this->resetValidation();
    }
}