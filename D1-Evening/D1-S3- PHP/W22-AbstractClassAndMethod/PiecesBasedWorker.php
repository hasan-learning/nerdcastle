<?php
include_once "Worker.php";

class PiecesBasedWorker extends Worker
{
    private $noOfPiecesProduced;
    private $amountPerPiece;

    public function getNoOfPiecesProduced()
    {
        return $this->noOfPiecesProduced;
    }

    public function setNoOfPiecesProduced($noOfPiecesProduced)
    {
        $this->noOfPiecesProduced = $noOfPiecesProduced;
    }

    public function getAmountPerPiece()
    {
        return $this->amountPerPiece;
    }

    public function setAmountPerPiece($amountPerPiece)
    {
        $this->amountPerPiece = $amountPerPiece;
    }


    public function getTotalWage()
    {
        if($this->noOfPiecesProduced<=500){
            return $this->noOfPiecesProduced * $this->amountPerPiece;
        }else{
            return ($this->noOfPiecesProduced * $this->amountPerPiece) * 1.02;
        }
    }
}