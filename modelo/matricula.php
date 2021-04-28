<?php
class matricula{
    public $id=0;
    public $idCurso="";
    public $curso="";
    public $nombreEstudiante="";
    public $apellidoEstudiante="";
    public $idEstudiante="";
    public $nombreProfesor="";
    public $apellidoProfesor="";
    public $idProfesor="";

    function nuevoMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();

        $existe=$this->consultarMatricula();
        if(sizeof($existe)!=0){
            $sql="UPDATE matricula SET eliminado=false";
        }else{
            $sql="INSERT INTO matricula (idCurso,curso,idEstudiante)
            VALUES ('$this->idCurso','$this->curso','$this->idEstudiante')";
        }
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function detalleCurso(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT c.curso , p.nombre, p.apellido FROM cursos c LEFT JOIN profesores p ON c.idProfesor=p.id WHERE c.id=$this->idCurso"; 
        $result=mysqli_query($conexion, $sql);
        $result= mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($result as $registro){

         $this->curso=$registro['curso'];
         $this->nombreProfesor=$registro['nombre'];
         $this->apellidoProfesor=$registro['apellido'];
        }
    }

    Function listarMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM estudiante e LEFT JOIN matricula m ON e.id=m.idEstudiante WHERE m.idCurso=$this->idCurso AND m.eliminado=false";
        $result=mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function consultarMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM matricula WHERE idCurso=$this->idCurso AND idEstudiante=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    function consultarMatriculaPorId(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM matricula WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $registro){
            $this->id=$registro['id'];
            $this->idCurso=$registro['idCurso'];
            $this->curso=$registro['curso'];
            $this->idEstudiante=$registro['idEstudiante'];
        }
    }

    function actualizarMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE matricula SET idCurso='$this->idCurso',
        curso='$this->curso',
        idEstudiante='$this->idEstudiante',
        idProfesor='$this->idProfesor'
        WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function eliminarMatricula(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE matricula SET eliminado=1 WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }
}

?>