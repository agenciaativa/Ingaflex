@include('head')

<div class="services">

    <div class="container">

        <h1 class="title">Contato</h1>

        <form name="orcamento" method="post" action="javascript:;" enctype="multipart/form-data">

            <div class="row">

                <div class="form-group form-group-lg">
                    <div class="col-md-4 col-sm-12 col-xs-12 col-ingaflex">
                        <label>Nome</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 col-ingaflex">
                        <label>E-mail</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 col-ingaflex">
                        <label>Departamento</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group form-group-lg form-ingaflex">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Mensagem</label>
                        <textarea class="form-control"></textarea>
                    </div>

                </div>

                <div class="form-group-btn form-group-lg">
                    <input type="submit" class="btn btn-orcamento align-right" name="envia" value="Enviar">
                </div>

            </div>
        </form>


        <p class="center address">Rua Massuo yoshiy • 4522 • Gleba Patrimônio • Marialva - PR • Cep 86990-000 • <small><span>44</span> 3125-4000</small></p>

    </div>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7318527367884!2d-51.8233676844595!3d-23.470134984728215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecc4e4cf467bdf%3A0x8c46488699fba35d!2sINGAFLEX+-+R%C3%B3tulos+e+Etiquetas!5e0!3m2!1spt-BR!2sbr!4v1501707899728" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
@include('footer')