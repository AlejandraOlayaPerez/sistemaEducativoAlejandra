<?php

class profesor {
    public $id=0;
    public $nombre="";
    public $apellido="";
    public $direccion="";
    public $telefono="";

    function nuevoProfesor() {
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();

        $sql="INSERT INTO profesores (nombre,apellido,direccion,telefono)
        VALUES ('$this->nombre','$this->apellido','$this->direccion','$this->telefono')";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function listarprofesor() {
        $oConexion=new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM profesores WHERE eliminado=false";
        $result=mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function ConsultarProfesor(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="SELECT * FROM profesores WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        $result=mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($result as $registro){
         $this->id=$registro['id'];
         $this->nombres=$registro['nombre'];
         $this->apellidos=$registro['apellido'];
         $this->direccion=$registro['direccion'];
         $this->telefono=$registro['telefono'];
        }
    }
    
    function actualizarProfesor(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE profesores SET nombre='$this->nombre',
        apellido='$this->apellido',
        direccion='$this->direccion',
        telefono='$this->telefono'
        WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }

    function eliminarProfesor(){
        $oConexion= new conectar();
        $conexion=$oConexion->conexion();
        $sql="UPDATE profesores SET eliminado=1 WHERE id=$this->id";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }
}

?>