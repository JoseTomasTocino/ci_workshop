<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Dado que el modelo Taller se utiliza siempre, lo cargamos en el constructor
        $this->load->model('Taller_Model');
    }

    public function index ()
    {
        // Leemos la lista de talleres
        $data['talleres'] = $this->Taller_Model->leer_todos();

        // Mostramos las vistas
        $this->load->view('header');
        $this->load->view('admin_indice', $data);
        $this->load->view('footer');
    }

    public function detalle_taller ($id)
    {
        // Leemos la información del taller concreto, con la lista de inscritos
        $data['taller'] = $this->Taller_Model->leer_unico_con_inscritos($id);

        // Mostramos las vistas
        $this->load->view('header');
        $this->load->view('admin_detalle_taller', $data);
        $this->load->view('footer');
    }

    public function nuevo_taller ()
    {
        // Contenedor de información para las vistas
        $data = array();

        // Si se han recibido datos por POST
        if ($this->input->post())
        {
            // Establecemos las reglas de validación de los datos
            $this->form_validation->set_rules('titulo', 'Título', 'required');
            $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
            $this->form_validation->set_rules('numero_plazas', 'Número de plazas', 'required');

            // Si los datos son válidos
            if ($this->form_validation->run())
            {
                // Agregamos el taller
                $this->Taller_Model->agregar();

                // Añadimos el mensaje de información
                $this->session->set_flashdata('alert_type', 'alert-success');
                $this->session->set_flashdata('alert_msg', 'Se ha agregado el taller');

                // Redirigimos a la raíz de la aplicación
                redirect('');
            }

            // Si los datos no son válidos
            else
            {
                // Guardamos el mensaje de error
                $data['alert_type'] = 'alert-error';
                $data['alert_msg'] = '<strong>ERROR</strong> al agregar el taller: <br><ul>' . validation_errors('<li>', '</li>') . '</ul>';
            }
        }

        // Cargamos las vistas
        $this->load->view('header', $data);
        $this->load->view('admin_nuevo_taller', $data);
        $this->load->view('footer');
    }

    public function borrar_taller($id)
    {
        // Borramos el taller con el ID indicado
        $this->Taller_Model->borrar($id);

        // Creamos el mensaje de información
        $this->session->set_flashdata('alert_type', 'alert-success');
        $this->session->set_flashdata('alert_msg', 'Se ha borrado el taller');

        // Redirigimos a la raíz de la aplicación
        redirect('');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */