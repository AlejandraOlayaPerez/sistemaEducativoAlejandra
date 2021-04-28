<?php

class curso{
    public $id=0;
    public $curso="";
    public $idProfesor="";

    function nuevoCurso(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="INSERT INTO cursos (curso, idProfesor)
        VALUES ('$this->curso','$this->idProfesor')";
        $result=mysqli_query($conexion, $sql);
        return $result;
    }

    function listarCurso(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM cursos WHERE eliminado=false";
        $result=mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function consultarCurso(){
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM cursos WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($result as $registro){
            $this->id=$registro['id'];
            $this->curso=$registro['curso'];
        }
    }

    function actualizarCurso(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE cursos SET curso='$this->curso' WHERE id=$this->id";
        $result=mysqli_query($conexion, $sql);
        return $result;
    }

    function eliminarCurso(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE cursos SET eliminado=1 WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

}
?>