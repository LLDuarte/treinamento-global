@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Juridica
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($juridica, ['route' => ['juridicas.update', $juridica->id], 'method' => 'patch']) !!}

                        @include('juridicas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection