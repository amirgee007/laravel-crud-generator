@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ordini Prodotti Evasi
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ordini_prodotti_evasis.show_fields')
                    <a href="{!! route('ordiniProdottiEvasis.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
