<?php

class  fatura{
    private  $número ;
    private  $descrição ;
    private  $quantidade ;
    private  $recoPorItem ;

    
    public  function  __construct ( $número , $descricao , $quantidade ,  $precoPorItem ) {
        $this -> setNumero ( $numero );
        $this -> setDescricao ( $descrição );
        $this -> setQuantidade ( $quantidade );
        $this -> setPrecoPorItem ( $precoPorItem );
    }

     function public GETNumero(){
        return  $isto -> $numero ;

    }

    }
?>