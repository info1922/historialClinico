<div class="row">
      <hr>
      <h5>Indicadores clinicos <i class="fi-check" style="font-size: 22px"></i> </h5>
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
        
        <div class="medium-4  columns">
            <legend>Diarrea</legend>
            <select name="Diarrea" id="Diarrea" ng-model="Diarrea">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
        
        <div class="medium-4  columns">
            <legend>Estreñimiento</legend>
            <select name="Estrenimiento" id="Estrenimiento" ng-model="Estrenimiento">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
        <div class="medium-4  columns">
          <legend>Gastritis</legend>
            <select name="Gastritis" id="Gastritis" ng-model="Gastritis">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
</div>
<br>
<div class="row">

        <div class="medium-4  columns">
            <legend>Ulcera</legend>
            <select name="Ulcera" id="Ulcera" ng-model="Ulcera">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
        
        <div class="medium-4  columns">
            <legend>Nauseas</legend>
            <select name="Nauseas" id="Nauseas" ng-model="Nauseas">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
        <div class="medium-4  columns">
            <legend>Pirosis</legend>
            <select name="Pirosis" id="Pirosis" ng-model="Pirosis">
                    <option value="si">Si</option>
                    <option value="no">No</option>
            </select> 
            </div>
</div>
<br>
<div class="row">

        <div class="medium-4  columns">
            <legend>Colitis</legend>
            <select name="Colitis" id="Colitis" ng-model="Colitis">
                    <option value="si">Si</option>
                    <option value="no">No</option>
            </select> 
            </div>
        
        <div class="medium-4  columns">
            <legend>Vomito</legend>
            <select name="Vomito" id="Vomito" ng-model="Vomito">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> 
        </div>
        <div class="medium-4  columns">
          <legend>Otros</legend>
            <select name="Otros" id="Otros" ng-model="Otros">
                    <option value="si">Si</option>
                    <option value="no">No</option>
            </select> 
        </div>
</div>
<br>
<!-- <div class="row">
    <div class="medium-2 medium-centered columns">
        <button type="button" ng-click="AddIndicadorC()"  class="success button expanded">Guardar</button>
    </div>
</div> -->
<hr>

<div class="row">
    <table>
        <tbody>
            <tr>
              <td>Es alérgico a algún alimento</td>
              <td><select name="Alergico" id="Alergico" ng-model="Alergico">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select> </td>
              
              <td>Porque:
                  <textarea id="MotivodelaAlergia" placeholder="MotivodelaAlergia" name="MotivodelaAlergia" ng-model="MotivodelaAlergia"></textarea> 
                </td>
            </tr>
            <tr>
                <td>Padece alguna enfermedad diagnosticada</td>
                <td>
                  <textarea id="EnfermedadDiagnosticada" name="EnfermedadDiagnosticada" ng-model="EnfermedadDiagnosticada" placeholder="Motivo"></textarea> 
                </td>
            </tr>
            <tr>
                <td>Anteriormente ha tenido algún padecimiento</td>
                <td>
                  <textarea id="AnteriorPadecimiento" ng-model="AnteriorPadecimiento" name="AnteriorPadecimiento" placeholder="Motivo"></textarea> 
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="row">
    <div class="medium-2 medium-centered columns">
        <a  type="button" ng-click="AddIndicadorC(); AddAlergias()" class="success button expanded" ">Guardar</a>
    </div>
</div>