<div>


    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Preencha o formulário</h4>
                            <p class="card-text">Voltar para o <a href="./">login</a>.</p>
                            <form wire:submit="cadastrar" class="space-y-5">

                                <p>
                                    <label>Nome da Empresa</label>
                                    <input type="text" wire:model="razao_social" class="form-control">
                                    @error('razao_social') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>

                                <p>
                                    <label>Whatsapp</label>
                                    <input type="text" wire:model="whatsapp" class="form-control">
                                    @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>

                                <p>
                                    <label>Seu nome</label>
                                    <input type="text" wire:model="nome" class="form-control">
                                    @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>

                                <p>
                                    <label>Email</label>
                                    <input type="email" wire:model="email" class="form-control">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p>
                                    <label>Senha</label>
                                    <input type="password" wire:model="senha" class="form-control">
                                    @error('senha') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                
                                <p>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </p>

                            </form>
                        </div>
                        </div>
                    </div>
                </div>


</div>
