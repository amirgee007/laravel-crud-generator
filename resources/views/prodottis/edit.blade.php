@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prodotti
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prodotti, ['route' => ['prodottis.update', $prodotti->id], 'method' => 'patch']) !!}

                        @include('prodottis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection