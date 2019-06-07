<li class="{{ Request::is('enderecos*') ? 'active' : '' }}">
    <a href="{!! route('enderecos.index') !!}"><i class="fa fa-edit"></i><span>Enderecos</span></a>
</li>

<li class="{{ Request::is('fisicas*') ? 'active' : '' }}">
    <a href="{!! route('fisicas.index') !!}"><i class="fa fa-edit"></i><span>Fisicas</span></a>
</li>

<li class="{{ Request::is('juridicas*') ? 'active' : '' }}">
    <a href="{!! route('juridicas.index') !!}"><i class="fa fa-edit"></i><span>Juridicas</span></a>
</li>

