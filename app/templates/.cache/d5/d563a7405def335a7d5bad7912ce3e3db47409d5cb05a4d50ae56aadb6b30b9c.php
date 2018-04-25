<?php

/* rrhh/turnos/revisar_turnos.twig */
class __TwigTemplate_768a69193ac5c5b51c16ed15a7787c9cfc15bf006e8d7b30ab2f5cab265c0d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/revisar_turnos.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appStylos($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Turnos Plataforma</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Turnos Plataforma</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    <li class=\"active\"><a href=\"#tab_1-1\" data-toggle=\"tab\">TURNO DÍA</a></li>
                    <li><a href=\"#tab_2-2\" data-toggle=\"tab\" onclick=\"getTurnoSemanaCompleta();\">TURNO SEMANAL</a></li>
                    <li><a href=\"#tab_3-3\" data-toggle=\"tab\">EJECUTIVOS ACTIVOS</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <form name=\"formbuscaturno\" id=\"formbuscaturno\"  method=\"post\">
                                    <div class=\"input-daterange\">
                                        <label>Fecha: </label>
                                        <label>&nbsp;</label>
                                        <input type=\"date\" name=\"fechaturno\" id=\"fechaturno\" value='";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                                        <label>&nbsp;</label>
                                        <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_turno_por_fecha()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                                        <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                                        <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_turno_plataforma\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                                        </a>
                                    </div>
                                    <hr>
                                </form>

                                <table id=\"dataTables3\" class=\"table table-bordered\" >
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th Width=\"200\">Nombre</th>
                                            <th Width=\"200\">Servicio</th>

                                            <th>H.Ingreso</th>
                                            <th>H.Salida</th>

                                            <th>H.Colacion</th>
                                            <th>H.Colacion</th>
                                            <th>Break 1</th>
                                            <th>Break 2</th>
                                            <th>Asistencia</th>

                                        </tr>
                                    </thead>
                                    <tbody id=\"turnos\">
                                      ";
        // line 64
        $context["No"] = 1;
        // line 65
        echo "                                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargar_turnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["cargar_turnos"] ?? null))) {
                // line 66
                echo "                                        <tr>
                                            <td>";
                // line 67
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array())), "html", null, true);
                echo "</td>
                                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "servicio", array()), "html", null, true);
                echo "</td>

                                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_ingreso", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_salida", array()), "html", null, true);
                echo "</td>


                                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "tiempocolacion", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "horario_colacion", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_1", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_2", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 80
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "asistencia", array()) == "LIBRE")) {
                    // line 81
                    echo "                                                    <div class='text-green'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "asistencia", array()), "html", null, true);
                    echo "</div>
                                                ";
                } else {
                    // line 83
                    echo "                                                    <div class='text-orange'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "asistencia", array()), "html", null, true);
                    echo "</div>
                                                ";
                }
                // line 85
                echo "                                            </td>
                                        </tr>

                                        ";
                // line 88
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 89
                echo "                                      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <div class=\"col-md-12\">
                                    <form name=\"formbuscaturno_s\" id=\"formbuscaturno_s\"  method=\"post\">
                                        <div class=\"input-daterange\">
                                            <label>Fecha: </label>
                                            <label>&nbsp;</label>
                                            <input type=\"date\" name=\"fecha_turno_s\" id=\"fecha_turno_s\" value='";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                                            <label>&nbsp;</label>
                                            <button type=\"button\" name=\"btnbuscar_s\" id=\"btnbuscar_s\" onclick=\"getTurnoSemanaCompleta();\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                                            <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                                            <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_turno_plataforma\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                                            </a>
                                        </div>
                                        <div id=\"semana\">

                                        </div>
                                        <hr>
                                    </form>

                                    <table id=\"dataTables1\" class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th Width=\"70%\">Nombre</th>
                                                <th Width=\"100%\">Tarea</th>
                                                <th>Lunes</th>
                                                <th>Martes</th>
                                                <th>Miércoles</th>
                                                <th>Jueves</th>
                                                <th>Viernes</th>
                                                <th>Sábado</th>
                                                <th>Domingo</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <div class=\"col-md-12\">
                                    <table id=\"dataTables2\" class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th Width=\"200\">Supervisor</th>
                                                <th Width=\"200\">Ejecutivo</th>
                                                <th Width=\"200\">Cargo</th>
                                                <th>F.Nacimiento</th>
                                                <th>Email</th>
                                                <th>Telefeno</th>
                                                <th>TANGO</th>
                                                <th>RED</th>
                                                <th>NNOC</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getEjecutivosFull"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["getEjecutivosFull"] ?? null))) {
                // line 157
                echo "                                              <tr>
                                                  <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "supervisor", array())), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array())), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "cargo", array()), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_nacimiento", array()), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "email", array()), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fono", array()), "html", null, true);
                echo "</td>

                                                  <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "user_tango", array()), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "user_red", array()), "html", null, true);
                echo "</td>
                                                  <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "user_nnoc", array()), "html", null, true);
                echo "</td>
                                              </tr>

                                              ";
                // line 170
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 171
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    ";
    }

    // line 184
    public function block_appScript($context, array $blocks = array())
    {
        // line 185
        echo "        <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
        <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

        <script src=\"views/app/js/rrhh/turnos.js\"></script>
        <script>
            \$(\"#dataTables3\").dataTable({
                 \"language\": {
                     \"search\": \"Buscar:\",
                     \"zeroRecords\": \"No hay datos para mostrar\",
                     \"info\":\"Mostrando _END_ usuarios, de un total de _TOTAL_ \",
                     \"loadingRecords\": \"Cargando...\",
                     \"processing\":\"Procesando...\",
                     \"infoEmpty\":\"No hay entradas para mostrar\",
                     \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                     \"paginate\":{
                     \"first\":\"Primera\",
                     \"last\":\"Ultima\",
                     \"next\":\"Siguiente\",
                     \"previous\":\"Anterior\",
                     }
                  },
                 \"autoWidth\": true,
                 \"lengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"Todos\"]],
                 \"iDisplayLength\": -1,
                 \"scrollX\": true
             });
             \$(\"#dataTables2\").dataTable({
                  \"language\": {
                      \"search\": \"Buscar:\",
                      \"zeroRecords\": \"No hay datos para mostrar\",
                      \"info\":\"Mostrando _END_ usuarios, de un total de _TOTAL_ \",
                      \"loadingRecords\": \"Cargando...\",
                      \"processing\":\"Procesando...\",
                      \"infoEmpty\":\"No hay entradas para mostrar\",
                      \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                      \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                      }
                   },
                  \"autoWidth\": true,
                  \"lengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"Todos\"]],
                  \"iDisplayLength\": -1
              });
             \$(\"#dataTables1\").dataTable({
                  \"language\": {
                      \"search\": \"Buscar:\",
                      \"zeroRecords\": \"No hay datos para mostrar\",
                      \"info\":\"Mostrando _END_ usuarios, de un total de _TOTAL_ \",
                      \"loadingRecords\": \"Cargando...\",
                      \"processing\":\"Procesando...\",
                      \"infoEmpty\":\"No hay entradas para mostrar\",
                      \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                      \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                      }
                  },
                  \"autoWidth\": false,
                  \"lengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"Todos\"]],
                  \"iDisplayLength\": 10
              });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "rrhh/turnos/revisar_turnos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 185,  324 => 184,  309 => 172,  302 => 171,  300 => 170,  294 => 167,  290 => 166,  286 => 165,  281 => 163,  277 => 162,  273 => 161,  269 => 160,  265 => 159,  261 => 158,  258 => 157,  253 => 156,  197 => 103,  182 => 90,  175 => 89,  173 => 88,  168 => 85,  162 => 83,  156 => 81,  154 => 80,  149 => 78,  145 => 77,  141 => 76,  137 => 75,  131 => 72,  127 => 71,  122 => 69,  118 => 68,  114 => 67,  111 => 66,  105 => 65,  103 => 64,  70 => 34,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/revisar_turnos.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\turnos\\revisar_turnos.twig");
    }
}
