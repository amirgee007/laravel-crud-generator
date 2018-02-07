@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Prodotti Evasi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordiniProdottiEvasi, ['route' => ['ordiniProdottiEvasis.update', $ordiniProdottiEvasi->id], 'method' => 'patch']) !!}

                        @include('ordini_prodotti_evasis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection