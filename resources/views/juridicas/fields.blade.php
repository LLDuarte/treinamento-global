<!-- Cnpj Field -->
<div class="form-group col-sm-3">
    {!! Form::label('cnpj', 'CNPJ:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control cnpj', 'autocomplete' => 'off', 'maxlength' => 14]) !!}
</div>

<!-- Endereco Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('endereco_id', 'Endereço:') !!}
    {!! Form::select('endereco_id', ['' => 'Selecione o endereço...'] + $enderecos, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control nome_fantasia', 'required']) !!}
</div>

<!-- Razao Social Field -->
<div class="form-group col-sm-4">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control razao_social']) !!}
</div>

<!-- Data Abertura Field -->
<div class="form-group col-sm-4">
    <label>Data de Abertura:</label>

    <div class="input-group date">
        <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('data_abertura', null, ['class' => 'form-control pull-right data_abertura', 'id' => 'datepicker', 'autocomplete' => 'off']) !!}
    </div>
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-3">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control telefone']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control email']) !!}
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

    $(".cnpj").change(function() {

        let cnpj = $('.cnpj').val();

        var request = $.ajax({
            url: "/api/juridicas/get-cnpj",
            datatype: "json",
            data: {cnpj},
            method: "POST"
        });

        request.done(function(response) {
            console.log(response);
            if('message' in response) {
                alert('CNPJ não consta na base da dados');
                $('.nome_fantasia').val(''); 
                $('.razao_social').val(''); 
                $('.telefone').val(''); 
                $('.email').val(''); 
                $('.data_abertura').val(''); 
            } else {
                $('.nome_fantasia').val(response.fantasia); 
                $('.razao_social').val(response.nome); 
                $('.telefone').val(response.telefone); 
                $('.email').val(response.email); 
                $('.data_abertura').val(response.abertura); 
            }
        });

        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: ", textStatus );
            alert("Houve um erro com sua solicitação.");
        });
    });


    </script>
@endsection
