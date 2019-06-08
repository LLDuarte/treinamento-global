<!-- Endereco Id Field -->
<div class="form-group">
    {!! Form::label('endereco_id', 'Endereço:') !!}
    <a href="{{ route('enderecos.show', $fisica->endereco->id) }}"><p>{!! $fisica->endereco->logradouro !!} - {!! $fisica->endereco->numero !!} <br> {!! $fisica->endereco->bairro !!}</p></a>
</div>

<!-- Data Nascimento Field -->
<div class="form-group">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    <p>{!! date_format($fisica->data_nascimento, 'd/m/Y') !!}</p>
</div>

<!-- Cpf Field -->
<div class="form-group">
    {!! Form::label('cpf', 'CPF:') !!}
    <p>{!! $fisica->cpf !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $fisica->email !!}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{!! $fisica->telefone !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Data de criação:') !!}
    <p>{!! date_format($fisica->created_at, 'd/m/Y à\s H\hs') !!}</p>
</div>

