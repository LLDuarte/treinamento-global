<!-- Logradouro Field -->
<div class="form-group">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    <p>{!! $endereco->logradouro !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{!! $endereco->numero !!}</p>
</div>

<!-- Complemento Field -->
<div class="form-group">
    {!! Form::label('complemento', 'Complemento:') !!}
    <p>{!! $endereco->complemento !!}</p>
</div>

<!-- Cep Field -->
<div class="form-group">
    {!! Form::label('cep', 'Cep:') !!}
    <p>{!! $endereco->cep !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $endereco->bairro !!}</p>
</div>

<!-- Municipio Field -->
<div class="form-group">
    {!! Form::label('municipio', 'Municipio:') !!}
    <p>{!! $endereco->municipio !!}</p>
</div>

<!-- Uf Field -->
<div class="form-group">
    {!! Form::label('uf', 'UF:') !!}
    <p>{!! $endereco->uf !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Data de criação:') !!}
    <p>{!! date_format($endereco->created_at, 'd/m/Y à\s H\hs') !!}</p>
</div>

