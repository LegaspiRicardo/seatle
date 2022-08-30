<?php
include_once "crud.php";
include_once "config.php";

class Mensualidad implements CRUD
{
    public $id_mensualidad;
    public $id_alumno;
    public $tipo_clase;
    public $precio_clase;
    public $num_clases;
    public $total;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO mensualidad (id_alumno, tipo_clase, precio_clase, num_clases, total)
                    VALUES (:id_alumno, :tipo_clase, :precio_clase, :num_clases, :total)");
                
                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':tipo_clase', $this->tipo_clase);
                $stmt->bindParam(':precio_clase', $this->precio_clase);
                $stmt->bindParam(':num_clases', $this->num_clases);
                $stmt->bindParam(':total', $this->total);
                $stmt->execute();


                $stmt = $conn->prepare("
                INSERT INTO alumno_paga_mensualidad (id_alumno, id_mensualidad, fecha_pago)
                VALUES (:id_alumno, :id_mensualidad, :fecha_pago)");
            

                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':id_mensualidad', $this->id_mensualidad);
                $stmt->bindParam(':fecha_pago', $this->fecha_pago);
                $stmt->execute();

                
                return $stmt->rowCount();
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            finally
            {
                $conn = null;
                $c->desconectar();
            }
    }

    function last_alumno()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    SELECT LAST_INSERT_ID alumno (id_alumno)
                    VALUES (:id_alumno)");
                
                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->execute();
                return $stmt->rowCount();
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            finally
            {
                $conn = null;
                $c->desconectar();
            }
    }

    function actualizar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                UPDATE mensualidad SET id_alumno=:id_alumno, tipo_clase=:tipo_clase, precio_clase=:precio_clase, num_clases=:num_clases, total=:total
                WHERE id_mensualidad=:id_mensualidad");

                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':tipo_clase', $this->tipo_clase);
                $stmt->bindParam(':precio_clase', $this->precio_clase);
                $stmt->bindParam(':num_clases', $this->num_clases);
                $stmt->bindParam(':total', $this->total);
                $stmt->bindParam(':id_mensualidad',$this->id_mensualidad);
                $stmt->execute();

                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } 
            finally
            {
                $conn = null;
            }
    }

    function borrar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                DELETE FROM mensualidad  
                WHERE id_mensualidad=:id_mensualidad");
                $stmt->bindParam(':id_mensualidad', $this->id_mensualidad);
                $stmt->execute();
                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } finally
            {
                $conn = null;
            }
    }

    function leer_id()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM mensualidad   
            WHERE id_mensualidad=:id_mensualidad");
            $stmt->bindParam(':id_mensualidad', $this->id_mensualidad);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }

    function leer_todo()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM mensualidad");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;

            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }  
    }
}

?>