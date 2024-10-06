<?php

namespace App\Livewire;

use Livewire\WithPagination;

use Livewire\Component;

use App\Models\Student;
use Livewire\Attributes\Title;

#[Title('Crud')]

class Tutorial extends Component

{
    use WithPagination;
    public $name;
    public $email;
    public $phone;
    public $student;
    public $ids;
    public $destroy;
    public $counter;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }


    public function save()
    {
        $this->validate();
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->save();
        // $validate = $this->validate([
        //     "name" => "required|min:3",
        //     'email' => 'required|email',
        //     'phone' => 'required'

        // ]);
        // Student::create($validate);


        $this->reset();
        $this->mount();
        $this->dispatch('close-modal');
    }

    public function mount()
    {

        $this->student = Student::all();
    }
    public function delete($id)
    {
        $this->destroy = $id;


        // $this->mount();
    }
    public function destroystudent()
    {
        Student::find($this->destroy)->delete();
        $this->mount();
        $this->dispatch('close-modal');
    }



    public function update($id)
    {
        $updateid = Student::find($id);
        $this->ids = $updateid->id;
        $this->name = $updateid->name;
        $this->email = $updateid->email;
        $this->phone = $updateid->phone;
    }
    public function updateme()
    {
        $updateid = Student::find($this->ids);
        $updateid->name = $this->name;
        $updateid->email = $this->email;
        $updateid->phone = $this->phone;
        $updateid->save();
        $this->reset();

        $this->mount();
        $this->dispatch('close-modal');
    }


    public function increament()
    {
        $this->counter++;
    }


    public function render()
    {

        return view('livewire.tutorial');
    }
}
