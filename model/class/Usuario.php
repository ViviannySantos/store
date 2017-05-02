<?php

require_once 'Persistencia.php'; //adicionando a classe Persistencia

class Usuario {

    private $cpf_cnpj = null;
    private $nome = null;
    private $telefone = null;
    private $estado = null;
    private $cidade = null;
    private $logradouro = null;
    private $numero = null;
    private $complemento = null;
    private $bairro = null;
    private $cep = null;
    private $email = null;
    private $senha = null;
    private $tipo_usuario = null;
    protected $persistencia = null;

    public function __construct() {

        $this->persistencia = new Persistencia();  //ao criar um objeto é também criado uma conexão
    }

    public function setCpfCnpj($cpf_cnpj) {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    public function getCpfCnpj() {
        return $this->cpf_cnpj;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setTipo($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }

    public function getTipo() {
        return $this->tipo_usuario;
    }

    public function logar($login, $senha) {

        if ($login == null && $senha == null) { //verificando se as variáveis estão nulas
            return null;
        } else {
            $this->persistencia->setTabela("usuario");
            $this->persistencia->setCondicao("email = '" . $login . "' AND senha='" . $senha . "'");
            $retorno = $this->persistencia->selecionarTudoComCondicao();

            if ($retorno) {




                //define variaveis de sessão
                $_SESSION['nome'] = $retorno['nome'];
                $_SESSION['tipo_usuario'] = $retorno['id_tipo_usuario'];

                //retorna o id de usuario para manter a sessão
                return $retorno['id_usuario'];
            } else {//caso nao haja retorno, é informado ao usuário a mensagem:
                echo "<script>alert('INFORME LOGIN E SENHA VÁLIDOS!');</script>";
                return 0;
            }
            die();
        }
    }

    public function cadastrarUsuario() {
        if ($this->nome == null || $this->email == null || $this->senha == null) {
            return null;
            echo "nulos";
        } else {
            $this->persistencia->setTabela("usuario");
            $this->persistencia->setCondicao(" cpf_cnpj = '" . $this->cpf_cnpj . "'");
            $retorno = $this->persistencia->selecionarTudoComCondicao();

            if ($retorno) {

                echo "<script>alert('CPF JÁ CADASTRADO!');</script>";
            } else {
                $this->persistencia->setTabela("endereco");
                $this->persistencia->setCampos("DEFAULT, '$this->logradouro', '$this->cep' , '$this->cidade','$this->estado', '$this->bairro', '$this->numero', '$this->complemento', 0, 0");
                $this->persistencia->setReturning(" id_endereco ");

                $retorno = $this->persistencia->inserirComReturning();
                $endereco = $retorno['id_endereco'];
                echo $endereco;


                if ($endereco != null) {
                    $this->persistencia->setTabela(" usuario ");
                    $this->persistencia->setCampos("DEFAULT, '" . $this->nome . "','" . $this->email . "', '" . $this->senha . "', " . $this->tipo_usuario . " , " . $endereco . ", '" . $this->cpf_cnpj . "', '" . $this->telefone . "'");
                    return $this->persistencia->inserir();
                }
            }
        }
    }

}

?>
