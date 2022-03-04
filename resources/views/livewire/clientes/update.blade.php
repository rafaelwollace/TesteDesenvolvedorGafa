<form>
    <div class="form-group">
        <input type="hidden" wire:model="cli_id">
        <label for="NomeCliente">Name</label>
        <input type="text" class="form-control" wire:model="NomeCliente" id="NomeCliente" placeholder="Enter Name">
        @error('NomeCliente') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="CPF">CPF</label>
        <input type="text" class="form-control" wire:model="CPF" id="CPF" placeholder="Enter CPF">
        @error('CPF') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="EMAIL">Email address</label>
        <input type="EMAIL" class="form-control" wire:model="EMAIL" id="EMAIL" placeholder="Enter Email">
        @error('EMAIL') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-success">Alterar</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
</form>