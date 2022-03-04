<div>
        
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    @if($is_update)
        @include('livewire.clientes.update')
    @else
        @include('livewire.clientes.create')
    @endif

    @include('livewire.componentes.search')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CPF</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->NomeCliente }}</td>
                    <td>{{ $row->EMAIL }}</td>
                    <td>{{ $row->CPF }}</td>
                    <td>
                    <button wire:click="edit({{ $row->id }})" class="btn btn-primary btn-sm">Alterar</button>
                    <button wire:click="delete({{ $row->id }})" class="btn btn-danger btn-sm">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="d-flex">
        {{ $clientes->links() }}
    </div>
</div>