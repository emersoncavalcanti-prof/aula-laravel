<?php

namespace App\Livewire;

use App\Models\Empresa;
use App\Models\User;
use Livewire\Component;

class CadastroComponent extends Component
{
    public $razao_social;
    public $whatsapp;
    public $nome;
    public $email;
    public $senha;     


    public function cadastrar()
    {
        $this->validate([
            'razao_social' => 'required',
            'nome' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'senha' => 'required|min:8',
        ]);

        $empresa = Empresa::create([
            'razao_social' => $this->razao_social,
            'nome' => $this->nome,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'senha' => bcrypt($this->senha),
        ]);

        User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => bcrypt($this->senha),
            'empresa_id' => $empresa->id,
        ]);

        // Após o cadastro, você pode redirecionar ou exibir uma mensagem de sucesso
        session()->flash('message', 'Cadastro realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.cadastro-component');
    }
}
