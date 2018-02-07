@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preferenze Ut Attributi Tutti
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($preferenzeUtAttributiTutti, ['route' => ['preferenzeUtAttributiTuttis.update', $preferenzeUtAttributiTutti->id], 'method' => 'patch']) !!}

                        @include('preferenze_ut_attributi_tuttis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection