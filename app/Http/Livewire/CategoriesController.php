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
    private $pagination = 3; //La cantidad de registros por paginación

    public function mount(){ //Este metodo se usa para iniciar propiedades
        $this->pagetitle='Listado';
        $this->componentName='Categoria';
        //$this->search='a';
    }

    public function paginationView() //Paginacion personalizada
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        if ( strlen($this->search) > 0 ) {
            $data = Categoria::where('nombre', 'like', '%'.$this->search.'%' )->paginate($this->pagination);
        }else{
            $data = Categoria::orderBy('id', 'asc')->paginate($this->pagination);
        }
        

        return view('livewire.categories.categories', ['categories' => $data]);
        //Acá tambien llama a la plantilla y seleciona el yield
    }
}
