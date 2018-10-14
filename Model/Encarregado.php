<?php

class Encarregado
{
    private $id_encarregado;
    private $nome;
    private $matricula;
    private $turno;
    private $setor;
    private $telefone;    

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function setId_encarregado($id_encarregado){
        $this->id_encarregado = $id_encarregado;
        return $this;
    }

    public function getId_encarregado(){
        return $this->id_encarregado;
        
    }

    public function loadById($id){
        $dao = new DAO();
        $results = $dao->select("SELECT * FROM tb_encarregados WHERE id_encarregado = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    public static function getList(){
        $dao = new DAO();

        return $dao->select("SELECT * FROM tb_encarregados ORDER BY nome");
    }

    public static function searchForMatricula($matricula){
		$dao = new DAO();
		return $sql->select("SELECT * FROM tb_encarregados WHERE $matricula LIKE :SEARCH ORDER BY matricula", array(
			':SEARCH'=>"%".$matricula."%"
		));
    }
    
    public static function searchForNome($nome){
		$dao = new DAO();
		return $sql->select("SELECT * FROM tb_encarregados WHERE $nome LIKE :SEARCH ORDER BY nome", array(
			':SEARCH'=>"%".$nome."%"
		));
    }
    
    private function setData($data){
		$this->setId_encarregado($data['id_encarregado']);
        $this->setNome($data['nome']);
        $this->setMatricula($data['matricula']);
        $this->setTurno($data['turno']);
        $this->setSetor($data['setor']);
        $this->setTelefone($data['telefone']);
    }
    
    public function insert(){
		$dao = new DAO();
        $results = $dao->select("CALL sp_tb_encarregados_insert 
                    (:NOME, :MATRICULA, :TURNO, :SETOR, :TELEFONE)", array(
			":NOME", $encarregado->getNome(),
            ":MATRICULA", $encarregado->getMatricula(),
            ":TURNO", $encarregado->getTurno(),
            ":SETOR", $encarregado->getSetor(),
            ":TELEFONE", $encarregado->getTelefone()
		));
		if (count($results) > 0) {
			$this->setData($results[0]);
		}
    }
    
    public function update(){
		
		$dao = new DAO();
		$dao->query("UPDATE tb_encarregados SET id = :ID  WHERE id_encarregado = :ID, nome = :NOME,
         matricula = :MATRICULA, setor = :SETOR, turno = :TURNO, telefone = :TELEFONE", array(
			':NOME'=>$this->getNome(),
			':MATRICULA'=>$this->getMatricula(),
            ':ID'=>$this->getId_encarregado(),
            ':SETOR'=>$this->getSetor(),
			':TURNO'=>$this->getTurno(),
			':TELEFONE'=>$this->getTelefone()
		));
	}
	public function delete(){
		$dao = new DAO();
		$dao->query("DELETE FROM tb_encarregados WHERE id_encarregado = :ID", array(
			':ID'=>$this->getId_encarregado()
		));
		$this->setId_encarregado(0);
        $this->setNome("");
        $this->setMatricula("");
        $this->setTurno("");
        $this->setSetor("");
        $this->setTelefone("");
	}

    public function __toString()
    {
        return json_encode(array(
            "id_encarregado"=>$this->getId_encarregado(),
            "nome"=>$this->getNome(),
            "matricula"=>$this->getMatricula(),
            "turno"=>$this->getTurno(),
            "setor"=>$this->getSetor(),
            "telefone"=>$this->getTelefone(),
        ), JSON_UNESCAPED_UNICODE);
    }
}

?>
