<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads; //Se usa para subir imagenes - Trait
use Livewire\WithPagination;

class CategoriesController extends Component
{

    use WithFileUploads; //Se usa para subir imagenes
    use WithPagination;

    public $nombre, $search, $selected_id, $pagetitle, $componentName;
    private $pagination = 5;

    public function mount(){ //Este metodo se usa para iniciar propiedades
        $this->pagetitle='Listado';
        $this->componentName='Categorias';
    }

    public function render()
    {
        $data = Categoria::all();
        return view('livewire.categories.categories', ['categories' => $data]);
        //Acá tambien llama a la plantilla y seleciona el yield
    }
    public function Edit($id)
    {
        $record = Categoria::find($id, ['id','nombre']);
        $this -> nombre = $record->name;
        $this -> selected_id = $record->id;

        $this -> emit('show-modal', 'show modal!');
        
    }




    public function Update()
    {
       $rules = [
           'nombre'=> "required|unique:categoria,nombre,{$this->selected_id}"
       ];
       $message =[
        'nombre.required'=>'Nombre de categoría requerido',
        'nombre.unique'=>'El nombre de la categoría ya existe'
       ];
       $this->validate($rules, $message);
       $category = Categoria::find($this->selected_id);
       $category = update([
        'nombre' => $this->nombre
       ]);
       $this->resetUI();
       $this->emit('category-updated', 'Categoria Actualizada');
    }  
}
