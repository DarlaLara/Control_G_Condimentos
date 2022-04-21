@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar Categorias</h4>
    <form action="{{route('productos.update',$productos->pro_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <p>
     <input type="numbrer" value="{{$productos->pro_cantidad}}" name="pro_cantidad" id="pro_cantidad">
 </p>
 <p>
     <input type="date" value="{{$productos->pro_fecha}}" name="pro_fecha" id="pro_fecha">
     </p>
     <p>
      Ingreso:<input value="{{$productos->pro_tipo}}" id="pro_tipo" type="radio" name="pro_tipo" value="1">
        Egreso:<input value="{{$productos->pro_tipo}}" id="pro_tipo" type="radio" name="pro_tipo" value="0">
        </p>
        <p>
    <input type="text" value="{{$productos->pro_detalle}}" id="pro_detalle" 
   </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p>
     </form>
 </div>
</div>
@endsection
