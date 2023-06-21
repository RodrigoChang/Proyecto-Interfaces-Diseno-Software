@csrf
<div class="row">
    <div class="col-md-8 offset-md-2">
        <p class=h4>Tipo de Solicitud</p>
        <hr>
        <select id="tiposolicitud" name="tiposolicitud" class="form-select" required>
            <option selected
                value="{{ old('tiposolicitud') }} @isset($formulario) {{ $formulario->tiposolicitud }} @endisset">
                {{ old('tiposolicitud') }} @isset($formulario)
                    {{ $formulario->tiposolicitud }}
                @endisset
            </option>
            <option disabled>Opciones Disponibles para Cambio</option>
            <option value="Afilacion">Afilacion</option>
            <option value="Actualizacion Antecedentes">Actualizacion Antecedentes</option>
            <option value="Incorporacion o Eliminacion Cargas">Incorporacion o Eliminacion Cargas Familiares
            </option>
            <option value="Modificacion de Empleador">Modificacion de Empleador</option>
            <option value="Cambio de Situacion Laboral">Cambio de Situacion Laboral</option>
        </select>
        <div class="invalid-feedback">
            Por favor seleccione una opción
        </div>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <p class=h4>Datos Asegurado</p>
        <hr>
        <div class="form-group espaciado">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nombre"
                    value="{{ old('user_name') }} @isset($formulario) {{ $formulario->user_name }} @endisset"
                    required />
                <div class="invalid-feedback">
                    Por favor ingrese un nombre
                </div>
                <label for="user_name">Nombre</label>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno"
                            placeholder="Apellido Paterno"
                            value="{{ old('apellidopaterno') }} @isset($formulario) {{ $formulario->apellidopaterno }} @endisset"
                            required>
                        <div class="invalid-feedback">
                            Ingrese Apellido Paterno
                        </div>
                        <label for="apellidopaterno">Apellido Paterno</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno"
                            placeholder="Apellido Materno"
                            value="{{ old('apellidomaterno') }} @isset($formulario) {{ $formulario->apellidomaterno }} @endisset"
                            required>
                        <div class="invalid-feedback">
                            Ingrese Apellido Materno
                        </div>
                        <label for="apellidomaterno">Apellido Materno</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="user_dni" name="user_dni" placeholder="Rut"
                            value="{{ old('user_dni') }} @isset($formulario) {{ $formulario->user_dni }} @endisset"
                            required onblur="validarRut()">
                        <div class="invalid-feedback">
                            Ingrese Rut
                        </div>
                        <label for="rut">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"
                            placeholder="Nacionalidad"
                            value="{{ old('nacionalidad') }} @isset($formulario) {{ $formulario->nacionalidad }} @endisset"
                            required>
                        <div class="invalid-feedback">
                            Por favor rellene todos los campos
                        </div>
                        <label for="nacionalidad">Nacionalidad</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento"
                            placeholder="Fecha de Nacimiento"
                            value="{{ old('fechanacimiento') }} @isset($formulario) {{ $formulario->fechanacimiento }} @endisset"
                            required>
                        <div class="invalid-feedback">
                            Ingrese su fecha de nacimiento
                        </div>
                        <label for="fechanacimiento">Fecha de Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="sexo" name="sexo" class="form-select" required>
                            <option selected
                                value="{{ old('sexo') }} @isset($formulario) {{ $formulario->sexo }} @endisset">
                                {{ old('sexo') }} @isset($formulario)
                                    {{ $formulario->sexo }}
                                @endisset
                            </option>
                            <option disabled value="">Opciones Disponibles para Cambio</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No informar</option>
                        </select>
                        <div class="invalid-feedback">
                            Seleccione un Sexo o Prefiero No informar
                        </div>
                        <label for="sexo">Sexo</label>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!-- Segunda columna -->

    <div class="col-md-8 offset-md-2">
        <p class=h4>Datos de Contacto</p>
        <hr>
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating espaciado">
                    <input type="text" class="form-control" id="user_address" name="user_address"
                        placeholder="Direccion"
                        value="{{ old('user_address') }} @isset($formulario) {{ $formulario->user_address }} @endisset"
                        required onclick="UserAddress()" {{-- onblur="leftUser()" --}}>
                    <div class="invalid-feedback">
                        Por favor ingrese su direccion
                    </div>
                    <label for="user_address">Direccion</label>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating espaciado">
                    <select class="form-select" id="region" name="region" required>
                        <option selected
                            value="{{ old('region') }} @isset($formulario) {{ $formulario->region }} @endisset">
                            {{ old('region') }} @isset($formulario)
                                {{ $formulario->region }}
                            @endisset
                        </option>
                        <option disabled value="">Opciones Disponibles Para Cambio</option>
                        <option value="I">I. Tarapacá</option>
                        <option value="II">II. Antofagasta </option>
                        <option value="III">III. Atacama</option>
                        <option value="IV">IV. Coquimbo</option>
                        <option value="V">V. Valparaíso</option>
                        <option value="VI">VI. O'Higgins</option>
                        <option value="VII">VII. Maule</option>
                        <option value="VIII">VIII. Bío Bío</option>
                        <option value="IX">IX. Araucanía</option>
                        <option value="X">X. Los Lagos</option>
                        <option value="XI">XI. Aysén</option>
                        <option value="XII">XII. Magallanes</option>
                        <option value="RM">RM. Santiago</option>
                        <option value="XIV">XIV. Los Ríos</option>
                        <option value="XV">XV. Arica y Parinacota</option>
                        <option value="XVI">XVI. Ñuble</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor ingrese su ciudad y region
                    </div>
                    <label for="region">Region</label>
                </div>
            </div>

            <div class="col-md">
                <div class="form-floating espaciado">
                    <select id="tipodepropiedad" name="tipodepropiedad" class="form-select" required>
                        <option selected
                            value="{{ old('tipodepropiedad') }} @isset($formulario) {{ $formulario->tipodepropiedad }} @endisset">
                            {{ old('tipodepropiedad') }} @isset($formulario)
                                {{ $formulario->tipodepropiedad }}
                            @endisset
                        </option>
                        <option disabled value="">Opciones Disponibles Para Cambio</option>
                        <option value="Propia Pagada">Propia Pagada</option>
                        <option value="Propia Con Deuda">Propia Con Deuda</option>
                        <option value="Arrendada">Arrendada</option>
                        <option value="Allegado">Allegado</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione una opción
                    </div>
                    <label for="tipodepropiedad">Tipo de Propiedad</label>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating espaciado">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                        value="{{ old('email') }} @isset($formulario) {{ $formulario->email }} @endisset"
                        required>
                    <div class="invalid-feedback">
                        Por favor ingrese su email
                    </div>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating espaciado">
                    <input type="text" class="form-control" id="telefono" name="telefono"
                        placeholder="Telefono"
                        value="{{ old('telefono') }} @isset($formulario) {{ $formulario->telefono }} @endisset"
                        required>
                    <div class="invalid-feedback">
                        Por favor ingrese su telefono
                    </div>
                    <label for="telefono">Telefono</label>
                </div>
            </div>
        </div>
        <!-- Radio Button Concentimiento Fonasa -->
        <div class="offset-md-1" required>
            <label for="concentimiento" class="form-label">Autorizo a Fonasa para que envíe
                información
                a mi
                email y/o telefono celular :</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="concentimiento" class="form-check-input" id="acepto" value="1">
                <label for="si" class="form-check-label">Si</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="concentimiento" class="form-check-input" id="no" value="0">
                <label for="no" class="form-check-label">No</label>
            </div>
        </div>
        <hr>
    </div>
    <!-- Tercera Columna -->
    <div class="col-md-8 offset-md-2">
        <p class=h4>Tipo de Asegurado</p>
        <hr>
        <div class="form-group espaciado">
            <div class="input-group espaciado">
                <select id="tipoasegurado" name="tipoasegurado" class="form-select" onchange="verPension()"
                    required>
                    <option selected
                        value="{{ old('tipoasegurado') }} @isset($formulario) {{ $formulario->tipoasegurado }} @endisset">
                        {{ old('tipoasegurado') }} @isset($formulario)
                            {{ $formulario->tipoasegurado }}
                        @endisset
                    </option>
                    <option disabled value="">Opciones Disponibles para cambios</option>
                    <option value="Cesante">Cesante</option>
                    <option value="Pensionado">Pensionado o en Proceso</option>
                    <option value="Dep_CIndefinido">Contrato Indefinido</option>
                    <option value="Dep_CPlazoFijo">Contrato a plazo fijo</option>
                    <option value="Dep_CFaenaObra">Contrato por obra o faena</option>
                    <option value="Dep_CTurnoJornada">Contrato por turno o jornada</option>
                    <option value="PensionadoSalud">Pensionado Sector Salud
                    </option>
                    <option value="Independiente">Independiente</option>
                </select>
                <div class="invalid-feedback">
                    Por favor seleccione una opción
                </div>
            </div>

            <fieldset hidden id=selectCesantia>
                <div class="input-group espaciado">
                    <select id="tipoCesantia" name="tipoCesantia" class="form-select">
                        <option selected
                            value="{{ old('tipoCesantia') }} @isset($formulario) {{ $formulario->tipoCesantia }} @endisset">
                            {{ old('tipoCesantia') }} @isset($formulario)
                                {{ $formulario->tipoCesantia }}
                            @endisset
                        </option>
                        <option disabled value="No_Cesante">Opciones Disponibles para Cambio</option>
                        <option value="SubsidoCesantia">Cesante Seguro Cesantía</option>
                        <option value="SeguroDesempleo">Cesante Seguro Desempleo</option>
                    </select>
                </div>
            </fieldset>

            <fieldset hidden id=selectPension>
                <div class="input-group espaciado">
                    <select id="pensionado" name="pensionado" class="form-select">
                        <option selected
                            value="{{ old('pensionado') }} @isset($formulario) {{ $formulario->pensionado }} @endisset">
                            {{ old('pensionado') }} @isset($formulario)
                                {{ $formulario->pensionado }}
                            @endisset
                        </option>
                        <option disabled value="">Opciones Disponibles para Cambio</option>
                        </option>
                        <option value="No_Pen">No Pensionado</option>
                        <option value="Pen_Vejez">Vejez</option>
                        <option value="Pen_Viudez">Viudez</option>
                        <option value="Pen_Orfandad">Orfandad</option>
                        <option value="Pen_Invalidez">Invalidez</option>
                        <option value="Pen_EnTramite">Pension en Tramite</option>
                    </select>
                </div>
            </fieldset>
            <hr>
        </div>
        <!-- Cuarta Columna -->
        <fieldset hidden id=pensionSi>
            <p class=h4>Institucion Pagadora Pension</p>
            <div class="input-group espaciado">
                <select id="pagadorapension" name="pagadorapension" class="form-select">
                    <option selected
                        value="{{ old('pagadorapension') }} @isset($formulario) {{ $formulario->pagadorapension }} @endisset">
                        {{ old('pagadorapension') }} @isset($formulario)
                            {{ $formulario->pagadorapension }}
                        @endisset
                    </option>
                    <option disabled value="">Opciones Disponibles para cambio</option>
                    <option value="No_Pensionado">No Pensionado</option>
                    <option value="IPS">IPS</option>
                    <option value="AFP">AFP</option>
                    <option value="CiaSeguros">Cia de Seguros</option>
                    <option value="Mutual">Mutual</option>
                </select>
            </div>
            <hr>
        </fieldset>
        <fieldset hidden id=inputEmpleador>
            <p class=h4>Informacion Empleador o Institución de Pensión</p>
            <hr>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="Emp_rut" name="rut" placeholder="Rut"
                            onblur="validarRutEmp()">
                        <label for="Emp_rut">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="Emp_nombre" name="nombre"
                            placeholder="Nombre">
                        <label for="Emp_nombre">Nombre o Razon Social</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="Emp_tel" name="Telefono"
                            placeholder="Telefono">
                        <label for="Emp_tel">Telefono</label>
                    </div>
                </div>
            </div>

            <!-- Direccion larga por tema estetico para escritura -->
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="Emp_direccion" name="direccion"
                            placeholder="Direccion" onclick="EmpAddress()">
                        <label for="Emp_direccion">Direccion</label>
                    </div>
                </div>
            </div>
            <!-- Continuacion Formulario -->
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="Emp_RentaMensual"
                            name="Renta Imponible Mensual" placeholder="Renta Imp. Mensual">
                        <label for="Emp_RentaMensual">Renta Imp. Mensual</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="Emp_ContratoInicio"
                            name="Inicio Vigencia Contrato" placeholder="Inicio Vigencia Contrato">
                        <label for="Emp_ContratoInicio">Inicio Contrato</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="Emp_ContratoTermino"
                            name="Termino Vigencia Contrato" placeholder="Termino Vigencia Contrato">
                        <label for="Emp_ContratoTermino">Termino Contrato</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>

        <fieldset hidden id=rentaTotal>
            <p class=h4>Total de Ingresos</p>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="Renta_Total" name="Ingresos totales"
                            placeholder="Ingresos totales" required>
                        <div class="invalid-feedback">
                            Por favor ingrese el total de ingresos
                        </div>
                        <label for="Renta_Total">Ingresos totales</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
    </div>

    <div class="col-md-8 offset-md-2">

        <p class=h4>Cargas Familiares</p>
        <hr>

        <div class="form-group espaciado">
            <div class="input-group espaciado">
                <select class="form-select" id="cantCargas" onchange="cargas()" required>
                    <option selected disabled value="">Cantidad de Cargas</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="invalid-feedback">
                    Por favor seleccione una cantidad de cargas
                </div>
            </div>
        </div>

        <!-- Inicio Carga1 -->
        <fieldset hidden id="carga1">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="carRut" name="carRut" placeholder="Rut">
                        <label for="carRut">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carNombre" name="carNombre"
                            placeholder="Nombre">
                        <label for="carNombre">Nombre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carApellido" name="carApellido"
                            placeholder="Apellido">
                        <label for="carApellido">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="carNac" name="carNac"
                            placeholder="Fecha Nacimiento">
                        <label for="carNac">Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="carSexo" name="carSexo" class="form-select">
                            <option selected disabled value="0">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No Decirlo</option>
                        </select>
                        <label for="carSexo">Sexo</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="CarPar">
                            <option selected disabled value="">Seleccione Parentesco</option>
                            <option value="Conyuge">Conyuge</option>
                            <option value="Ascendiente">Ascendiente</option>
                            <option value="Descendiente">Descendiente</option>
                            <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                        </select>
                        <label for="CarPar">Parentesco</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
        <!-- Fin Carga1 -->

        <!-- Inicio Carga2 -->
        <fieldset hidden id="carga2">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="carRut2" name="carRut2" placeholder="Rut">
                        <label for="carRut2">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carNombre2" name="carNombre2"
                            placeholder="Nombre">
                        <label for="carNombre2">Nombre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carApellido2" name="carApellido2"
                            placeholder="Apellido">
                        <label for="carApellido2">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="carNac2" name="carNac2"
                            placeholder="Fecha Nacimiento">
                        <label for="carNac2">Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="carSexo2" name="carSexo2" class="form-select">
                            <option selected disabled value="0">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No Decirlo</option>
                        </select>
                        <label for="carSexo2">Sexo</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="CarPar2">
                            <option selected disabled value="">Seleccione Parentesco</option>
                            <option value="Conyuge">Conyuge</option>
                            <option value="Ascendiente">Ascendiente</option>
                            <option value="Descendiente">Descendiente</option>
                            <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                        </select>
                        <label for="CarPar2">Parentesco</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
        <!-- Fin Carga2 -->

        <!-- Inicio Carga3 -->
        <fieldset hidden id="carga3">

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="carRut3" name="carRut3" placeholder="Rut">
                        <label for="carRut3">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carNombre3" name="carNombre3"
                            placeholder="Nombre">
                        <label for="carNombre3">Nombre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carApellido3" name="carApellido3"
                            placeholder="Apellido">
                        <label for="carApellido3">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="carNac3" name="carNac3"
                            placeholder="Fecha Nacimiento">
                        <label for="carNac3">Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="carSexo3" name="carSexo3" class="form-select">
                            <option selected disabled value="">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No Decirlo</option>
                        </select>
                        <label for="carSexo3">Sexo</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="CarPar3">
                            <option selected disabled value="">Seleccione Parentesco</option>
                            <option value="Conyuge">Conyuge</option>
                            <option value="Ascendiente">Ascendiente</option>
                            <option value="Descendiente">Descendiente</option>
                            <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                        </select>
                        <label for="CarPar3">Parentesco</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
        <!-- Fin Carga3 -->

        <!-- Inicio Carga4 -->
        <fieldset hidden id="carga4">

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="carRut4" name="carRut4" placeholder="Rut">
                        <label for="carRut4">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carNombre4" name="carNombre4"
                            placeholder="Nombre">
                        <label for="carNombre4">Nombre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carApellido4" name="carApellido4"
                            placeholder="Apellido">
                        <label for="carApellido4">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="carNac4" name="carNac4"
                            placeholder="Fecha Nacimiento">
                        <label for="carNac4">Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="carSexo4" name="carSexo4" class="form-select">
                            <option selected disabled value="">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No Decirlo</option>
                        </select>
                        <label for="carSexo4">Sexo</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="CarPar4">
                            <option selected disabled value="">Seleccione Parentesco</option>
                            <option value="Conyuge">Conyuge</option>
                            <option value="Ascendiente">Ascendiente</option>
                            <option value="Descendiente">Descendiente</option>
                            <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                        </select>
                        <label for="CarPar4">Parentesco</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
        <!-- Fin Carga4 -->

        <!-- Inicio Carga5 -->
        <fieldset hidden id="carga5">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="number" class="form-control" id="carRut5" name="carRut5" placeholder="Rut">
                        <label for="carRut5">Rut</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carNombre5" name="carNombre5"
                            placeholder="Nombre">
                        <label for="carNombre5">Nombre</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="carApellido5" name="carApellido5"
                            placeholder="Apellido">
                        <label for="carApellido5">Apellido</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="date" class="form-control" id="carNac5" name="carNac5"
                            placeholder="Fecha Nacimiento">
                        <label for="carNac5">Nacimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select id="carSexo5" name="carSexo5" class="form-select">
                            <option selected disabled value="">Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Prefiero No Decirlo</option>
                        </select>
                        <label for="carSexo5">Sexo</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="CarPar5">
                            <option selected disabled value="">Seleccione Parentesco</option>
                            <option value="Conyuge">Conyuge</option>
                            <option value="Ascendiente">Ascendiente</option>
                            <option value="Descendiente">Descendiente</option>
                            <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                        </select>
                        <label for="CarPar5">Parentesco</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- Fin Carga5 -->

        <hr>
        <P class=h4>Establecimientos Publicos de Salud</h4>
        <div class="row mb-3">
            <div class="col-md-8">
                <label for="establecimientoInscrito" class="form-label">¿Esta inscrito en algun
                    establecimiento público de salud?</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="inscrito" class="form-check-input" id="EstabIns" value="1"
                        onclick="showEstabSi()">
                    <label for="EstabIns" class="form-check-label">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="inscrito" class="form-check-input" id="EstabIns" value="0"
                        onclick="showEstabNo()">
                    <label for="EstabIns" class="form-check-label">No</label>
                </div>
            </div>
        </div>
        <hr>
        <fieldset hidden id=estabSalud>
            <p class=h4>¿En cual se encuentra inscrito?</p>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="establecimiento" name="establecimiento"
                            placeholder="Nombre Establecimiento">
                        <label for="establecimiento">Nombre Establecimiento</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <input type="text" class="form-control" id="establecimientoComuna"
                            name="establecimientoComuna" placeholder="Comuna">
                        <label for="establecimientoComuna">Comuna</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating espaciado">
                        <select class="form-select" id="establecimeintoRegion">
                            <option value="">Seleccionar</option>
                            <option value="I">I. Tarapacá</option>
                            <option value="II">II. Antofagasta </option>
                            <option value="III">III. Atacama</option>
                            <option value="IV">IV. Coquimbo</option>
                            <option value="V">V. Valparaíso</option>
                            <option value="VI">VI. O'Higgins</option>
                            <option value="VII">VII. Maule</option>
                            <option value="VIII">VIII. Bío Bío</option>
                            <option value="IX">IX. Araucanía</option>
                            <option value="X">X. Los Lagos</option>
                            <option value="XI">XI. Aysén</option>
                            <option value="XII">XII. Magallanes</option>
                            <option value="RM">RM. Santiago</option>
                            <option value="XIV">XIV. Los Ríos</option>
                            <option value="XV">XV. Arica y Parinacota</option>
                            <option value="XVI">XVI. Ñuble</option>
                        </select>
                        <label for="establecimeintoRegion">Región</label>
                    </div>
                </div>
            </div>
            <hr>
        </fieldset>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                Enviar
            </button>
        </div>
    </div>
</div>
