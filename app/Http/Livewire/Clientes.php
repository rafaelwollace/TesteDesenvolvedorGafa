<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Clientes as CliModel;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 20, $search;
    public $NomeCliente, $CPF, $EMAIL, $cli_id;
    public $is_update = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function render()
    {
        $clientes =  $this->search === null
            ? CliModel::latest()->paginate($this->paginate)
            : CliModel::latest()->where('NomeCliente', 'like', '%' . $this->search . '%')
            ->orWhere('EMAIL', 'like', '%' . $this->search . '%')
            ->orWhere('CPF', 'like', '%' . $this->search . '%')->paginate($this->paginate);

        return view('livewire.clientes.cliente', compact('clientes'));
    }

    private function clearForm()
    {
        $this->NomeCliente = '';
        $this->CPF = '';
        $this->EMAIL = '';
    }

    public function store()
    {
        $validated = $this->validate([
            'NomeCliente' => 'required|max:100',
            'CPF' => 'required|min:11|max:11',
            'EMAIL' => 'required|email',
        ]);

        CliModel::create($validated);

        session()->flash('message', 'Cadastro relizado com Sucesso!!!');

        $this->clearForm();
    }

    public function edit($id)
    {
        $clientes = CliModel::where('id', $id)->first();

        $this->is_update = true;
        $this->cli_id = $id;
        $this->NomeCliente = $clientes->NomeCliente;
        $this->CPF = $clientes->CPF;
        $this->EMAIL = $clientes->EMAIL;
    }

    public function cancel()
    {
        $this->is_update = false;
        $this->clearForm();
    }

    public function update()
    {

        $data =  $this->validate([
            'NomeCliente' => 'required',
            'CPF' => 'required',
            'EMAIL' => 'required|email',
        ]);

        CliModel::whereId($this->cli_id)->update($data);

        $this->is_update = false;
        $this->clearForm();

        session()->flash('message', 'Cliente Atualizado com Sucesso!!!');
    }

    public function delete($id)
    {
        $clientes = CliModel::findOrFail($id);
        $clientes->delete();
        session()->flash('message', 'Cliente Deletado com Sucesso!!!');
    }
}
