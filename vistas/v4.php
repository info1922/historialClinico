<div class="row">
      <hr>
      <h5>Actividades <i class="fi-mountains"></i> </h5>
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
        <table>
            <thead>
                <tr>
                  <th colspan="5" class="text-center">Rango de Actividad fisica</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <td>>=</td>
                    <td>1.0</td>
                    <td><</td>
                    <td>1.4</td>
                    <td>Sedentario</td>
                </tr>
                <tr>
                    <td>>=</td>
                    <td>1.4</td>
                    <td><</td>
                    <td>1.6</td>
                    <td>Poco activo</td>
                </tr>
                <tr>
                    <td>>=</td>
                    <td>1.6</td>
                    <td><</td>
                    <td>1.9</td>
                    <td>Activo</td>
                </tr>
              
                <tr>
                    <td>>=</td>
                    <td>1.9</td>
                    <td><</td>
                    <td>2.5</td>
                    <td>Muy activo</td>
                </tr>
            </tbody>
           
        </table>
        
        <br>
            <!--<div class="small-6 columns">-->
            <!--  <div class="slider" data-slider data-initial-start="1.0" data-end="2.5">-->
            <!--    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="sliderOutput1"></span>-->
            <!--    <span class="slider-fill" data-slider-fill></span>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="small-6 small-centered columns">
              <input type="number" id="Rango" name="Rango" min="1.0" max="2.5" step="0.1" ng-model="Rango">
            </div>
        <br>
        <div class="row">
            <div class="medium-6 medium-centered  columns">
                <a  type="button" class="success  button expanded" ng-click="AddActividades()">Guardar</a>
            </div>
        </div>
        
        
    </div>
    <div class="medium-8  columns">
        <table>
            <tr>
                <td>Ejercicio o deporte que practica: </td>
                <td><input type="text" id="EjercicioPractica" name="EjercicioPractica" ng-model="EjercicioPractica" placeholder=""></td>
            </tr>
            <tr>
                <td>Frecuencia/semana</td>
                <td><input type="text" id="Frecuencia" placeholder="" name="Frecuencia" ng-model="Frecuencia"></td>
            </tr>
            <tr>
                <td>Tiempo (min)</td>
                <td><input type="number"  name="Tiempo" id="Tiempo" ng-model="Tiempo" ></td>
               
            </tr>
            <tr>
                <td>¿Hace cuánto tiempo comenzó a realizar la actividad</td>
                <td><input type="text" id="HaceComenzoActividad" name="HaceComenzoActividad" ng-model="HaceComenzoActividad" placeholder=""></td>
            </tr>
            <tr>
                <td>¿Cuál fue el motivo por el cual comenzó la actividad?</td>
                <td><input type="text" id="MotivoActividad" name="MotivoActividad" ng-model="MotivoActividad" placeholder=""></td>
            </tr>
            <tr>
                <td>¿Se sintió bien al realizar esta actividad?</td>
                <td><select name="SintomasActividad" id="SintomasActividad" ng-model="SintomasActividad">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></td>  
            </tr>
            <tr>
                <td>Aspecto general que denota en usted mismo: </td>
                <td><input type="text" id="Aspecto" name="Aspecto" ng-model="Aspecto" placeholder="" ></td>
            </tr>
            <tr>
                <td>Cuantos vasos de agua consume al día: </td>
                <td><input type="number" id="VasosAgua" name="VasosAgua"  ng-model="VasosAgua" placeholder=""></td>
            </tr>
            <tr>
                <td>Padece de mareos durante la actividad física </td>
                <td><select name="MareosActividad" id="MareosActividad" ng-model="MareosActividad">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></td>
            </tr>
        </table>              
    </div>
</div>
<br>







<br>

