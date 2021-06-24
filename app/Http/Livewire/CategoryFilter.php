<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

use Livewire\WithPagination;



class CategoryFilter extends Component
{

    use WithPagination;

    public $category;

    public $subcategoria;

    public $marca;

    public $view = "grid";

    public function limpiar(){
        $this->reset(['subcategoria','marca']);
    }

    public function render()
    {
        // $products = $this->category->products()->where('status',2)->paginate(20);


        //Consulta
        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query){
            $query->where('id', $this->category->id);
        });

        

        if($this->subcategoria){

            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('name', $this->subcategoria);
            });

            
        }


        if($this->marca){

            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query){
                $query->where('name', $this->marca);
            });

            
        }

        

        //Coleccion
        $products = $productsQuery->paginate(20);

        // echo getType($products).PHP_EOL;
        // var_dump($products).PHP_EOL;
        // die();

        return view('livewire.category-filter',compact('products'));
    }
}
