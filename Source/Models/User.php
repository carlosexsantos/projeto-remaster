<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
	
	public function __construct()
	{
		//parent::__construct( tabela , [ campos não nulos ], chave primária, timestamp);
		parent::__construct("usuarios", ["senha", "tp_usuario", "sn_ativo", "cpf_usuario", "cd_condo"], "id_usuario");
	}
}