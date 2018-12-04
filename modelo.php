<?php
class Usuario{
  private $id_usuario;
  private $email;
  private $senha;
  private $nome;
  private $sobrenome;
  private $idade;
  private $sexo;
  private $telefone;
  private $regiao;
  private $descricao;
  private $foto;
  public function __construct($id_usuario,$email,$senha,$nome,$sobrenome, $idade, $sexo, $telefone, $regiao, $descricao, $foto){
		$this->id_usuario = $id_usuario;
    $this->email = $email;
		$this->senha = $senha;
		$this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->telefone = $telefone;
    $this->regiao = $regiao;
    $this->descricao = $descricao;
    $this->foto = $foto;
	}
    public function getIdUsuario(){
      return $this->id_usuario;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getRegiao(){
        return $this->regiao;
    }
    public function setRegiao($regiao){
        $this->regiao = $regiao;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getFoto(){
      return $this->foto;
    }

    public function setFoto($foto){
      $this->foto = $foto;
    }

    public function checar_senha($password){
		    return password_verify($password,$this->senha);
	 }

    public static function obtemUsuarioPorNome($db,$email){
		$query = "SELECT
								id_usuario,
								email,
								senha,
                nome,
                sobrenome,
                idade,
                sexo,
                telefone,
                regiao,
                descricao,
                foto
							FROM
								usuarios
							where
								email = :email";
		$stmt = $db->prepare( $query );
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($row){
			extract($row);
			return new Usuario($id_usuario,$email,$senha, $nome, $sobrenome, $idade, $sexo, $telefone, $regiao, $descricao, $foto);
		}else{
			return null;
		}
	}

  public static function getUsuario($db, $id_usuario){
    $query = "SELECT
				id_usuario,
				email,
				senha,
				nome,
			  sobrenome,
        idade,
        sexo,
        telefone,
        regiao,
        descricao,
        foto
			FROM
				usuarios
			WHERE
				id_usuario = :usuario";
		$stmt = $db->prepare( $query );
		$stmt->bindParam(":usuario", $id_usuario);
    	$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$usu = new Usuario($id_usuario,$email,$senha,$nome, $sobrenome, $idade, $sexo, $telefone, $regiao, $descricao, $foto);
			return $usu;
		}
  }

  public function inserir($db){
		$cmd = "INSERT INTO usuarios
								(
								email,
                senha,
								nome,
								sobrenome,
								idade,
								sexo,
                telefone,
                regiao,
                descricao,
                foto
							)
							VALUES
							(
								:email,
								:senha,
								:nome,
								:sobrenome,
								:idade,
                :sexo,
                :telefone,
                :regiao,
                :decricao,
                :foto
							)";
		$stmt = $db->prepare( $cmd );
		$stmt->bindParam(":email",$this->email);
		$stmt->bindParam(":senha",$this->senha);
		$stmt->bindParam(":nome",$this->nome);
		$stmt->bindParam(":sobrenome",$this->sobrenome);
		$stmt->bindParam(":idade",$this->idade);
    $stmt->bindParam(":sexo",$this->sexo);
    $stmt->bindParam(":telefone",$this->telefone);
    $stmt->bindParam(":regiao",$this->regiao);
    $stmt->bindParam(":descricao",$this->descricao);
    $stmt->bindParam(":foto",$this->foto);
		return $stmt->execute();
	}

}

class Post{
  private $id_post;
  private $texto;
  private $midia;
  private $data;
  private $hora;
  private $tags;
  private $id_usuario;

  public function __construct($id_post,$texto,$midia,$data,$hora, $tags, $id_usuario){
		$this->id_post = $id_post;
		$this->texto = $texto;
		$this->midia = $midia;
    $this->data = $data;
    $this->hora = $hora;
    $this->tags = $tags;
    $this->id_usuario = $id_usuario;
	}

  public function getIdPost(){
    return $this->id_post;
  }
  public function getTexto(){
    return $this->texto;
  }
  public function getMidia(){
    return $this->midia;
  }
  public function getData(){
    return $this->data;
  }
  public function getHora(){
    return $this->hora;
  }
  public function getTags(){
    return $this->tags;
  }
  public function getIdUsuario(){
    return $this->id_usuario;
  }

  public function setTexto($texto){
		$this->texto = $texto;
	}
  public function setMidia($midia){
		$this->midia = $midia;
	}
  public function setData($data){
		$this->data = $data;
	}
  public function setHora($hora){
		$this->hora = $hora;
	}
  public function setTags($tags){
		$this->tags = $tags;
	}
  public function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

  public static function getPostsPorUsuario($db, $id_usuario){
    $query = "SELECT
				id_post,
				texto,
				midia,
				data,
			  hora,
        tags,
        id_usuario
			FROM
				posts
			WHERE
				id_usuario = :usuario";
		$stmt = $db->prepare( $query );
		$stmt->bindParam(":usuario", $id_usuario);
  	$stmt->execute();
    $arrpost = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$usu = new Post($id_post, $texto, $midia, $data, $hora, $tags, $id_usuario);
		  yield $usu;
		}
  }

}

class Pet{
  private $id_pet;
  private $nome;
  private $idade;
  private $sexo;
  private $especie;
  private $raca;
  private $descricao;
  private $id_usuario;

  public function getIdPet(){
    return $this->id_pet;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getIdade(){
    return $this->idade;
  }
  public function getSexo(){
    return $this->sexo;
  }
  public function getEspecie(){
    return $this->especie;
  }
  public function getRaca(){
    return $this->raca;
  }
  public function getDescricao(){
    return $this->descricao;
  }
  public function getIdUsuario(){
    return $this->id_usuario;
  }

  public function setNome($nome){
		$this->nome = $nome;
	}
  public function setIdade($idade){
		$this->idade = $idade;
	}
  public function setSexo($sexo){
		$this->sexo = $sexo;
	}
  public function setEspecie($especie){
		$this->especie = $especie;
	}
  public function setRaca($raca){
		$this->raca = $raca;
	}
  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }
  public function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

}
 ?>
