<?php

namespace Evalua\Http\Controllers;

/*Prueba. Borrar al terminar*/

class QueryAlumnoController extends Controller {

	public function index() {
		$unidad = '1';
		$clave_asig = 'aaa';
		$cantidad = 6;

		$preg = \DB::table('preguntas')
			->select('preg', 'resp')
			->join('temas', 'preguntas.fk_temas', '=', 'temas.id_temas')
			->where(['temas.unidad' => $unidad, 'fk_asig' => $clave_asig])
			->orderBy(\DB::raw('RAND()'))
			->paginate($cantidad);

		$resp1 = \DB::table('preguntas')
			->select('resp')
			->join('temas', 'preguntas.fk_temas', '=', 'temas.id_temas')
			->where(['temas.unidad' => $unidad, 'fk_asig' => $clave_asig])
			->orderBy(\DB::raw('RAND()'))
			->get();
		echo '<table>';
		echo '<th>Preguntas</th><th colspan="4">Respuestas</th>';
		foreach ($preg as $preg_resp) {
			foreach ($resp1 as $resp) {
				echo '<tr><td>' . $preg_resp->$preg . '</td></tr>';
				echo '<tr><td>' . $preg_resp->$resp . '</td><td>' . $preg_resp->$resp . '</td><td>' . $resp->$resp . '</td><td>' . $resp->$resp . '</td><td>' . $resp->$resp . '</td></tr>';
			}
		}

		/*----------------------------Pruebas de Código---------------------------*/
/*
$respInc = \DB::table('preguntas')
->select('resp')
->join('temas', 'preguntas.fk_temas', '=', 'temas.id_temas')
->where(['temas.unidad' => $unidad, 'fk_asig' => $clave_asig])
->orderBy(\DB::raw('RAND()'))
->paginate($cantidad * 4);

$incorrectas = array_chunk($respInc, 4); Array bidimencional con las respuestas incorrectas
foreach ($respInc as $posI => $inc) {
$incorrectas[$posI] = $inc->resp;
}
print_r($incorrectas);
echo '<br>-------------------------------------------------------<br>';
foreach ($preg as $posC => $resp) {
$correctas[$posC] = $resp->resp;
}
print_r($correctas);
echo '<br>-------------------------------------------------------<br>';

$fragInc_4 = array_chunk($incorrectas, 4);

print_r($fragInc_4);
echo '<br>-------------------------------------------------------<br>';

echo '<br>-------------------------------------------------------<br>';
$fragCo_4 = array_chunk($correctas, 4, true);

for ($i = 0; $i < count($fragInc_4); $i++) {
$j = count($fragInc_4[$i]);
$fragInc_4[$i][$j] = $correctas[$i];
}

print_r($fragInc_4);
echo '<br>-------------------------------------------------------<br>';

echo '<br>-------------------------------------------------------<br>';

print_r($this->custom_shuffle($fragInc_4));
 */
	}

	public function custom_shuffle($my_array = array()) {
		for ($i = 0; $i < count($my_array); $i++) {
			for ($j = 0; $j < count($my_array[$i]); $j++) {
				// takes a rand array elements by its key
				$element = array_rand($my_array[$i]);
				// assign the array and its value to an another array
				$copy[$i][$j] = $my_array[$i][$element];
				//delete the element from source array
			}
		}

		return $copy;
	}
}