<?php
class Utilizador
{
	private $id;
	private $codtipo;
  private $nome;
	private $email;
  private $steamuser;
  private $dnascimento;
  private $ranki;
	private $password;

	public function getID()
	{
		return $this->id;
	}

	public function setID($value)
	{
		$this->id = $value;
	}

	public function getCodtutilizador()
	{
		return $this->codtipo;
	}

	public function setCodtutilizador($value)
	{
		$this->codtipo = $value;
	}

  public function getNome()
	{
		return $this->nome;
	}

  public function setNome($value)
  {
    $this->nome = $value;
  }

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($value)
	{
		$this->email = $value;
	}
  public function getSuser()
  {
    return $this->suser;
  }

  public function setSuser($value)
  {
    $this->suser = $value;
  }
  public function getDnascimento()
  {
    return $this->dnascimento;
  }

  public function setDnascimento($value)
  {
    $this->dnascimento = $value;
  }
  public function getranki()
  {
    return $this->ranki;
  }

  public function setranki($value)
  {
    $this->ranki = $value;
  }

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($value)
	{
		$this->password = $value;
	}

	public function login()
	{
		$conexaoBD = new ConexaoBD();
	  $conexao = $conexaoBD->criarConexao();

		$email = $this->email;
		$password = $this ->password;
		$query = $conexao->query("SELECT * FROM utilizadores where email = '$email' and password = '$password'");
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}



	public function registar()
	{
		$conexaoBD = new ConexaoBD();
		$conexao = $conexaoBD->criarConexao();

		$nome = replaceString($this->nome);
		$email = replaceString($this->email);
		$steamuser = replaceString($this->suser);
		$dnascimento= replaceString($this->dnascimento);
		$ranki = replaceString($this->ranki);
		$password =replaceString($this->password);

		$sql ="INSERT INTO utilizadores (codtipo, nome, email, steamuser, datanascimento, ranki, password) VALUES ('2','$nome','$email','$steamuser','$dnascimento','$ranki','$password')";
		return $conexao->exec($sql);

		}

		public function apagar()
		{
			$conexaoBD = new ConexaoBD();
			$conexao = $conexaoBD->criarConexao();

			$id = $this->id;

			$sql = "DELETE FROM utilizadores WHERE codutilizador = $id";

			return $conexao->exec($sql);
		}

		public function editar()
		{
			$conexaoBD = new ConexaoBD();
			$conexao = $conexaoBD->criarConexao();

			$id = $this->id;
			$nome =  replaceString($this->nome);
			$email = replaceString($this->email);
		  $steamuser = replaceString($this->suser);
			$dnascimento = replaceString($this->dnascimento);
			$ranki = replaceString($this->ranki);
			$password = replaceString($this->password);

			$sql = "UPDATE utilizadores SET nome = '$nome', email = '$email', steamuser = '$steamuser', datanascimento = '$dnascimento', ranki = '$ranki', password = '$password' WHERE codutilizador = $id";
			return $conexao->exec($sql);
		}

		public function list()
		{
			$conexaoBD = new ConexaoBD();
			$conexao = $conexaoBD->criarConexao();

			$query = $conexao->query("SELECT * FROM utilizadores");
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getByID()
		{
			$conexaoBD = new ConexaoBD();
			$conexao = $conexaoBD->criarConexao();

			$id = $this->id;
			$sql = "SELECT * FROM utilizadores WHERE codutilizador = $id";
			$query = $conexao->query($sql);
			return $query->fetch(PDO::FETCH_ASSOC);

		}

	}


?>
