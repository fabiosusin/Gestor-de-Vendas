<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pedido{
		//Atributos
		private $id;







		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}

			return $this->numero;
		}

			return $this->dataPedido;
		}

			return $this->dataEntrega;
		}

			return $this->situacao;
		}

			return $this->ClienteID;
		}

			return $this->ProdutoID;
		}

		public function setId($id){
			$this->id=$id;
		}

			$this->numero=$numero;
		}

			$this->dataPedido=$dataPedido;
		}

			$this->dataEntrega=$dataEntrega;
		}

			$this->situacao=$situacao;
		}

			$this->ClienteID=$ClienteID;
		}

			$this->ProdutoID=$ProdutoID;
		}

	}
?>