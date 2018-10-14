<?php

class Material
{
   private $nm;
   private $notaFiscal;
   private $item;
   private $quantidade;
   private $tipoEmbalagem;
   private $dataEntrega;
   private $horaEntrega;
   private $dataFinalizacao;
   private $horaFinalizacao;

   private $statusProcesso;
 
   public function getNm()
   {
      return $this->nm;
   }

   public function setNm($nm)
   {
      $this->nm = $nm;
      return $this;
   }

   public function getNotaFiscal()
   {
      return $this->notaFiscal;
   }
 
   public function setNotaFiscal($notaFiscal)
   {
      $this->notaFiscal = $notaFiscal;

      return $this;
   }

   public function getItem()
   {
      return $this->item;
   }

   public function setItem($item)
   {
      $this->item = $item;

      return $this;
   }

   public function getQuantidade()
   {
      return $this->quantidade;
   }

   public function setQuantidade($quantidade)
   {
      $this->quantidade = $quantidade;

      return $this;
   }

   public function getTipoEmbalagem()
   {
      return $this->tipoEmbalagem;
   }

   public function setTipoEmbalagem($tipoEmbalagem)
   {
      $this->tipoEmbalagem = $tipoEmbalagem;

      return $this;
   }

   public function getDataEntrega()
   {
      return $this->dataEntrega;
   }
 
   public function setDataEntrega($dataEntrega)
   {
      $this->dataEntrega = $dataEntrega;

      return $this;
   }

   public function getHoraEntrega()
   {
      return $this->horaEntrega;
   }

   public function setHoraEntrega($horaEntrega)
   {
      $this->horaEntrega = $horaEntrega;

      return $this;
   }


   public function getDataFinalizacao()
   {
      return $this->dataFinalizacao;
   }


   public function setDataFinalizacao($dataFinalizacao)
   {
      $this->dataFinalizacao = $dataFinalizacao;

      return $this;
   }


   public function getHoraFinalizacao()
   {
      return $this->horaFinalizacao;
   }


   public function setHoraFinalizacao($horaFinalizacao)
   {
      $this->horaFinalizacao = $horaFinalizacao;

      return $this;
   }

   public function getStatusProcesso()
   {
      return $this->statusProcesso;
   }

   public function setStatusProcesso($statusProcesso)
   {
      $this->statusProcesso = $statusProcesso;

      return $this;
   }
}

?>
