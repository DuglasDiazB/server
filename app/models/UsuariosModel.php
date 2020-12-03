<?php 
class UsuariosModel
{
	private $db;

	public function __construct(){
		$this->db = new Sql;

	}

	public function obtener_usuarios(){
		$this->db->query("SELECT * FROM usuarios");

		return $this->db->registers();
	}

	public function obtener_usuario($id){
		$this->db->query("SET lc_time_names = 'es_ES'");
		$this->db->execute();
		
		$this->db->query("SELECT idusuario, nombre, apellido, edad, correo,
						DATE_FORMAT(fecha_mod, '%W  %d de %M del %Y a las %H:%i') AS fecha
							FROM usuarios WHERE idusuario=:id");
		$this->db->bind(':id' , $id);

		return $this->db->register();

	}

	public function guardar($usuario){
		$this->db->query(
			"INSERT INTO usuarios (nombre, apellido, edad, correo, fecha_mod)
			VALUES (:nombre, :apellido, :edad, :correo, NOW())");

		$this->db->bind(':nombre', $usuario['nombre']);
		$this->db->bind(':apellido', $usuario['apellido']);
		$this->db->bind(':edad', $usuario['edad']);
		$this->db->bind(':correo', $usuario['correo']);

		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}

	}

	public function actualizar($id, $usuario){
		$this->db->query("UPDATE usuarios SET nombre=:nombre, apellido=:apellido, edad=:edad, correo=:correo, fecha_mod =NOW() WHERE idusuario = :id");
	

		$this->db->bind(':nombre', $usuario['nombre']);
		$this->db->bind(':apellido', $usuario['apellido']);
		$this->db->bind(':edad', $usuario['edad']);
		$this->db->bind(':correo', $usuario['correo']);
		$this->db->bind(':id', $id);

		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}


	public function delete($id){
		$this->db->query("DELETE FROM usuarios WHERE idusuario=:id");
		$this->db->bind(':id', $id);

		if($this->db->execute()){
			return true;

		}else{
			return false;
		}
	}

	
}


 ?>