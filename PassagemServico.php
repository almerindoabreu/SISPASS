<?php

class Material
{
    private $dataPassagemServico;
    private $horaPassagemServico;
    private $observacaoGeral;
    private $responsavel;
    private $recebedor;
    private $observacaoGeralEncarregadoRecebedor;
    
  

    /**
     * Get the value of dataPassagemServico
     */ 
    public function getDataPassagemServico()
    {
        return $this->dataPassagemServico;
    }

    /**
     * Set the value of dataPassagemServico
     *
     * @return  self
     */ 
    public function setDataPassagemServico($dataPassagemServico)
    {
        $this->dataPassagemServico = $dataPassagemServico;

        return $this;
    }

    /**
     * Get the value of horaPassagemServico
     */ 
    public function getHoraPassagemServico()
    {
        return $this->horaPassagemServico;
    }

    /**
     * Set the value of horaPassagemServico
     *
     * @return  self
     */ 
    public function setHoraPassagemServico($horaPassagemServico)
    {
        $this->horaPassagemServico = $horaPassagemServico;

        return $this;
    }

    /**
     * Get the value of observacaoGeral
     */ 
    public function getObservacaoGeral()
    {
        return $this->observacaoGeral;
    }

    /**
     * Set the value of observacaoGeral
     *
     * @return  self
     */ 
    public function setObservacaoGeral($observacaoGeral)
    {
        $this->observacaoGeral = $observacaoGeral;

        return $this;
    }

    /**
     * Get the value of observacaoGeral
     */ 
    public function getObservacaoGeral()
    {
        return $this->observacaoGeral;
    }

    /**
     * Set the value of observacaoGeral
     *
     * @return  self
     */ 
    public function setObservacaoGeral($observacaoGeral)
    {
        $this->observacaoGeral = $observacaoGeral;

        return $this;
    }

    /**
     * Get the value of responsavel
     */ 
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set the value of responsavel
     *
     * @return  self
     */ 
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get the value of recebedor
     */ 
    public function getRecebedor()
    {
        return $this->recebedor;
    }

    /**
     * Set the value of recebedor
     *
     * @return  self
     */ 
    public function setRecebedor($recebedor)
    {
        $this->recebedor = $recebedor;

        return $this;
    }

    /**
     * Get the value of observacaoGeralEncarregadoRecebedor
     */ 
    public function getObservacaoGeralEncarregadoRecebedor()
    {
        return $this->observacaoGeralEncarregadoRecebedor;
    }

    /**
     * Set the value of observacaoGeralEncarregadoRecebedor
     *
     * @return  self
     */ 
    public function setObservacaoGeralEncarregadoRecebedor($observacaoGeralEncarregadoRecebedor)
    {
        $this->observacaoGeralEncarregadoRecebedor = $observacaoGeralEncarregadoRecebedor;

        return $this;
    }
}

?>
