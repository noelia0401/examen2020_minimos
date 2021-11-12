<?php
include 'head.php';

$TMB="";
if (isset($_REQUEST['btn_calcular']))
{
    
    $peso= $_REQUEST['txt_peso'];
    $tipo_peso= $_REQUEST['rb_tipo_peso'];
    $altura= $_REQUEST['txt_altura'];
    $edad= $_REQUEST['txt_edad'];
    $sexo= $_REQUEST['rb_sexo'];
    $nivel_actividad= $_REQUEST['cmb_actividad'];

    if ($tipo_peso=="libras")
    {
        $peso=$peso*0.453592;
    }

    if (($edad>21) and ($edad<70) and ($altura> 150) and ($altura < 200))
    {
        if ($sexo=="mujer")
        {
            $TMB= 655 + (9.6 * $peso) + (1.8 * $altura) -(4.7 * $edad);
        }
        else 
        {
            $TMB= 66 + (13.7*$peso) + (5*$altura) -(6.8 * $edad);
        }
    }
    else 
    {
        $TMB="NO SE PUEDE CALCULAR";
    }
}
echo'  

     <div class="postcontent">
      <h2>Calculadora Harris-Benedict   </h2>
              <form action="Solucion_Ejercicio.php" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Nivel de Actividad:</td>  
                                <td colspan=2>
                                    <select name="cmb_actividad">
                                    <option value="1.2">Sedentario</option>
                                    <option value="1.375">Actividad Ligera</option>
                                    <option value="1.55">Actividad Moderada</option>
                                    <option value="1.725">Actividad Intensa</option>
                                    <option value="1.9">Actividad Muy Intensa</option>
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
                                    <input type="radio"  name="rb_tipo_peso"  checked="checked" value="kg"/>Kilos	
                                    <input type="radio"  name="rb_tipo_peso"  value="libras"/>Libras
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
                                    <input type="radio"  name="rb_sexo"  checked="checked" value="hombre"/>Hombre	
                                    <input type="radio"  name="rb_sexo"  value="mujer"/>Mujer
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
                        	
                        <input type="text" id="txt_calorias" name="txt_calorias" size="" value="'.$TMB.'" /> calorias

                    



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

