<!-- Logradouro Field -->
<div class="form-group col-sm-12">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-4">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-4">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cep', 'CEP:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 8]) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-4">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Uf Field -->
<div class="form-group col-sm-2">
    {!! Form::label('uf', 'UF:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control', 'maxlength' => 2]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('enderecos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
