@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Dati Evasi Marco
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ordiniDatiEvasiMarcos.store']) !!}

                        @include('ordini_dati_evasi_marcos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
