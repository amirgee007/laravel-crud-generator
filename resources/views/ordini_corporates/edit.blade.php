@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Corporate
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordiniCorporate, ['route' => ['ordiniCorporates.update', $ordiniCorporate->id], 'method' => 'patch']) !!}

                        @include('ordini_corporates.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection