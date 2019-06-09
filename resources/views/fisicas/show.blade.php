@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ $fisica->nome }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fisicas.show_fields')
                    <a href="{!! route('fisicas.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
