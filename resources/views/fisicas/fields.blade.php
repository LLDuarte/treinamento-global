<!-- Endereco Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('endereco_id', 'Endereço:') !!}
    {!! Form::select('endereco_id', ['' => 'Selecione o endereço...'] + $enderecos, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-4">
    <label>Data de Nascimento:</label>

    <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
        </div>
        <input type="text" name="data_nascimento" class="form-control pull-right" id="datepicker" autocomplete="off" required>
    </div>
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cpf', 'CPF:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fisicas.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>
@endsection