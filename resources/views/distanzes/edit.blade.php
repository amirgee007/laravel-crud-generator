@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Distanze
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($distanze, ['route' => ['distanzes.update', $distanze->id], 'method' => 'patch']) !!}

                        @include('distanzes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection