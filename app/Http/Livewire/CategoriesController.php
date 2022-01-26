<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploas; //Se usa para subir imagenes - Trait
use Livewire\WithPagination;

class CategoriesController extends Component
{

    use WithFileUploas; //Se usa para subir imagenes
    use WithPagination;

    public $name, $search, $selected_id, $pagetitle, $componentName;
    private $pagination = 5;


    public function render()
    {
        $data = Categoria::all();
        return view('livewire.categories.categories', ['categories' => $data]);
    }
}
