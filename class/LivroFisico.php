<?php

class LivroFisico extends Livro {

	private $taxaImpressao;
        
        function getTaxaImpressao() {
            return $this->taxaImpressao;
        }

        function setTaxaImpressao($taxaImpressao) {
            $this->taxaImpressao = $taxaImpressao;
        }
        
        public function atualizaBaseadoEm($params) {
            $this->setIsbn($params["isbn"]);
            $this->setTaxaImpressao($params["taxaImpressao"]);
            
        }

}

?>