<div class="row">
      <hr>
      <h5>Datos personales <i class="fi-clipboard-pencil"></i> </h5>
</div>
   <div class="row">
       <div class="medium-3  columns">
          <label for="right-label" class="text-lefth middle">Id
            <input type="number" ng-model="id" name="id" id="id" placeholder="id">
          </label>
        </div>
   </div>
    <div class="row">
        
        <div class="medium-4  columns">
          <label for="right-label" class="text-lefth middle">Nombre
            <input type="text" ng-model="nombre" id="nombre" name="nombre" placeholder="Nombre">
          </label>
        </div>
        
        <div class="medium-4  columns">
          <label for="right-label" class="text-lefth middle">Edad
            <input type="number" value="20" ng-model="edad" id="edad" name="edad">
          </label>
        </div>
        
        <div class="medium-4 columns">
            <label for="right-label" class="text-lefth middle">Sexo
                <select name="sexo" id="sexo" ng-model="sexo">
                    <option value="masculino" selected>Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </label>
        </div>
    
    </div>
    
    <div class="row">
        <div class="medium-4  columns">
            <label for="right-label" class="text-lefth middle">Fecha de nacimiento
                <input placeholder="aaaa-mm-dd" type="text" class="span2" value="" id="fecha" name="fecha" ng-model="fecha">
            </label>
        </div>
    
        <div class="medium-4 columns">
            <label for="right-label" class="text-lefth middle">Dirección
              <input type="text" id="direccion" name="direccion" placeholder="Dirección" ng-model="direccion">
            </label>
        </div>
        
        <div class="medium-4  columns">
            <label for="right-label" class="text-lefth middle">Telefono
              <input type="tel" id="telefono" name="telefono" ng-model="telefono">
            </label>
        </div>
    </div>
    
    
    <div class="row">
      <div class="medium-5 columns">
        <label for="right-label" class="text-lefth middle">Correo electrónico
          <input type="text" id="correo" placeholder="Correo electrónico" ng-model="correo" name="correo">
        </label>
      </div>
      
      <div class="medium-5 columns">
        <label for="right-label" class="text-lefth middle">Motivo por el cual acude a la consulta
          <textarea id="motivo" name="motivo" placeholder="Motivo" ng-model="motivo"></textarea> 
        </label>
      </div>
    
    </div>
    <br>
    <div class="row">
      <div class="medium-2 medium-centered columns">
        <a  type="button" ng-click="AddPaciente()" value="submit" class="success button expanded">Guardar</a>
        
      </div>
    </div>
    
    
    <br>
    
    <!-- <div class="row text-center">
      <div class="medium-6 columns medium-centered">
        <table>
          <thead>
            <tr>
              <th>Id </th>
              <th>
                Nombre
              </th>
            </tr>
          </thead>
          
          <tbody ng-init="getDP()">
            <tr ng-repeat="dP in Datos | filter: query">
              <td>{{dP.id}}</td>
              <td>{{dP.nombre}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
 -->