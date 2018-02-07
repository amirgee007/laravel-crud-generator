@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preferenze Ut Piatti
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('preferenze_ut_piattis.show_fields')
                    <a href="{!! route('preferenzeUtPiattis.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
