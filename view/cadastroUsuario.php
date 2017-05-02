<?php
require_once 'header.php';
?>

<div class="container">
    <div class="align-form">
        <h3 class="panel-heading">Cadastro do usuário</h3>
        <form id="iFormCadastroCliente" name="nformCadastroCliente" action="../controller/cadastrarUsuario.php" method="post">
            <fieldset id="fsDadosPessoa">
                <legend>Dados Pessoais:</legend>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inomeUsuario">Nome</label>
                            <input type="text" id="iNomeUsuario" name="nNomeUsuario"
                                   size="44" required="required" name="text" />
                        </div>
                    </div>                          
                </div>
                <div class="row">                          
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="icpf">CPF &nbsp; &nbsp;</label>
                            <input type="text" id="iCpf" name="ncpf" maxlength="14" size="22"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="iTel">Tel.:</label>
                            <input type="text" id="iTel" name="ntel" maxlength="12" title="Digite o n�mero do seu telefone." />
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset id="fsLogradouro">
                <legend>Endereço</legend>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="iEstado">Estado</label>
                            <select id="estado" name="estado">
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
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="iCidade">Cidade</label>
                            <input type="text" id="iCidade"	name="nCidade" size="28"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="iCep">CEP:</label>
                            <input type="text" id="iCep" name="nCep" size="9" maxlength="9" time="Digite o seu CEP" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iLogradouro">Logradouro:</label>
                            <input type="text" id="iLogradouro" name="nLogradouro" size="28" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iNum">N°:</label>
                            <input id="iNum" type="number" name="nNum" min="0" max="99999" /><br /> <br />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iComplemento">Complemento:</label>
                            <input id="iComplemento" type="text" name="nComplemento" size="30" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iBairro">Bairro:</label>
                            <input id="iBairro" type="text" name="nBairro" size="30" /><br />
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset id="fsLogin">
                <legend>Login:</legend>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iEmail">E-mail</label> <br />
                            <input type="email" id="iEmail" name="nEmail" size="44" required="required" class="input-text" name="email"  /><br />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="iSenha1">Senha</label> <br />
                            <input type="password" id="iSenha1" name="nSenha1" size="22" maxlength="20" required title="Senha" /><br />
                        </div>
                    </div>
                </div>
            </fieldset>
            <input type="hidden" id="categoriausuario" name="categoriausuario" value="1"/>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type=submit id="iBotaoConfimar" class="btn btn-success" value="Salvar" />
                        <input type="reset" id="iBotaoLimpar" class="btn btn-default" value="Limpa" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'footer.php';
?>
