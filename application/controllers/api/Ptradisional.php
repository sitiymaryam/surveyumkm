<?php

class Ptradisional extends CI_Controller {
	public function sub($id_ptradisional="")
	{
		$this->load->model("global_model");
		if (!empty($id_ptradisional) && is_numeric($id_ptradisional)) {
			$data = $this->global_model->GetWhere("ptradisional_sub", array("id_ptradisional" => $id_ptradisional));
			if (count($data) > 0) {
				successWithData($data);
			}
			else {
				errorCustom(204, "Tidak ditemukan id_ptradisional yang benar.");
			}
		}
		else {
			$data = $this->global_model->GetData("ptradisional");
			successWithData($data);
		}
	}
}