<?php

	function sortString($string){
	  $stringParts = str_split($string);
	  sort($stringParts);
	  return implode('', $stringParts); // abc
	}

	function checkAnagram(){
		$string1 = 'AAa';
		$string2 = 'aaa';

		$string1 = sortString(strtolower($string1));
		$string2 = sortString(strtolower($string2));
		
		if(strcmp($string1,$string2)){
			return true;
		}
		else{
			return false;
		}
	}

	if(checkAnagram()){
		echo "Not Anagram";
	}
	else{
		echo "Anagram";
	}



	// [Test Method]
	function validateAnagram(){
		if(checkAnagram()){
			echo "Not Anagram";
		}
		else{
			echo "Anagram";
		}
	}
	

?>