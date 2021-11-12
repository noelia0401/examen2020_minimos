<?php
include 'head.php';
// si he pulsado el boton calcular
if (isset($_REQUEST['btn_calcular']))
{
    echo 'YA has pulsado calcular';
}
echo'  

     <div class="postcontent">
      <h2>Calculadora Harris-Benedict   </h2>
              <form action="" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Nivel de Actividad:</td>  
                                <td colspan=2>
                                    <select name="cmb_actividad">
                                    <option value="">Sedentario</option>
                                    <option value="">Actividad Ligera</option>
                                    <option value="">Actividad Moderada</option>
                                    <option value="">Actividad Intensa</option>
                                    <option value="">Actividad Muy Intensa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><label for="txt_peso">Peso : </label></td>
                                <td>
                                
                                    <input type="text"   id="txt_peso" name="txt_peso" size="7" /> 
                                </td>
                            </tr>
                            <tr>
                                <td ></td>
                                <td>
                                    <input type="radio"  name="rb_tipo_peso"  checked="checked" value=""/>Kilos	
                                    <input type="radio"  name="rb_tipo_peso"  value=""/>Libras
                                    </td>
                             </tr>  
                            <tr>
                               <td align="right"><label for="txt_altura">Altura ( en cm )</label></td>
                               <td>
                                 <input type="text"   id="txt_altura" name="txt_altura" size="7" /> cm
                               </td>
                            </tr>
                            <tr>
                            <td align="right"><label for="txt_edad">Edad ( en años )</label></td>
                            <td>
                            
                                <input type="text"   id="txt_edad" name="txt_edad" size="7" /> Años
                            </td>
                        </tr>
                            <tr>
                                <td align="right">Sexo :</td>
                                <td>
                                    <input type="radio"  name="rb_sexo"  checked="checked" value=""/>Hombre	
                                    <input type="radio"  name="rb_sexo"  value=""/>Mujer
                                    </td>
                             </tr>  
                            
                            
                            <tr>
                                <td colspan="2">
                                    <div align="center"><strong>
                                           
                                            <input name="btn_calcular" type="submit" id="btn_calcular" value="Calcular"/>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <label for="txt_calorias">Las calorias recomendadas diarias son :</label>
                        	
                        <input type="text" id="txt_calorias" name="txt_calorias" size="5" /> calorias

                    



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

