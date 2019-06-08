<!-- Endereco Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_id', 'Endereco Id:') !!}
    {!! Form::select('endereco_id', ['' => 'Selecione o endereço...'] + $enderecos, null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control']) !!}
</div>

<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Abertura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_abertura', 'Data Abertura:') !!}
    {!! Form::text('data_abertura', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('juridicas.index') !!}" class="btn btn-default">Cancel</a>
</div>
