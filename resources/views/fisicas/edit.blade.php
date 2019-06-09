@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edição de cadastro - pessoa física
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fisica, ['route' => ['fisicas.update', $fisica->id], 'method' => 'patch']) !!}

                        @include('fisicas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection