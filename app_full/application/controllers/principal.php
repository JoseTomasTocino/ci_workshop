<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Cargamos el modelo de los talleres
		$this->load->model('Taller_Model');

		// Leemos del modelo todos los talleres, junto a sus inscritos
		// y guardamos el resultado en el vector que le pasamos a la vista
		$data['talleres'] = $this->Taller_Model->leer_todos_con_inscritos();

		// Cargamos las vistas
		$this->load->view('header');
		$this->load->view('principal_indice', $data);
		$this->load->view('footer');
	}

	public function inscripcion ($taller_id)
	{
		// Cargamos los modelos
		$this->load->model('Taller_Model');
		$this->load->model('Inscripcion_Model');

		// Leemos la información del taller en el que se va a hacer la inscripción
		$data['taller'] = $this->Taller_Model->leer_unico($taller_id);

		// Si se han recibido datos por POST
		if ($this->input->post())
		{
			// Definimos las reglas de validación
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('email', 'E-Mail', 'required');

            // Si los datos del formulario pasan la validación
            if ($this->form_validation->run())
            {
            	// Agregamos una nueva inscripción
            	$this->Inscripcion_Model->agregar();

            	// Escribimos un mensaje de información
				$this->session->set_flashdata('alert_type', 'alert-success');
				$this->session->set_flashdata('alert_msg', 'Se ha inscrito correctamente');

				// Redirigimos a la raíz de la aplicación
				redirect('');
            }

            // Si los datos no pasan la validación
            else
            {
            	// Guardamos la información del error en las variables de las vistas
            	$data['alert_type'] = 'alert-error';
                $data['alert_msg'] = '<strong>ERROR</strong> al agregar la inscripción: <br><ul>' . validation_errors('<li>', '</li>') . '</ul>';
            }
		}

		// Cargamos las vistas
		$this->load->view('header', $data);
		$this->load->view('principal_inscripcion', $data);
		$this->load->view('footer');
	}
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */
