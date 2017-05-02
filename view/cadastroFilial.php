<?php
require_once 'header.php';
?>
<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" id="iFormCadastroFilial" name="nformCadastroFilial" action="../controller/cadastrarUsuario.php" method="post">
            <input type="hidden" id="categoriausuario" name="categoriausuario" value="3"/>
            <div class="page-header">
                <h3>Dados da Filial</h3>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nNomeUsuario" placeholder="Nome da filial">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">CNPJ:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="ncpf" placeholder="CNPJ" id="cnpj">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Telefone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Telefone" name="ntel" id="telefone">
                </div>
            </div>
            <div class="page-header">
                <h3>Endereço</h3>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Estado:</label>
                <div class="col-sm-10">
                    <select id="estado" name="estado" class="form-control">
                        <option id="iOpcao" value="opcao" selected disabled>--</option>
                        <option id="iac" value="ac">AC</option>
                        <option id="ial" value="al">AL</option>
                        <option id="iap" value="ap">AP</option>
                        <option id="iam" value="am">AM</option>
                        <option id="iba" value="ba">BA</option>
                        <option id="ice" value="ce">CE</option>
                        <option id="idf" value="df">DF</option>
                        <option id="ies" value="es">ES</option>
                        <option id="igo" value="go">GO</option>
                        <option id="ima" value="ma">MA</option>
                        <option id="ims" value="ms">MS</option>
                        <option id="imt" value="mt">MT</option>
                        <option id="img" value="mg">MG</option>
                        <option id="ipa" value="pa">PA</option>
                        <option id="ipb" value="pb">PB</option>
                        <option id="ipr" value="pr">PR</option>
                        <option id="ipe" value="pe">PE</option>
                        <option id="ipi" value="pi">PI</option>
                        <option id="irj" value="rj">RJ</option>
                        <option id="irn" value="rn">RN</option>
                        <option id="irs" value="rs">RS</option>
                        <option id="iro" value="ro">RO</option>
                        <option id="irr" value="rr">RR</option>
                        <option id="isc" value="sc">SC</option>
                        <option id="isp" value="sp">SP</option>
                        <option id="ise" value="se">SE</option>
                        <option id="ito" value="to">TO</option>
                    </select>                            
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Cidade:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Cidade" id="cidade" name="nCidade">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">CEP:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="CEP" id="cep" name="nCep">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Logradouro:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Logradouro" id="logradouro" name="nLogradouro">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Número:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="numero" id="numero" name="nNum">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Bairro:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Bairro" id="bairro" name="nBairro">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Complemento:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Complemento" id="complemento" name="nComplemento">
                </div>
            </div>
            <div class="page-header">
                <h3>Login</h3>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Email" id="email" name="nEmail">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Senha:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control"  placeholder="Senha" id="senha" name="nSenha1">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'footer.php';
?>
