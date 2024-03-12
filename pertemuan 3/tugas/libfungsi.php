<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/

	function kelulusan($nilai_hasil){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		if($nilai_hasil>55){
			return "Lulus";
		}
		else{
			return "Tidak Lulus";
		}
	}
	
	function grade($nilai_hasil) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
		if($nilai_hasil<= 35 && $nilai_hasil>= 0){
			return "E";
		}
		elseif($nilai_hasil<= 55 && $nilai_hasil >= 36){
			return "D";
		}
		elseif($nilai_hasil<= 69 && $nilai_hasil >= 56){
			return "C";
		}
		elseif($nilai_hasil<= 84 && $nilai_hasil >= 70){
			return "B";
		}
		elseif($nilai_hasil = 100 && $nilai_hasil>=85){
			return "A";
		}
		else{ 
			return "I";
		}
	}

	function predikat($grade){
		switch ($grade){
			case 'E':
				return "Sangat Kurang";
			case 'D':
				return "Kurang";
			case 'C':
				return "Cukup Memuaskan";
			case 'B':
				return "Memuaskan";
			case 'A':
				return "Sangat Mmemuaskan";
			default :
			     return "Tidak Ada";
		}
	}
?>