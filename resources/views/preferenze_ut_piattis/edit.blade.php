@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preferenze Ut Piatti
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($preferenzeUtPiatti, ['route' => ['preferenzeUtPiattis.update', $preferenzeUtPiatti->id], 'method' => 'patch']) !!}

                        @include('preferenze_ut_piattis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection