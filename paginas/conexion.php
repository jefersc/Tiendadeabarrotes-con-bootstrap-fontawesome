<?php

	// Crear la clase conexion
	class Conexion {
		// Definir atributos para la conexión
		private $usuario="root";
		private $password="";
		private $servidor="localhost";
		private $base="sales";

		// Crea un método
		public function Conectar() {
			// Iniciar el controlador de errores
			// Para capturar los posibles errores dentro del código
			// PDO

			// Código a evaluar para posibles errores que pueda existir
			try {
				$con = new PDO("mysql:host=$this->servidor; dbname=$this->base;", $this->usuario,$this->password);
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "Base de datos conectada...";
				return $con;

				// muestra los errores encontrados dentro del código
				} catch (Exception $e) {
					echo "Se encontró un error: ". $e->getMesagge();
				}
		}

		//Metodo para validar acceso de usuario
		public function LoginAccess($user, $psw) {
			$arr_filas = null;

			$cn = $this->Conectar();

			$sql = "select * from usern where usern=:user and passw=:psw";

			$rs = $cn->prepare($sql);
			
			$rs->bindParam(":user" , $user);
			$rs->bindParam(":psw" , $psw);

			$rs->execute();

			$nr = $rs->rowCount();

			$cn = null;

			return $nr;
		}

		//Método para listar los productos de muebles
		public function ProductList(){
			$arr_filas = null;
			$cn = $this->Conectar();

			$sql = "select * from Product";
			$rs = $cn->prepare($sql);
			$rs->execute();

			echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>N</th>
				  <th>Código</th>
				  <th>Producto</th>
				  <th>Precio</th>
				  <th>mesure</th>
				  <th>Marca</th>
				  </tr>";

			$i=1; //contador
			while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr>".
					 "<td>".$i."</td>".
					 "<td>".$arr_filas["cod_product"]."</td>".
					 "<td>".$arr_filas["product"]."</td>".
					 "<td>".$arr_filas["price"]."</td>".
					 "<td>".$arr_filas["mesure"]."</td>".
					 "<td>".$arr_filas["cod_brand"]."</td>".
					 "</tr>";

				$i++;

			}
			echo "</table>";
			$cn=null;
		}
	}

?>