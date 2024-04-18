<?php

class  Empregado {
    private $nome;
    private  $nome;
    private  $salárioMensal;

     function public getNome(){
        return  $this -> $nome ;
    }

     function public setNome ( $nome ){
        $this -> nome = $nome ;
    }

    public  function  getSobrenome (){
        return  $this -> sobrenome ;
    }

    public  function  setSobrenome ( $ sobrenome ) {
        $this -> sobrenome = $nome ;
    }

    public  function  getSalarioMensal (){
        return  $this -> salarioMensal ;
    }

     function public setSalarioMensal ( $salarioMensal ) {
        $this -> salarioMensal = $salarioMensal ;
    }

  
    public  function  receber Aumento ( $ % ) {
        $this -> salarioMensal +=  $this -> salarioMensal * ( $ % / 100 );
    }

    public  function  getSalarioAnual (){
        return  $this -> salarioMensal * 12 ;
    }
}
?>