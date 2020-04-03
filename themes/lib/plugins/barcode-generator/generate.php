<?php

require "vendor/autoload.php";

class codBarras 
{
	
	function geraCod($codigo)
	{
		$Bar = new Picqer\Barcode\BarcodeGeneratorPNG();
		$code = $Bar->getBarcode($codigo, $Bar::TYPE_CODE_128);

		$codbarras ='
			<table cellspacing="0" cellspadding="0" style="width: 100%">
				<tr>
					<td align="center" style="border: 0px solid #fff; padding: 2px; width: 30%;">
						<img src="data:image/png;base64,'.$code.'" />
					</td>
				</tr>
				<tr>
					<td align="center" style="border: 0px solid #fff; padding: 2px; width: 100%">'.$codigo.'</td>
				</tr>
			</table>
		';

		return $codbarras;
	}
}

?>
