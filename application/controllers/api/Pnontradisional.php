<?php

class Pnontradisional extends CI_Controller {
	public function sub($id_pnontradisional="")
	{
		$this->load->model("global_model");
		if (!empty($id_pnontradisional) && is_numeric($id_pnontradisional)) {
			$data = $this->global_model->GetWhere("pnontradisional_sub", array("id_pnontradisional" => $id_pnontradisional));
			if (count($data) > 0) {
				successWithData($data);
			}
			else {
				errorCustom(204, "Tidak ditemukan id_pnontradisional yang benar.");
			}
		}
		else {
			$data = $this->global_model->GetData("pnontradisional");
			successWithData($data);
		}
	}
}