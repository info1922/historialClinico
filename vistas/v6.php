<div class="row">
      <hr>
      <h5>Indicadores antropométricos <i class="fi-torso large"></i> </h5>
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
    <div class="medium-6 columns">
        
        <table>
            <thead>
                <tr>
                  <th>Medición</th>
                  <th>Dato</th>
                </tr>
            </thead>
            <tr>
                <td>Peso actual (Kg)</td>
                <td><input type="text" id="PesoActual" placeholder="" name="PesoActual" ng-model="PesoActual"></td>
            </tr>
            <tr>
                <td>Peso habitual (Kg)</td>
                <td><input type="text" id="PesoHabitual" placeholder="" name="PesoHabitual" ng-model="PesoHabitual"></td>
            </tr>
            <tr>
                <td>Estatura (cm)</td>
                <td><input type="text" id="Estatura" placeholder="" name="Estatura" ng-model="Estatura"></td>
            </tr>
        </table>
      
        <br>
        <div class="row centered">
           
           
            <div class="medium-4 medium-centered  columns">
                <br>
                <button type="button" class="button expanded" ng-click="Evaluacion()">Evaluación</button>
            </div>
            
        </div>
       <table>
            <thead>
                <tr>
                  <th>Evaluación</th>
                  <th>Dato e interpretación</th>
                </tr>
            </thead>
            <!--<tr>-->
            <!--    <td>Complexión</td>-->
            <!--    <td><input type="text" id="" placeholder=""></td>-->
            <!--</tr>-->
            <tr>
                <td>IMC</td>
                <td><input type="text" id="IMC" placeholder="" disabled name="IMC" ng-model="IMC"></td>
            </tr>
            <tr>
                <td>PCS</td>
                <td><input type="text" id="PCS" placeholder="" disabled name="PCS" ng-model="PCS"></td>
            </tr>
            <tr>
                <td>ICC</td>
                <td><input type="text" id="ICC" placeholder="" disabled name="ICC" ng-model="ICC"></td>
            </tr>
            <!--<tr>-->
            <!--    <td>% de peso teórico</td>-->
            <!--    <td><input type="text" id="" placeholder=""></td>-->
            <!--</tr>-->

            
            <tr>
                <td>CM</td>
                <td><input type="text" id="CM" placeholder="" disabled name="CM" ng-model="CM"></td>
            </tr>
            
            <tr>
                <td>TMB</td>
                <td><input type="text" id="TMB" placeholder="" disabled name="TMB" ng-model="TMB"></td>
            </tr>
            <tr>
                <td>ETA</td>
                <td><input type="text" id="ETA" placeholder="" disabled name="ETA" ng-model="ETA"></td>
            </tr>
            <tr>
                <td>ACT.F</td>
                <td><input type="text" id="ACT" placeholder="" disabled name="ACT" ng-model="ACT"></td>
            </tr>
            <tr>
                <td>GET</td>
                <td><input type="text" id="GET" placeholder="" disabled name="GET" ng-model="GET"></td>
            </tr>
        </table>
         <div class="row">
            <div class="medium-4 medium-centered  columns">
                <br>
                <button type="button" class="success  button expanded" ng-click="AddIndicaAntro()">Guardar</button>
            </div>
        </div>
    </div>
    <div class="medium-6 columns">
        
         <table>
            <thead>
                <tr>
                  <th>Mediciones</th>
                </tr>
            </thead>
            <tr>
                <td>Circunferencia cadera (cm)</td>
                <td><input type="text" id="CircunferenciaCadera" placeholder="" name="CircunferenciaCadera" ng-model="CircunferenciaCadera"></td>
            </tr>
            <tr>
                <td>Circunferencia muñeca (cm)</td>
                <td><input type="text" id="CircunferenciaMuneca" placeholder="" name="CircunferenciaMuneca" ng-model="CircunferenciaMuneca"></td>
            </tr>
            <tr>
                <td>Circunferencia cintura (cm)</td>
                <td><input type="text" id="CircunferenciaCintura" placeholder="" name="CircunferenciaCintura" ng-model="CircunferenciaCintura"></td>
            </tr>
            <tr>
                <td>{{riesgo}}</td>
            </tr>
        </table>
        
       
    </div>
    

</div>
