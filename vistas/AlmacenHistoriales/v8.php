<div class="row">
	<hr>
	<h5>Historiales de los pacientes <i class="fi-clipboard-notes"></i></h5>
</div>
<br>
<div class="row">
  <div class="large-6 large-centered columns">

      <div class="row collapse">
       <div class="large-2 columns">
          <span class="postfix"><i class="fi-magnifying-glass" style="font-size:30px"></i></span>
        </div>
        <div class="large-10 columns">
          <input type="search" placeholder="Buscar" ng-model="query">
        </div>
        
      </div>
   
  </div>
</div>
<br>
<div class="row">
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre del Paciente</th>
				<th>Editar</th>
				<th>Reporte</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody class="" ng-init="getPaciente()">
			<tr class="" ng-repeat="paciente in Datos | filter: query">
				<td>{{paciente.id}}</td>
				<td>{{paciente.nombre}}</td>
				<td><button data-open="exampleModal11" type="button" class="success  button expanded" ng-click="EditarPaciente(paciente.id); EditarPaciente2(paciente.id); EditarPaciente22(paciente.id); EditarPaciente3(paciente.id); EditarPaciente33(paciente.id); EditarPaciente333(paciente.id); EditarPaciente4(paciente.id); EditarPaciente5(paciente.id)">Editar</button></td>
				<td><button type="button" class="button expanded" ng-click="PDF(paciente.id)" type="">Generar Reporte</button></td>
				<td><button type="button" class="alert  button expanded" ng-click="DeletePaciente(paciente.id)">Eliminar</button></td>
				
			</tr>
		</tbody>
	</table>
</div>



	


  
    <div class="small reveal" id="exampleModal11" data-reveal>
        <h4>Elige que sección deseas actualizar <i class="fi-clipboard-pencil" style="font-size:2rem"></i></h4>
        <hr>
        <br>
        <div class="large-2 columns">
            <button type="button" data-open="exampleModal1" class="button">Datos personales  <i class="fi-clipboard-pencil" style="font-size:2rem"></i></button>            
        </div>
        <div class="large-2 columns">
            <button type="button" data-open="exampleModal2" class="button">Indicadores Clinicos <br><i class="fi-check" style="font-size:2rem"></i></button>
        </div>
        <div class="large-2 columns">
            <button type="button" data-open="exampleModal3" class="button">Ingesta de Medicamento <i class="fi-plus" style="font-size:2rem"></i></button>
        </div>
        <div class="large-2 columns">
            <button type="button" data-open="exampleModal4" class="button">Actividad Fisica <br><i class="fi-mountains" style="font-size:2rem"></i></button>
        </div>
        <div class="large-2 columns">
            <button type="button" data-open="exampleModal5" class="button">Aspectos Ginecológicos <i class="fi-torso-female" style="font-size:2rem"></i></button>
        </div>
        <div class="large-2 columns">
             <button type="button" data-open="exampleModal6" class="button">Indicadores Antropométricos <i class="fi-list-bullet" style="font-size:2rem"></i></button>
        </div>


    	  
   	    <button class="close-button" data-close aria-label="Close reveal" type="button">
 	    <span aria-hidden="true">&times;</span>
    	  </button>
   	</div>
   	
   	
   	<!-- Modal dos -->
    <div class="small reveal" id="exampleModal1" data-reveal>
          <p class="lead">Datos Personales <i class="fi-clipboard-pencil"></i></p>
          <!-- Datos Personales -->
        <div class="row">
          <hr>
        </div>
        <div class="row">
            <div class="medium-12  columns">
              <label for="right-label" class="text-lefth middle">Id
                <input type="text" disabled ng-model="id" name="id" id="id" placeholder="id">
              </label>
            </div>
            <div class="medium-4  columns">
              <label for="right-label" class="text-lefth middle">Nombre
                <input type="text" ng-model="nombre" id="nombre" name="nombre" placeholder="Nombre">
              </label>
            </div>

            <div class="medium-4  columns">
              <label for="right-label" class="text-lefth middle">Edad
                <input type="text"   ng-model="edad" id="edad" name="edad">
              </label>
            </div>

            <div class="medium-4 columns">
                <label for="right-label" class="text-lefth middle">Sexo
                    <select name="sexo" id="sexo" ng-model="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
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
        
              <!-- Fin Datos Personales -->
          <div class="medium-4 medium-centered columns">
              <button type="button"  class="success expanded button" ng-click="ActualizarPaciente()" value="submit">Guardar</button>
    	      <button type="button" data-close class="warning expanded button">Cancelar</button>
          </div>
    	  
    	  
      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    
    <!--Indicadores Clinicos -->
         <div class="small reveal" id="exampleModal2" data-reveal>
          <p class="lead">Indicadores Clinicos <i class="fi-check"></i></p>
     
        <div class="row">
          <hr>
        </div>
       
       
        <div class="row">
            <div class="medium-3 columns" ng-init="">
                    <label for="right-label" class="text-lefth middle">Id
                        <input type="text" disabled ng-model="id" name="id" id="id" placeholder="id">
                    </label>
            </div>
        </div>

        <div class="row">

                <div class="medium-4  columns">
                    <legend>Diarrea</legend>
                    <select name="Diarrea" id="Diarrea" ng-model="Diarrea">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>

                <div class="medium-4  columns">
                    <legend>Estreñimiento</legend>
                    <select name="Estrenimiento" id="Estrenimiento" ng-model="Estrenimiento">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>
                <div class="medium-4  columns">
                  <legend>Gastritis</legend>
                    <select name="Gastritis" id="Gastritis" ng-model="Gastritis">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>
        </div>
<br>
        <div class="row">

                <div class="medium-4  columns">
                    <legend>Ulcera</legend>
                    <select name="Ulcera" id="Ulcera" ng-model="Ulcera">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>

                <div class="medium-4  columns">
                    <legend>Nauseas</legend>
                    <select name="Nauseas" id="Nauseas" ng-model="Nauseas">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>
                <div class="medium-4  columns">
                    <legend>Pirosis</legend>
                    <select name="Pirosis" id="Pirosis" ng-model="Pirosis">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                    </select> 
                    </div>
        </div>
<br>
        <div class="row">

                <div class="medium-4  columns">
                    <legend>Colitis</legend>
                    <select name="Colitis" id="Colitis" ng-model="Colitis">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                    </select> 
                    </div>

                <div class="medium-4  columns">
                    <legend>Vomito</legend>
                    <select name="Vomito" id="Vomito" ng-model="Vomito">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> 
                </div>
                <div class="medium-4  columns">
                  <legend>Otros</legend>
                    <input type="text" id="Otros" ng-model="Otros" name="Otros">
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
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select> </td>

                      <td>Porque:
                          <textarea id="MotivodelaAlergia"  name="MotivodelaAlergia" ng-model="MotivodelaAlergia"></textarea> 
                        </td>
                    </tr>
                    <tr>
                        <td>Padece alguna enfermedad diagnosticada</td>
                        <td>
                          <textarea id="EnfermedadDiagnosticada" name="EnfermedadDiagnosticada" ng-model="EnfermedadDiagnosticada" ></textarea> 
                        </td>
                    </tr>
                    <tr>
                        <td>Anteriormente ha tenido algún padecimiento</td>
                        <td>
                          <textarea id="AnteriorPadecimiento" ng-model="AnteriorPadecimiento" name="AnteriorPadecimiento" ></textarea> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
            <br>
        
              
          <div class="medium-4 medium-centered columns">
              <button type="button"  class="success expanded button" ng-click="ActualizarPaciente2(); ActualizarPaciente22()" value="submit">Guardar</button>
    	      <button type="button" data-close class="warning expanded button">Cancelar</button>
          </div>
    	  
    	  
      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!--Fin Indicadores Clinicos -->
    
    <!-- Ingesta -->
    <div class="small reveal" id="exampleModal3" data-reveal>
         
        <div class="row">
            <div class="medium-6  columns">
                <p class="lead">Ingesta de medicamento para bajar de peso<i class="" style="font-size: 22px"></i> </p>
            </div>
             <div class="medium-6  columns">
                 <p class="lead">Antecedentes familiares  <i class="" style="font-size: 22px"></i> </p>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
        <div class="medium-3 columns" ng-init="">
                <label for="right-label" class="text-lefth middle">Id
                    <input type="text" disabled ng-model="id" name="id" id="id" placeholder="id">
                </label>
        </div>
    </div>
        <div class="row">
        <!--Ingesta -->
        <div class="medium-6  columns">
         
        <table>
            <tbody>
                <tr>
                    <td width="100">
                        Laxantes
                    </td>
                    <td>
                        <select name="Laxantes" id="Laxantes" ng-model="Laxantes" >
                            <option value="Si">Si</option>
                            <option value="No">No</option>
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
                            <option value="Si">Si</option>
                            <option value="No">No</option>
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
                            <option value="Si">Si</option>
                            <option value="No">No</option>
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
                            <option value="Si">Si</option>
                            <option value="No">No</option>
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
        <!--Antecedentes -->
        <div class="medium-6  columns">
            <table>
                <tbody>
                    <tr>
                        <td>Obesidad</td>
                        <td>
                            <select name="Obesidad" id="Obesidad" ng-model="Obesidad">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select> 
                        </td>

                    </tr>
                    <tr>
                        <td>Diabetes</td>
                        <td>
                            <select name="Diabetes" id="Diabetes" ng-model="Diabetes">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Cáncer</td>
                        <td>
                            <select name="Cancer" id="Cancer" ng-model="Cancer">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>HTA</td>
                        <td>
                            <select name="HTA" id="HTA" ng-model="HTA">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Hipercolesterolemia</td>
                        <td>
                            <select name="Hipercolesterolemia" id="Hipercolesterolemia" ng-model="Hipercolesterolemia">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Hipertrigliceridemia</td>
                        <td>
                            <select name="Hipertrigliceridemia" id="Hipertrigliceridemia" ng-model="Hipertrigliceridemia">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
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
        <br>
        <!-- intervención-->
        <div class="row">    
            <div class="medium-6  columns">
                <table>
                    <tbody>
                        <tr>
                            <td width="200">¿Ha tenido alguna intervención quirúrgica que no le permita el consumo de algún alimento?</td>
                            <td>
                                <select name="Intervencion" id="Intervencion" ng-model="Intervencion">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select> 
                            </td>
                            <td width="150"><label for="right-label" class="text-lefth middle">¿Qué alimento?
                                <textarea id="QueAlimento" name="QueAlimento" placeholder="Motivo" ng-model="QueAlimento"></textarea> 
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
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td width="250">¿Consume tabaco?</td>
                            <td>
                                <select name="ConsumeTabaco" id="ConsumeTabaco" ng-model="ConsumeTabaco">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>  
        <br>
     
          
    </div>
    <!-- Fin Ingesta -->
        <br>
        <div class="row">
        <div class="medium-4 medium-centered columns">
              <button type="button"  class="success expanded button" ng-click="ActualizarPaciente3(); ActualizarPaciente33(); ActualizarPaciente333()" value="submit">Guardar</button>
    	      <button type="button" data-close class="warning expanded button">Cancelar</button>
          </div>
    	  
    	  
          <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
    </div>
    <!-- Fin ingesta -->
    
   
      <!-- Actividad física -->
    <div class="small reveal" id="exampleModal4" data-reveal>
    <div class="row">
        <div class="medium-12 medium-centered columns">
                <p class="lead">Actividades<i class="" style="font-size: 22px"></i> </p>
    </div>
    </div>
    
     <div class="row">
        <div class="medium-3 columns" ng-init="">
                <label for="right-label" class="text-lefth middle">Id
                    <input type="text" disabled ng-model="id" name="id" id="id" placeholder="id">
                </label>
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
                  <input type="text" id="Rango" name="Rango" min="1.0" max="2.5" step="0.1" ng-model="Rango">
                </div>
            <br>
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
                    <td><input type="text"  name="Tiempo" id="Tiempo" ng-model="Tiempo" ></td>

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
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select></td>  
                </tr>
                <tr>
                    <td>Aspecto general que denota en usted mismo: </td>
                    <td><input type="text" id="Aspecto" name="Aspecto" ng-model="Aspecto" placeholder="" ></td>
                </tr>
                <tr>
                    <td>Cuantos vasos de agua consume al día: </td>
                    <td><input type="text" id="VasosAgua" name="VasosAgua"  ng-model="VasosAgua" placeholder=""></td>
                </tr>
                <tr>
                    <td>Padece de mareos durante la actividad física </td>
                    <td><select name="MareosActividad" id="MareosActividad" ng-model="MareosActividad">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select></td>
                </tr>
            </table>              
        </div>
    </div>
    <br>
    <!-- Fin Ingesta -->
        <br>
        <div class="row">
        <div class="medium-4 medium-centered columns">
              <button type="button"  class="success expanded button" ng-click="ActualizarPaciente4()" value="submit">Guardar</button>
    	      <button type="button" data-close class="warning expanded button">Cancelar</button>
          </div>
    	  
    	  
          <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
    </div>
  
    <!-- Fin actividad física -->
    
   <!-- Aspectos Ginecologicos -->
   <div class="small reveal" id="exampleModal5" data-reveal>
        <div class="row">
            <div class="medium-12 medium-centered columns">
                    <p class="lead">Aspectos ginecológicos<i class="" style="font-size: 22px"></i> </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="medium-3 columns" ng-init="">
                    <label for="right-label" class="text-lefth middle">Id
                        <input type="text" disabled ng-model="id" name="id" id="id" placeholder="id">
                    </label>
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
            <div class="medium-4 medium-centered columns">
                  <button type="button"  class="success expanded button" ng-click="ActualizarPaciente5()" value="submit">Guardar</button>
                  <button type="button" data-close class="warning expanded button">Cancelar</button>
            </div>


              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
   </div>
   <!-- Fin aspectos ginecologicos -->
   
  <!-- Aspectos Ginecologicos -->
   <div class="small reveal" id="exampleModal6" data-reveal>
        <div class="row">
            <div class="medium-12 medium-centered columns">
                    <p class="lead">Aspectos ginecológicos<i class="" style="font-size: 22px"></i> </p>
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
            <div class="medium-4 medium-centered columns">
                  <button type="button"  class="success expanded button" ng-click="ActualizarPaciente5()" value="submit">Guardar</button>
                  <button type="button" data-close class="warning expanded button">Cancelar</button>
            </div>


              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
   </div>
   <!-- Fin aspectos ginecologicos -->