<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
class Service extends Model
{
   
   public function articulos($idcategoria = ''){
   	//empty Devuelve FALSE si var existe y tiene un valor no vacío, distinto de cero. De otro modo devuelve TRUE.

   		if (empty($idcategoria)) {
   			$articulos = Articulo::join('categorias','articulos.idcategoria','=','categorias.id')
            	->select('articulos.id','articulos.codigo','articulos.nombre','categorias.nombre as nombre_categoria','articulos.precio_venta','articulos.stock','articulos.descripcion','articulos.condicion')
            	->orderBy('articulos.id', 'desc')->get();
               return $articulos;
   		}else{
   			$articulos = Articulo::join('categorias','articulos.idcategoria','=','categorias.id')
            	->select('articulos.id','articulos.codigo','articulos.nombre','categorias.nombre as nombre_categoria','articulos.precio_venta','articulos.stock','articulos.descripcion','articulos.condicion')
            	->orderBy('articulos.id', 'desc')
            	->where('categorias.id','=',$idcategoria)
            	->get();

            return $articulos;
   		}
   }
}
