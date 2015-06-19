<?php    // db_functions.php
class DB_Functions 
{
	// ATRIBUTOS
    private $con;
	
	// MÉTODOS
    // constructor
    function __construct() 
	{
        require_once __DIR__.'/DB_connect.php'; // Importando clase de conexión
        //require_once 'DB_connect.php'; // Importando clase de conexión
		
		// conectando...
        $db = new DB_Connect();
        $this->con = $db->getDbConnection(); // Conectando con base de datos
    }
	
	// gestión de los alumnos
	public function listaralumno() // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT * FROM alumno');
            $consulta->execute(); // Ejecuta la consulta sin más
            $resultado = $consulta->fetchAll(); // Guarda todos los valores de retorno
			return $resultado; // Devolver array
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	public function altaalumno($nom, $ape, $cor, $dni) // Insertar nuevo registro
	{
		try 
		{
            $consulta = $this->con->prepare('INSERT INTO alumno (nombre, apellidos, email, dni) 
			VALUES (:nombre, :apellidos, :email, :dni)');
            $params = array(':nombre' => $nom, ':apellidos' => $ape, 
			':email' => $cor, ':dni' => $dni, );
			$consulta->execute($params); // Ejecución
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	public function bajaalumno($id) // Eliminación de registro
	{
		try
		{
			$sql = 'DELETE FROM alumno WHERE id_alumno = :id'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':id' => $id); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	public function actualizaalumno($id, $nom, $ape, $cor, $dni) // Actualizar registro
	{
		
		try 
		{
            $consulta = $this->con->prepare('UPDATE alumno SET nombre = :nom, apellidos = :ape,
			email = :cor, dni = :dni WHERE id_alumno = :id'); 
            $params = array(':nom' => $nom, ':ape' => $ape, ':cor' => $cor, ':dni' => $dni, ':id' => $id, );
			$consulta->execute($params); // Ejecución
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// MÉTODOS QUE SERÁN NECESARIOS PARA HCXET
	
	// Nuevo target por lista

	// Nuevo target por partcipantes de los tokenfields
	
	// Agregar participante a target
	
	// Agregar participante a lista
	
	// Nueva lista
	
	// Editar lista (miembros)
	
	// ver lista
	
	// ver todos los participantes
	
	// Borrar lista
	
	// Extraer participante
	
	// Actualizar resultados: Participante a encuesta
	public function setResultados($participante, $encuesta, $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10, $r11, $r12, $r13, $r14, $r15) // Actualizar registro
	{
		//echo($participante);
		//echo($participante .' '.  $encuesta .' '. $op1 .' '. $op2 .' '. $op3 .' '. $op4 .' '. $op5 .' '. $op6 .' '. $op7 .' '. $op8 .' '. $op9 .' '. $op10 .' '. $op11 .' '. $op12 .' '. $op13 .' '. $op14 .' '. $op15);
	
		try 
		{
            $consulta = $this->con->prepare('UPDATE valoracion SET respuesta_1 = :r1, respuesta_2 = :r2, respuesta_3 = :r3, respuesta_4 = :r4, respuesta_5 = :r5, respuesta_6 = :r6, respuesta_7 = :r7, respuesta_8 = :r8, respuesta_9 = :r9, respuesta_10 = :r10, respuesta_11 = :r11, respuesta_12 = :r12, respuesta_13 = :r13, respuesta_14 = :r14, respuesta_15 = :r15 WHERE id_destinatario = :participante AND id_target = :encuesta'); 
            
			$params = array(':participante' => $participante, ':encuesta' => $encuesta, ':r1' => $r1, ':r2' => $r2, ':r3' => $r3, ':r4' => $r4, ':r5' => $r5,':r6' => $r6, ':r7' => $r7, ':r8' => $r8, ':r9' => $r9, ':r10' => $r10, ':r11' => $r11, ':r12' => $r12, ':r13' => $r13, ':r14' => $r14,':r15' => $r15);
			
			$consulta->execute($params); // Ejecución
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR setResultados: ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Seleccionar: Id destinatario por email destinatario
	public function getIddestinatario($email) // Consulta de todos los registros
	{
		//echo($email);
		
		try 
		{
            $consulta = $this->con->prepare('SELECT id_destinatario FROM destinatario 
			WHERE email_destinatario = :email');
            
			$params = array(':email' => $email);
			
			//$consulta->execute(); // Ejecuta la consulta sin más
			
			$consulta->execute($params);
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			$id = $resultado[0];
			return $id;
			
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: getIddestinatario ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Seleccionar: Id usuario por email destinatario
	public function getIdusuario($email) // Consulta de todos los registros
	{
		//echo($email);
		
		try 
		{
            $consulta = $this->con->prepare('SELECT id_usuario FROM usuario 
			WHERE email_usuario = :email');
            
			$params = array(':email' => $email);
			
			//$consulta->execute(); // Ejecuta la consulta sin más
			
			$consulta->execute($params);
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			$id = $resultado[0];
			return $id;
			
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: getIddestinatario ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Seleccionar Id target por nombre del target
	public function getIdtarget($nom) // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT id_target FROM target 
			WHERE nombre_target = :nom');
            
			$params = array(':nom' => $nom);
			
			//$consulta->execute(); // Ejecuta la consulta sin más
			
			$consulta->execute($params);
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // MUY IMPORTANTE PARA DEVOLVER VALORES ÚNICOS
			$id = $resultado[0];
			return $id;
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: getIdtarget ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Conectar a un estudio: necesario IdTarget, IdParticipante y token
	public function controlAccesoEstudio($participante, $encuesta, $token)
	{
		try
		{
			$sql = 'SELECT token FROM valoracion WHERE id_destinatario = :dest AND id_target = :targ'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':dest' => $participante, ':targ' => $encuesta ); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // Captura del dato
			$id = $resultado[0];
			
			//if ($token == $resultado[0]) // Comparación del resultado con el parametro
			if ($token == $id) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Aceso como usuario
	public function acceso($email, $clave)
	{
		try
		{
			$sql = 'SELECT clave FROM usuario WHERE email_usuario = :email'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':email' => $email); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // Captura del dato

			if ($clave == $resultado[0]) // Comparación del resultado con el parametro
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Crear un nuevo target
	public function nuevoTarget($nombre, $app, $id_usuario)
	{
		try 
		{
            $consulta = $this->con->prepare('INSERT INTO target (nombre_target, link_target, id_usuario) 
			VALUES (:nombre, :app, :id_usuario)');
            
			$params = array(':nombre' => $nombre, ':app' => $app, ':id_usuario' => $id_usuario);
			$consulta->execute($params); // Ejecución
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
		
	}
	
	// Seleccionar: el mayor id target
	public function maxTargetid() // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT MAX(id_target) FROM target');
            
			$consulta->execute();
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			
			$id = $resultado[0];
			return $id;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: getIddestinatario ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Seleccionar nombres de listas (de participantes) por id_usuario
	public function listaParcipantesIdusuario($idusuario) // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT nombre_lista, id_lista FROM lista WHERE id_usuario = :idusuario');
           
			$params = array(':idusuario' => $idusuario);
			
			$consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			
			return $resultado; // Devolver array
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Seleccionar los nombres de los todos participantes de las listas de un id usuario
	// Seleccionar los nombres de los participantes de una lista según id lista ?
	public function listaNombresparticipantelista($idlista) // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT * FROM destinatario 
			WHERE id_destinatario = ANY (SELECT id_destinatario FROM contiene WHERE id_lista = :idlista)');
           
			$params = array(':idlista' => $idlista);
			
			$consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			
			return $resultado; // Devolver array
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Seleccionar los nombres de los participantes de una lista según id lista ?
	public function listaParcipantestodosIdusuario($idus) // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT id_destinatario, email_destinatario FROM destinatario 
			WHERE id_destinatario = ANY (SELECT id_destinatario FROM contiene WHERE id_lista = ANY
			(SELECT id_lista FROM lista WHERE id_usuario = :idus))');
           
			$params = array(':idus' => $idus);
			
			$consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			
			return $resultado; // Devolver array
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Crear una nueva lista
	public function nuevaLista($nombre_lista, $id_usuario)
	{
		try 
		{
            $consulta = $this->con->prepare('INSERT INTO lista (nombre_lista, id_usuario)
			VALUES (:nombre_lista, :id_usuario)');
            
			$params = array(':nombre_lista' => $nombre_lista, ':id_usuario' => $id_usuario);
			$consulta->execute($params); // Ejecución
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Borrar una lista
	public function borrarlista($id) // Eliminación de registro
	{
		try
		{
			$sql = 'DELETE FROM lista WHERE id_lista = :id'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':id' => $id); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// agregar un unico participante a una lista
	public function agregarParticipantealista($idlista, $idparticipante) 
	{
		try
		{
			$consulta = $this->con->prepare('INSERT INTO contiene (id_lista, id_destinatario) VALUES (:idlista, :idparticipante) '); 
            $params = array(':idlista' => $idlista, ':idparticipante' => $idparticipante); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Obtener todos los targets de un usuario
	public function getAllTargetfromuser($id) // Eliminación de registro
	{
		try
		{
			$sql = 'SELECT * FROM target WHERE id_usuario = :id'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':id' => $id); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
			
			$resultado = $consulta->fetchAll();
			
			return $resultado; // Devolver array
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Comprobar que un destinatario existe por correo electronico
	public function existeDestinatario($mail) // Consulta de todos los registros
	{
		//echo('***' . $mail . '***');
		
		try 
		{
            $consulta = $this->con->prepare('SELECT id_destinatario FROM destinatario WHERE email_destinatario = :mail');
            
			$params = array(':mail' => $mail);
			
			$consulta->execute($params);
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // MUY IMPORTANTE PARA DEVOLVER VALORES ÚNICOS
			$id = $resultado[0];
			return $id;
			
			/*print_r('---' . $id . '---');
			
			if(isset($resultado[0]))
			{
				return $resultado[0];
				
				print_r('---' . $resultado[0] . '---');
			}
			else
			{
				return false;
			}*/
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: existeDestinatario ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Añadir miembro a estudio (inicializar)
	// Actualizar resultados: Participante a encuesta
	public function setValoracionesIni($participante, $encuesta) // Actualizar registro
	{
		try 
		{
            $consulta = $this->con->prepare('INSERT INTO valoracion (id_destinatario, id_target) VALUES (:participante, :encuesta) '); 
            
			$params = array(':participante' => $participante, ':encuesta' => $encuesta);
			
			$consulta->execute($params); // Ejecución
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR setResultados: ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Crear un nuevo destinatario (version simple)
	public function nuevoDestinatario($mail)
	{
		try 
		{
            $consulta = $this->con->prepare('INSERT INTO destinatario (email_destinatario) 
			VALUES (:email)');
            
			$params = array(':email' => $mail);
			$consulta->execute($params); // Ejecución
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
		
	}
	
	// Seleccionar: el mayor id lista
	public function maxListaid() // Consulta de todos los registros
	{
		try 
		{
            $consulta = $this->con->prepare('SELECT MAX(id_lista) FROM lista');
            
			$consulta->execute();
			
            $resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			
			$id = $resultado[0];
			return $id;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: getIddestinatario ' . $e->getMessage() .'<br>'; // Posible error
        }
	}
	
	// Borrar nexos de participantes a lista
	public function desvincularParticipantes($idlista) // Eliminación de registro
	{
		try
		{
			$sql = 'DELETE FROM contiene WHERE id_lista = :id'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':id' => $idlista); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Obtener las medias de cada respuesta de una valoracion
	public function mediasRespuesta($targetid)
	{
		try
		{
			$sql = 'SELECT AVG(respuesta_1), AVG(respuesta_2), AVG(respuesta_3), AVG(respuesta_4), AVG(respuesta_5),
					AVG(respuesta_6), AVG(respuesta_7), AVG(respuesta_8), AVG(respuesta_9), AVG(respuesta_10),
					AVG(respuesta_11), AVG(respuesta_12), AVG(respuesta_13), AVG(respuesta_14), AVG(respuesta_15) 
					FROM valoracion WHERE id_target = :targetid; ' ; // Consulta
			
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':targetid' => $targetid,); // Array de parámetros de la consulta
            $consulta->execute($params); // Ejecución
			
			$resultado = $consulta->fetchAll();
			return $resultado;
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
}