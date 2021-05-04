<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;

    //Conexión a la bbdd
    public function __construct(){
        $this->db = Database::connect();
    }

    


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id) : self
    {
        $this->id = $id;

        return $this;
    }

    
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre) : self
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
    }

    public function save(){
        $sql = "INSERT INTO categorias VALUES (NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        //var_dump($sql);
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }


}

?>