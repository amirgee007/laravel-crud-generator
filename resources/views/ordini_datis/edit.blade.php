@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Dati
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordiniDati, ['route' => ['ordiniDatis.update', $ordiniDati->id], 'method' => 'patch']) !!}

                        @include('ordini_datis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection