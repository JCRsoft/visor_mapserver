<?php 

//Cargo la extensión MapScript . Verificamos si la extensión ya está cargada por defecto.
 if (!extension_loaded("MapScript")) dl('php_mapscript.'.PHP_SHLIB_SUFFIX);

 // instanciamos un nuevo objeto: map object.
 $jMap = ms_newMapObj("");

 $jMap->set("name","Jotaudo");
 $jMap->set("shapepath","C:/ms4w/Apache/htdocs/visor/data/VisoJardin/");

 $jMap->setSize(500,500);
 $jMap->setExtent(1030125.61155549, 1117072.84212775, 1048332.29001799, 1128190.29559025);

 $jMap->web->set( "imagepath" , "C:/ms4w/tmp/ms_tmp/" );
 $jMap->web->set( "imageurl", "/ms_tmp/" );



 if($_POST)
 {
 



$jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JarChoco");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JarChoco.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(29, 255, 29);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();

 
 if ($_POST[parque]=='on')
 {

$jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_Jardin");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_Jardin.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(108, 128, 30);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
 }


 
/***********************************************************/
if($_POST[rios]=="on")
 {
$chequeado="checked";
 $jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JarRios");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JarRios.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(43, 74, 150);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
 }
 /***********************************************************/
if($_POST[comunas]=="on")
 {
$chequeado="checked";
$jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JaComun");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JaComun.shp");
 $jLayer->set( "classitem", "N_BARRIO");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(15, 111, 83);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
 
 }
  /***********************************************************/
if($_POST[cienegas]=="on")
 {
$chequeado="checked";
 $jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JarCien");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JarCien.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(207, 255, 207);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
 }
/***********************************************************/
if($_POST[quebradas]=="on")
 { 
$chequeado="checked";
 $jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JarQued");
 $jLayer->set( "type", MS_LAYER_POINT);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JarQued.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(128, 213, 32);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
 }
 
 }
 else
 {
$jLayer = ms_newLayerObj($jMap);
 $jLayer->set( "name", "26_JarChoco");
 $jLayer->set( "type", MS_LAYER_POLYGON);
 $jLayer->set( "status", MS_ON);
 $jLayer->set( "data", "26_JarChoco.shp");
 //Creamos un classObj dentro del LayerObj
 $jClass = ms_newClassObj($jLayer);
 //Creamos un styleObj dentro del classObj
 $jStyle = ms_newStyleObj($jClass);

 $jStyle->color->setRGB(29, 255, 29);
 $jStyle->outlinecolor->setRGB(1, 1, 1);
 $jImagen = $jMap->draw();
	 
}
 /***********************************************************/


 // Creamos y capturamos la ruta de imagen renderizada.
$url_imagen = $jImagen->saveWebImage();
 ?>
 <form method="post" action="map.php">
<table width="669" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; margin-left:auto; margin-right:auto;">
  <tr>
    <td width="471" align="center" valign="middle" style="text-align:center; background:#ffcc66; background-image:url('recursos/fondo_degradado.png'); background-repeat:repeat-x;"><strong>Visor Jardidn Botanico Jotaudo</strong></td>
    <td width="164" align="center" valign="middle" style="background:#ffcc66; background-image:url('recursos/fondo_degradado.png'); background-repeat:repeat-x;"><strong>Control de Capas</strong></td>
    <td width="35" align="center" valign="middle"><input type="submit" style="height:25px; width:35px; background:#FC6; text-align:center; background-image:url('recursos/recargar.png'); background-position:center; background-repeat:no-repeat;" value=""  /></td>
  </tr>
  <tr>
    <td height="36" rowspan="2" style="background:#1dff1d;"> 
      <div style="border:1px solid #330; height:auto; width:100%;">
        <input type="image" src="<?=$url_imagen?>" /></div>
      </td>
    
    <td colspan="2" align="left" valign="top">
      <div style="border:1px solid #330; border-left:0px;">
        <input name="choco" type="checkbox" id="choco" value="on" />
        Capa Choco<br />
        <input name="parque" type="checkbox" id="parque" value="on" />
        Capa Jardin<br />
        <input name="rios" type="checkbox" id="rios" value="on" />
        Capa Rios<br />
        <input name="comunas" type="checkbox" id="comunas" value="on"  />
        Capa Comuna<br />
        <input name="cienegas" type="checkbox" id="cienegas" value="on" />
        Capa Cienegas
        </div></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
    <div style="border:1px solid #330; border-left:0px;">
    <img src="./recursos/lugar.png" width="186" height="294" />
    </div>
    </td>
  </tr>
  </table>
</form>