<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taller_Model extends CI_Model
{
    public $tabla = "talleres";

    public function leer_unico($id)
    {
        // Seleccionamos el taller con el ID indicado
        $this->db->where('id', $id);

        // Hacemos la petición
        $peticion = $this->db->get($this->tabla);

        // Devolvemos el resultado
        return $peticion->row();
    }

    public function leer_unico_con_inscritos($id)
    {
        // Leemos el taller
        $taller = self::leer_unico($id);

        // Cargamos el modelo de Inscripción
        $this->load->model('Inscripcion_Model');

        // Leemos las inscripciones para ese taller
        $taller->inscritos = $this->Inscripcion_Model->leer_por_taller($id);

        // Devolvemos toda la información
        return $taller;
    }

    public function leer_todos()
    {
        // Leemos todos los talleres
        $peticion = $this->db->get($this->tabla);

        // Devolvemos la información
        return $peticion->result();
    }

    public function leer_todos_con_inscritos()
    {
        // Leemos todos los talleres
        $talleres = self::leer_todos();

        // Cargamos el modelo de Inscripción
        $this->load->model('Inscripcion_Model');

        // Por cada taller
        foreach ($talleres as &$taller)
        {
            // Leemos los inscritos a ese taller
            $taller->inscritos = $this->Inscripcion_Model->leer_por_taller($taller->id);
        }

        // Devolvemos toda la información
        return $talleres;
    }

    public function agregar()
    {
        // Leemos los campos del formulario
        $datos_formulario = $this->input->post();

        // Cargamos la biblioteca de subida de imágenes
        $this->load->library('upload');

        // Establecemos las opciones de configuración de la biblioteca
        $config['upload_path']   = 'uploads';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name']  = TRUE;

        // Inicializamos la biblioteca
        $this->upload->initialize($config);

        // Hacemos la subida del fichero en el campo 'imagen'
        $resultado = $this->upload->do_upload('imagen');

        // Si la subida no ha tenido éxito
        if (!$resultado)
        {
            // Ha habido un error o no se ha seleccionado la imagen
            $datos_formulario['imagen'] = "";
        }
        else
        {
            // Leemos la información tras la subida
            $datos_subida = $this->upload->data();

            // Introducimos en los datos la ubicación de la imagen subida
            $datos_formulario['imagen'] = $datos_subida['file_name'];
        }

        // Insertamos en la BD el nuevo registro
        return $this->db->insert($this->tabla, $datos_formulario);
    }

    public function borrar($id)
    {
        // Seleccionamos el registro a borrar
        $this->db->where('id', $id);

        // Borramos el registro
        $this->db->delete($this->tabla);

        // Cargamos el modelo de Inscripción
        $this->load->model('Inscripcion_Model');

        // Borramos las inscripciones del taller indicado
        $this->Inscripcion_Model->borrar_por_taller($id);
    }
}

/* End of file taller_model.php */
/* Location: ./application/models/taller_model.php */
