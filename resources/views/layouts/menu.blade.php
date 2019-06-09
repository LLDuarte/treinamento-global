<li class="{{ Request::is('enderecos*') ? 'active' : '' }}">
    <a href="{!! route('enderecos.index') !!}"><i class="fa fa-map-marker"></i><span>Endereços</span></a>
</li>

<li class="{{ Request::is('fisicas*') ? 'active' : '' }}">
    <a href="{!! route('fisicas.index') !!}"><i class="fa fa-user"></i><span>Pessoas Físicas</span></a>
</li>

<li class="{{ Request::is('juridicas*') ? 'active' : '' }}">
    <a href="{!! route('juridicas.index') !!}"><i class="fa fa-home"></i><span>Pessoas Juridicas</span></a>
</li>

