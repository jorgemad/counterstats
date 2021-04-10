<?php
class Jogo
{
	private $id;
	private $datajogo;
	private $kills;
	private $deaths;
	private $assist;
  private $kdr;

	public function getID()
	{
		return $this->id;
	}

	public function setID($value)
	{
		$this->id = $value;
	}


	public function getDatajogo()
	{
		return $this->datajogo;
	}

	public function setDatajogo($value)
	{
		$this->datajogo = $value;
	}

	public function getKill()
	{
		return $this->kills;
	}

	public function setKill($value)
	{
		$this->kills = $value;
	}

	public function getDeath()
	{
		return $this->deaths;
	}

	public function setDeath($value)
	{
		$this->deaths = $value;
	}

	public function getAssist()
	{
		return $this->assist;
	}

	public function setAssist($value)
	{
		$this->assist = $value;
	}

  public function getKdr()
  {
    return $this->kdr;
  }

  public function setKdr($value)
  {
    $this->kdr = $value;
  }

	public function inserir()
	{
		$conexaoBD = new ConexaoBD();
            $conexao = $conexaoBD->criarConexao();
		$id = $_SESSION['login']['codutilizador'];
		$datajogo = replaceString($this->datajogo);
		$kills =  replaceString($this->kills);
		$deaths = replaceString($this->deaths);
		$assist = replaceString($this->assist);
	 	$kdr = replaceString($this->kdr);
		$sql = "INSERT INTO jogo(codutilizador, datajogo, kills, deaths, assist, kdr) VALUES ('$id','$datajogo','$kills','$deaths','$assist', '$kdr')";
		return $conexao->exec($sql);
	}



	public function apagar()
	{
		$conexaoBD = new ConexaoBD();
            $conexao = $conexaoBD->criarConexao();
		$id = $this->id;

		$sql = "DELETE FROM jogo WHERE codjogo = $id";

		return $conexao->exec($sql);
	}

	public function editar()
	{
		$conexaoBD = new ConexaoBD();
            $conexao = $conexaoBD->criarConexao();

		$kills =  replaceString($this->kills);
		$deaths = replaceString($this->death);
		$assist = replaceString($this->assist);
		$kdr = replaceString($this->kdr);

		$sql = "UPDATE jogo SET codjogo = '$codigo', kills = '$kills', deaths = '$deaths', assist = '$assist', kdr = '$kdr' WHERE ID = $id";

		return $conexao->exec($sql);
	}

	public function list()
	{
		$id = $_SESSION['login']['codutilizador'];
		$conexaoBD = new ConexaoBD();
	            $conexao = $conexaoBD->criarConexao();
		$sql = "SELECT * FROM jogo WHERE codutilizador = '$id' ORDER BY datajogo DESC";
		$query = $conexao->query($sql);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function listall()
	{
		$id = $_SESSION['login']['codutilizador'];
		$conexaoBD = new ConexaoBD();
	            $conexao = $conexaoBD->criarConexao();
		$sql = "SELECT utilizadores.nome, jogo.* FROM jogo INNER JOIN utilizadores on jogo.codutilizador = utilizadores.codutilizador ORDER BY kdr DESC LIMIT 10";
		$query = $conexao->query($sql);
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
