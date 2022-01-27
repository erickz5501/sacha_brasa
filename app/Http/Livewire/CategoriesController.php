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

    public $name, $search, $selected_id, $pagetitle, $componentName;
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
}
