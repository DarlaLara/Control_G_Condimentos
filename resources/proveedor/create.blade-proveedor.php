@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<script src="{{asset('js/proveedor.js')}}"></script>

   <h4 class="bg-dark text-white">Formulario De Registro</h4>
     <form action="{{route('proveedor.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <input type="text" name="prov_tipo" id="prov_tipo">
     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection
