@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Prodotti
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordiniProdotti, ['route' => ['ordiniProdottis.update', $ordiniProdotti->id], 'method' => 'patch']) !!}

                        @include('ordini_prodottis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection