<?php 

class Usuario{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }
    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($value){
        $this->dtcadastro = $dtcadastro;
    }


    public function loadbyid($id){

        $sql = new Sql();
        $results = $sql->select("select * from tm_usuarios where idusuario = :ID", array(":ID"=>$id));

        if (isset($results[0])){

            $row = $results[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']); 
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    public static function getList(){
        $sql = new sql();

        $sql->select("select from tm_usuarios order by deslogin;");
    }

    public static function search($login){
        $sql = new Sql();
        return $sql->select("select from tm_usuarios where deslogin like :SEARCH order by deslogin", array (
            'SEARCH'=>"%".login."%"
        ));
    } 

    public function login($login, $password){

        $sql = new Sql();
        $results = $sql->select("select * from tm_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));
        if (isset($results[0])){

            
            
            $this->setData($results[0]);
        }
        else{
            throw new Exception("Login e/ou senha inválidos.");
        }

    }

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']); 
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }




    public function insert(){

        $sql = new sql();
        $sql->select("");
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()

        if (count($results)> 0){
            $this->setData($results[0]);
        }
        ))
    }

    public function update($login, $password){
        $this->setDeslogin($login);
        $this->setDessenha($password);
        $sql = new Sql();
        $sql->query("UPDATE tm_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin();
            ':PASSWORD'=>$this->getDessenha();
            ':ID'=>$this->getIdusuario();
        ))
    }

    public function delete(){

        $sql = new Sql();
        $sql->query("DELETE FROM tm_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()

        ));

        $this->setIdusuario(0);
        $this->setDessenha("");
        $this->setDesLogin("");
        $this->setDtcadastro(new DateTime());
    }













    public function __construct($login = "", $password = ""){
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->formate("d/m/Y H:i:s")
        ))
    }




}













?>