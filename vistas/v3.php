<div class="row">
      <hr>
        <div class="medium-6  columns">
            <h5 class="text-center">Ingesta de medicamento para bajar de peso  <i class="" style="font-size: 22px"></i> </h5>
        </div>
         <div class="medium-6  columns">
            <h5 class="text-center">Antecedentes familiares  <i class="" style="font-size: 22px"></i> </h5>
        </div>
        
      
</div>
<br>
<div class="row">
    <div class="medium-3 columns" ng-init="getID()">
            <legend>Id</legend>
            <select ng-model="id">
                <option ng-repeat="x in Datos" value="{{x.id}}">{{x.id +' '+ x.nombre}}</option>
            </select>
    </div>
</div>
<div class="row">
     <div class="medium-6  columns">
         
        <table>
            <tbody>
                <tr>
                    <td width="100">
                        Laxantes
                    </td>
                    <td>
                        <select name="Laxantes" id="Laxantes" ng-model="Laxantes" >
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    <td>Porque:
                        <textarea id="MotivoLaxante" placeholder="Motivo" name="MotivoLaxante" ng-model="MotivoLaxante"></textarea> 
                        </td>
                </tr>
                <tr>
                    <td width="100">
                        Diuréticos
                    </td>
                    <td>
                        <select name="Diureticos" id="Diureticos" ng-model="Diureticos">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    <td>Porque:
                        <textarea id="MotivoDiureticos" name="MotivoDiureticos" ng-model="MotivoDiureticos" placeholder="Motivo" ></textarea> 
                        </td>
                </tr>
                <tr>
                    <td width="100">
                        Antiácidos
                    </td>
                    <td>
                        <select name="Antiacidos" id="Antiacidos" ng-model="Antiacidos">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    <td>Porque:
                        <textarea id="MotivoAntiacido" name="MotivoAntiacido" ng-model="MotivoAntiacido" placeholder="Motivo"></textarea> 
                        </td>
                </tr>
                <tr>
                    <td>
                        Analgésicos
                    </td>
                    <td>
                        <select name="Analgesicos" id="Analgesicos" ng-model="Analgesicos">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    <td>Porque:
                        <textarea id="MotivoAnalgesico" name="MotivoAnalgesico" ng-model="MotivoAnalgesico" placeholder="Motivo"></textarea> 
                        </td>
                </tr>
            </tbody>
        
        </table>
        <br>
        <!-- <div class="row">
            <div class="medium-4 medium-centered  columns">
                <button type="button" class="success  button expanded" >Guardar</button>
            </div>
        </div> -->
    </div>
           



    <div class="medium-6  columns">
        <table>
            <tbody>
                <tr>
                    <td>Obesidad</td>
                    <td>
                        <select name="Obesidad" id="Obesidad" ng-model="Obesidad">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    
                </tr>
                <tr>
                    <td>Diabetes</td>
                    <td>
                        <select name="Diabetes" id="Diabetes" ng-model="Diabetes">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Cáncer</td>
                    <td>
                        <select name="Cancer" id="Cancer" ng-model="Cancer">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>HTA</td>
                    <td>
                        <select name="HTA" id="HTA" ng-model="HTA">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Hipercolesterolemia</td>
                    <td>
                        <select name="Hipercolesterolemia" id="Hipercolesterolemia" ng-model="Hipercolesterolemia">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Hipertrigliceridemia</td>
                    <td>
                        <select name="Hipertrigliceridemia" id="Hipertrigliceridemia" ng-model="Hipertrigliceridemia">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
            </tbody>
            
        </table>
        <br>
        <!-- <div class="row">
            <div class="medium-4 medium-centered  columns">
                <button type="button" class="success  button expanded">Guardar</button>
            </div>
        </div> -->
    </div>
</div>

<hr>
    <br>
<div class="row">    
    <div class="medium-6  columns">
        <table>
            <tbody>
                <tr>
                    <td width="250">¿Ha tenido alguna intervención quirúrgica que no le permita el consumo de algún alimento?</td>
                    <td>
                        <select name="Intervencion" id="Intervencion" ng-model="Intervencion">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                    <td><label for="right-label" class="text-lefth middle">¿Qué alimento?
                        <textarea id=" " placeholder="Motivo" ng-model="QueAlimento"></textarea> 
                        </label></td>
                    
                </tr>
            </tbody>
        </table>  
    </div>
    <div class="medium-6  columns">
        <table>
            <tbody>
                <tr>
                    <td>¿Cuál es la frecuencia con la cual se desparasita?</td>
                    <td>
                         <input type="text" id="FrecuenciaDesparacita" placeholder="" name="FrecuenciaDesparacita" ng-model="FrecuenciaDesparacita"> 
                        </td>
                </tr>
                <tr>
                    <td>¿Cuándo fue la última vez que se desparasito?</td>
                    <td>
                         <input type="text" id="UltimaVezDesp" placeholder="" ng-model="UltimaVezDesp" name="UltimaVezDesp"> 
                        </td>
                </tr>
            </tbody>
        </table> 
    </div>
    <div class="medium-6  columns">
        <table>
            <tbody>
                <tr>
                    <td width="250">¿Consume bebidas alcohólicas?</td>
                    <td>
                        <select name="ConsumeBeAlco" id="ConsumeBeAlco" ng-model="ConsumeBeAlco">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td width="250">¿Consume tabaco?</td>
                    <td>
                        <select name="ConsumeTabaco" id="ConsumeTabaco" ng-model="ConsumeTabaco">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select> 
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="medium-4 medium-centered  columns">
                <br>
                <a  type="button" class="success  button expanded" ng-click="AddIngesta(); AddAnteFam(); AddQuirurgica()">Guardar</a>
            </div>
        </div>
    </div>
    <br>
 
        
  
   
</div>

