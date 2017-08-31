@include('head')

<div class="services">

    <div class="container">
        <h1 class="title">Orçamento</h1>
        <p>Preencha corretamente o formulário abaixo e clique em enviar, entraremos em contato o mais rápido possível:</p>

        <form name="orcamento" method="post" class="form-group top-fix" action="javascript:;" enctype="multipart/form-data">
            <div class="row">

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Tipo de Serviço</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Escolha o Formato</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Qual tipo de subtrato</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Quantidade</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Cores</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Escolha Laminaçao</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Escolha Acabamento</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Largura (mm)</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Comprimento (mm)</label>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label>Empresa</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label>Seu Nome</label>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Cidade</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>UF</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label>Mensagem</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label>Arquivo (PDF &bull; JPG &bull; PNG)</label>
                        <input type="file" class="form-control">
                    </div>

                </div>

                <div class="form-group form-group-lg">
                    <input type="submit" class="btn btn-orcamento" name="envia" value="Enviar">
                </div>
            </div>
        </form>

    </div>
</div>

@include('footer')