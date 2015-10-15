<HTML>
<HEAD></HEAD>
<BODY>
	<?php 
		$ar=fopen("vivendas.txt","a") or die("Problemas en el ingreso"); 
		fputs($ar,"Tipo vivienda: ".$_REQUEST['viv']."\n");
		fputs($ar,"Zona: ".$_REQUEST['zona']."\n");
		fputs($ar,"Direccion: ".$_REQUEST['dir']."\n");
		fputs($ar,"Numero de dormitorios: ".$_REQUEST['cdorm']."\n");
		fputs($ar,"Precio: US$ ".$_REQUEST['prec']."\n");
		fputs($ar,"Tiene: ");
		if (isset($_REQUEST['pisc'])) {
			fputs($ar,"Piscina ");
		};

		if (isset($_REQUEST['jard'])) {
			fputs($ar,"Jardin ");
		};
		
		if (isset($_REQUEST['garj'])) {
			fputs($ar,"Garage ");
		};
		fputs($ar,"\n");
		fputs($ar,"Observaciones: ".$_REQUEST['obs']."\n");

		fputs($ar,"-------------------------------------------------------"."\n");
		fclose($ar);
		echo "Vivienda ingresada satisfactoriamente.";
		



	?>
</BODY>
</HTML>