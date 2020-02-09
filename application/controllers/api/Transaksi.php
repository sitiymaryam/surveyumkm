<?php

class Transaksi extends CI_Controller {
	public function sub($id_transaksi="", $id_transaksi_sub="", $id_transaksi_sub_sub="", $id_transaksi_sub_sub_sub="")
	{
		$this->load->model("global_model");
		if (!empty($id_transaksi) && is_numeric($id_transaksi)) {
			$data = $this->global_model->GetWhere("transaksi_sub", array("id_transaksi" => $id_transaksi));
			if (count($data) > 0) {
				if (!empty($id_transaksi_sub) && is_numeric($id_transaksi_sub)) {
					$data = $this->global_model->GetWhere("transaksi_sub_sub", array("id_transaksi_sub" => $id_transaksi_sub));
					if (count($data) > 0) {
						if (!empty($id_transaksi_sub_sub) && is_numeric($id_transaksi_sub_sub)) {
							$data = $this->global_model->GetWhere("transaksi_sub_sub_sub", array("id_transaksi_sub_sub" => $id_transaksi_sub_sub));
							if (count($data) > 0) {
								if (!empty($id_transaksi_sub_sub_sub) && is_numeric($id_transaksi_sub_sub_sub)) {
									$data = $this->global_model->GetWhere("transaksi_sub_sub_sub_sub", array("id_transaksi_sub_sub_sub" => $id_transaksi_sub_sub_sub));
									if (count($data) > 0) {
										successWithData($data);
									}
									else {
										errorCustom(204, "TIdak ditemukan data dari transaksi_sub_sub_sub.");
									}
								}
								else {
									successWithData($data);
								}
							}
							else {
								errorCustom(204, "TIdak ditemukan data dari transaksi_sub_sub_sub.");
							}
						}
						else {
							successWithData($data);
						}
					}
					else {
						errorCustom(204, "Tidak ditemukan id_transaksi_sub yang benar.");
					}
				}
				else {
					successWithData($data);
				}
			}
			else {
				errorCustom(204, "Tidak ditemukan id_transaksi yang benar.");
			}
		}
		else {
			$data = $this->global_model->GetData("transaksi");
			successWithData($data);
		}
	}
}