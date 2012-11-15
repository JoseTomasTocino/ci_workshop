<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscripcion_Model extends CI_Model
{
    public $tabla = "inscripciones";

    public function agregar()
    {
        // Leemos los datos del formulario
        $datos = $this->input->post();

        // Insertamos los datos en la tabla
        return $this->db->insert($this->tabla, $datos);
    }

    public function leer_por_taller($id)
    {
        // Seleccionamos las inscripciones del talle indicado
        $this->db->where('id_taller', $id);

        // Hacemos la petición
        $peticion = $this->db->get($this->tabla);

        // Devolvemos el resultado
        return $peticion->result();
    }

    public function borrar_por_taller($id)
    {
        // Seleccionamos las inscripciones del taller indicado
        $this->db->where('id_taller', $id);

        // Hacemos el borado
        $this->db->delete($this->tabla);
    }
}

/* End of file Inscripcion_Model.php */
/* Location: ./application/models/Inscripcion_Model.php */