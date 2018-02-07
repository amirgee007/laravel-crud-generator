@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preferenze Ut Attributi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'preferenzeUtAttributis.store']) !!}

                        @include('preferenze_ut_attributis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
