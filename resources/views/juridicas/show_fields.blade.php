<!-- Endereco Id Field -->
<div class="form-group">
    {!! Form::label('endereco_id', 'Endereço:') !!}
    <a href="{{ route('enderecos.show', $juridica->endereco->id) }}"><p>{!! $juridica->endereco->logradouro !!} - {!! $juridica->endereco->numero !!} <br> {!! $juridica->endereco->bairro !!}</p></a>
</div>

<!-- Razao Social Field -->
<div class="form-group">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    <p>{!! $juridica->razao_social !!}</p>
</div>

<!-- Data Abertura Field -->
<div class="form-group">
    {!! Form::label('data_abertura', 'Data Abertura:') !!}
    <p>{!! date_format($juridica->data_abertura, 'd/m/Y') !!}</p>
</div>

<!-- Cnpj Field -->
<div class="form-group">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    <p>{!! $juridica->cnpj !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $juridica->email !!}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{!! $juridica->telefone !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Data de cadastro:') !!}
    <p>{!! date_format($juridica->created_at, 'd/m/Y à\s H\hs') !!}</p>
</div>

