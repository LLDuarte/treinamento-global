@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ $juridica->nome_fantasia }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('juridicas.show_fields')
                    <a href="{!! route('juridicas.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
