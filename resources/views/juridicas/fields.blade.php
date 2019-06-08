<!-- Endereco Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('endereco_id', 'Endereco Id:') !!}
    {!! Form::select('endereco_id', ['' => 'Selecione o endereço...'] + $enderecos, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control', 'required']) !!}
</div>



<!-- Razao Social Field -->
<div class="form-group col-sm-4">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Abertura Field -->
<div class="form-group col-sm-4">
    <label>Data de Abertura:</label>

    <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
        </div>
        <input type="text" name="data_abertura" class="form-control pull-right" id="datepicker" autocomplete="off">
    </div>
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-3">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-3">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('juridicas.index') !!}" class="btn btn-default">Cancelar</a>
</div>


@section('scripts')
<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>
@endsection