<?php
	//Параметр, который должен указываться.
	$param = 'github';

	//Если параметр указан
	if(isset($_GET[$param]))
	{
		//Если параметр равен 1
		if($_GET[$param] == 1)
		{
			echo ucfirst($param) . ' - это круто!';
		}

		//Если равен 0
		if($_GET[$param] == 0)
		{
			echo ucfirst($param) . ' - это плохо!';
		}
	}

	//А это, если не указали
	else
	{
		echo 'Ты не указал параметр!';
	}
?>