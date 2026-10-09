@extends('layouts.app')
@section('conteudo')
 
<div class="row">
    <div class="col-2">
        <img src="{{ asset('images/produtos/item.jpg') }}" alt="Produto 1" class="img-fluid" style="max-width: 100px; height: auto;">
    </div>
    <div class="col-10">
        <h2>Hamburguer Especial</h2>
        <p>Delicioso hamburguer artesanal feito com ingredientes frescos e selecionados.</p>
        <p><strong>Preço:</strong> R$ 25,00</p> 
    </div>
    <hr>
</div>

@endsection