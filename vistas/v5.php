<div class="row">
      <hr>
      <h5>Aspectos ginecológicos <i class="fi-torso-female"></i> </h5>
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
    <div>
        
        <div class="medium-6 columns">
            <table>
                <tr>
                    <td>Embarazo actual</td>
                    <td>
                    <select name="EmbarazoActual" id="EmbarazoActual" ng-model="EmbarazoActual">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Ha modificado sus hábitos alimentarios: </td>
                    <td>
                    <select name="HabitosAlimen" id="HabitosAlimen" ng-model="HabitosAlimen">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Hizo usted una planificación dietética del embarazo: </td>
                    <td><select name="Planificacion" id="Planificacion" ng-model="Planificacion">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select></td>
                </tr>
                <tr>
                    <td>En qué consistió: </td>
                    <td colspan="2">
                        <textarea id="Consistio" id="Consistio" ng-model="Consistio"></textarea>
                    </td>
                </tr>
                
            </table>
            
        </div>
        <div class="medium-6 columns">
            <table>
                <tr>
                    <td>Toma usted ácido fólico: </td>
                    <td  width="120"><select name="AcidoFolico" id="AcidoFolico" ng-model="AcidoFolico">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select></td>
                </tr>
                <tr>
                    <td>Ha tenido antojos de algunos alimentos espontáneamente: </td>
                    <td width="120"><select name="Antojo" id="Antojo" ng-model="Antojo">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select></td>
                </tr>
                <tr>
                    <td>¿Qué alimentos? </td>
                    <td colspan="2">
                        <textarea id="QueAlimentos" id="QueAlimentos" ng-model="QueAlimentos"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Ha tenido náuseas y vómitos: </td>
                    <td width="120"><select name="NauseasVomitos" id="NauseasVomitos" ng-model="NauseasVomitos">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select></td>
                </tr>
                <tr>
                    <td>Ha sufrido mareos: </td>
                    <td width="120"><select name="Mareos" id="Mareos" ng-model="Mareos">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select></td>
                </tr>
            </table>
        </div>
    </div>         
</div>
<br>
<div class="row">
    <div class="medium-2 medium-centered  columns">
        <a  type="button" class="success  button expanded" ng-click="AddAspGine()">Guardar</a>
    </div>
</div>