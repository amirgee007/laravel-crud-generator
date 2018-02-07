@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Menu Settimanale
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($menuSettimanale, ['route' => ['menuSettimanales.update', $menuSettimanale->id], 'method' => 'patch']) !!}

                        @include('menu_settimanales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection