<?php
class Component{
    public static function showSelect($label, $name, $value, $data){
        print("<label for='categoria' class='form-label'>$label</label>");
		print("<select class='form-select' name='$name' id='$name'>");
		if($data)
        {
			if(!$value){
				print("<option value='' disabled selected>Seleccione una opción</option>");
			}
			foreach($data as $row){
				if($value == $row){
					print("<option value='$row' selected>$row</option>");
				}else{
					print("<option value='$row'>$row</option>");
				}
			}
		}
        else
        {
			print("<option value='' disabled selected>No hay opciones disponibles</option>");
		}
		print("</select>");
		
	}

	public static function showMessage($type, $message, $url){
		
		$text = $message;

		switch($type){
			case 1:
				$title = "Éxito";
				$icon = "success";
				break;
			case 2:
				$title = "Error";
				$icon = "error";
				break;
			case 3:
				$title = "Advertencia";
				$icon = "warning";
				break;
			case 4:
				$title = "Aviso";
				$icon = "info";
		}

		if($url){
			print("<script> swal({title: '$title', text: '$text', icon: '$icon', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = '$url'}) </script>");
		}else{
			print("<script> swal({title: '$title', text: '$text', icon: '$icon', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}) </script>");
		}
	}
}
?>