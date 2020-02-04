<?php

namespace hoplon {

	class ExemploUso
	{
		public function NewCollection()
		{
			return null;
		}

		public function __construct()
		{
			$collection = $this->NewCollection();

	        //------exemplo1------
	        $collection->Add("ano.nascimento", 1980, "pedro");
	        $collection->Add("ano.nascimento", 1980, "maria");
	        $collection->Add("ano.nascimento", 1980, "joao");

	        $collection->Add("ano.nascimento", 1975, "rodrigo");


	        $nascimentos = $collection->Get("ano.nascimento", 0, -1);
	        print_r("Deveria ter 4 elementos: " + count($nascimentos)); 
	        print_r("Deveria ser o elemento 'rodrigo': " + $nascimentos[0]);
	        print_r("Deveria ser o elemento 'joao': " + $nascimentos[1]);
	        print_r("Deveria ser o elemento 'maria': " + $nascimentos[2]);
	        print_r("Deveria ser o elemento 'pedro': " + $nascimentos[3]);


	        //------exemplo2------
	        $collection->Add("chave", 1, "c");
	        $collection->Add("chave", 1, "b");
	        $collection->Add("chave", 1, "a");

	        $list = $collection->Get("chave", 0, 0);
	        print_r("Deveria ter 1 elementos: " + count($list));
	        print_r("Deveria ser o elemento 'a': " + $list[0]);

	        $list = $collection->Get("chave", 0, -2);
	        print_r("Deveria ter 2 elementos: " + count($list) );
	        print_r("Deveria ser o elemento 'a': " + $list[0]);
	        print_r("Deveria ser o elemento 'b': " + $list[1]);

	        
	        $collection->Add("chave", 0, "x");
	        $list = $collection->Get("chave", 0, 0);
	        print_r("Deveria ter 1 elementos: " + count($list));
	        print_r("Deveria ser o elemento 'x': " + $list[0]);

		}

	}
}
