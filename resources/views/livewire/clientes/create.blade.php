<form>
    <div class="form-group">
        <label for="NomeCliente">Nome:</label>
        <input type="text" class="form-control" id="NomeCliente" placeholder="Digite o Nome" wire:model="NomeCliente" maxlength="100">
        @error('NomeCliente') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="CPF">CPF:</label>
        <input type="number" class="form-control" id="CPF" placeholder="Digite o CPF" wire:model="CPF"  maxlength="11" minlength="11">
        @error('CPF') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="EMAIL">EMAIL:</label>
        <input type="email" class="form-control" id="EMAIL" placeholder="Digite o EMAIL" wire:model="EMAIL">
        @error('EMAIL') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <br />
    <button wire:click.prevent="store()" class="btn btn-success">Cadastrar</button>
</form>

