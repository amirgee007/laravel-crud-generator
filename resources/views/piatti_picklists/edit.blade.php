@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Piatti Picklist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($piattiPicklist, ['route' => ['piattiPicklists.update', $piattiPicklist->id], 'method' => 'patch']) !!}

                        @include('piatti_picklists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection