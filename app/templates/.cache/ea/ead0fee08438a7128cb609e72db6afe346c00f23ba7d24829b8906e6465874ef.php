<?php

/* rrhh/turnos/turno_equipo_asignado.twig */
class __TwigTemplate_29805c1851a563deae0dc046c2cd4e9f2a7062434354c7e74fee15cfeed237b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/turno_equipo_asignado.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Equipo Asignado</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
            <li class=\"active\">Equipo Asignado</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs pull-rigth\">
                        <li><a href=\"#tab_1-1\" data-toggle=\"tab\">Turno Hoy</a></li>
                        <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">Datos Personales</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane\" id=\"tab_1-1\">
                            <div class=\"callout callout-info\">
                                <h4>Turnos de Ejecutivos Asignados, Hoy: ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</h4>
                            </div>
                            <table class=\"table table-bordered table-striped\">
                                <thead>
                                    <tr>
                                        <th>N°Semana</th>
                                        <th Width=\"200\">Ejecutivo</th>
                                        <th Width=\"200\">Servicio</th>
                                        <th>Hora Ingreso</th>
                                        <th>Hora Salida</th>
                                        <th>Min.Colación</th>
                                        <th>Hora Colacion</th>
                                        <th>Break_1</th>
                                        <th>Break_2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getTurnoEquipoAsignado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            if ((false != ($context["getTurnoEquipoAsignado"] ?? null))) {
                // line 47
                echo "                                        <tr>
                                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "n_semana", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "name", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 51
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "servicio", array()) == "")) {
                    // line 52
                    echo "                                                    SIN TURNO ASIGNADO
                                                ";
                } else {
                    // line 54
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "servicio", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 56
                echo "                                            </td>
                                            ";
                // line 57
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_ingreso", array()) == "00:00:00") || (twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_ingreso", array()) == ""))) {
                    // line 58
                    echo "                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                            ";
                } else {
                    // line 65
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_ingreso", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_salida", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "tiempocolacion", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "horario_colacion", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "break_1", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "break_2", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 72
                echo "                                        </tr>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </tbody>
                            </table>
                        </div><!-- /.tab-pane -->
                        <div class=\"tab-pane active\" id=\"tab_2-2\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"box\">
                                        <div class=\"callout callout-info\">
                                            <h4>Datos Personales Ejecutivos</h4>
                                        </div>
                                        <table class=\"table table-bordered table-striped\">
                                    <thead>
                                        <tr>
                                            <th Width=\"200\">Ejecutivo</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Telefono</th>
                                            <th>Correo Valido</th>
                                            <th>TANGO</th>
                                            <th>RED VTR</th>
                                            <th>NNOC</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getDatosEquipoAsignado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            if ((false != ($context["getDatosEquipoAsignado"] ?? null))) {
                // line 99
                echo "                                            <tr>
                                                <td><input type=\"text\" size=\"35\" name=\"name-";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"name-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "name", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"date\" name=\"fecha_nacimiento-";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"fecha_nacimiento-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "fecha_nacimiento", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"text\" name=\"fono-";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"fono-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "fono", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"text\" size=\"30\" name=\"email-";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"email-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "email", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"tango-";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"tango-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "user_tango", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"red-";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"red-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "user_red", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"nnoc-";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" id=\"nnoc-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "user_nnoc", array()), "html", null, true);
                echo "\" onchange=\"updateDatosEquipoAsignado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id_user", array()), "html", null, true);
                echo "');\"></td>
                                            </tr>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                    </tbody>
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

    // line 121
    public function block_appScript($context, array $blocks = array())
    {
        // line 122
        echo "    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
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
             \"iDisplayLength\": 25,
             \"scrollX\": true
         });
    </script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/turnos/turno_equipo_asignado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 122,  287 => 121,  272 => 109,  256 => 106,  246 => 105,  236 => 104,  226 => 103,  216 => 102,  206 => 101,  196 => 100,  193 => 99,  188 => 98,  162 => 74,  154 => 72,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  133 => 66,  128 => 65,  119 => 58,  117 => 57,  114 => 56,  108 => 54,  104 => 52,  102 => 51,  97 => 49,  93 => 48,  90 => 47,  85 => 46,  65 => 29,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
{% endblock %}

{% block appBody %}
    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Equipo Asignado</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
            <li class=\"active\">Equipo Asignado</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs pull-rigth\">
                        <li><a href=\"#tab_1-1\" data-toggle=\"tab\">Turno Hoy</a></li>
                        <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">Datos Personales</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane\" id=\"tab_1-1\">
                            <div class=\"callout callout-info\">
                                <h4>Turnos de Ejecutivos Asignados, Hoy: {{ \"now\"| date('d-m-Y')}}</h4>
                            </div>
                            <table class=\"table table-bordered table-striped\">
                                <thead>
                                    <tr>
                                        <th>N°Semana</th>
                                        <th Width=\"200\">Ejecutivo</th>
                                        <th Width=\"200\">Servicio</th>
                                        <th>Hora Ingreso</th>
                                        <th>Hora Salida</th>
                                        <th>Min.Colación</th>
                                        <th>Hora Colacion</th>
                                        <th>Break_1</th>
                                        <th>Break_2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for ct in getTurnoEquipoAsignado if false != getTurnoEquipoAsignado %}
                                        <tr>
                                            <td>{{ ct.n_semana }}</td>
                                            <td>{{ ct.name }}</td>
                                            <td>
                                                {% if ct.servicio == \"\" %}
                                                    SIN TURNO ASIGNADO
                                                {% else %}
                                                    {{ ct.servicio }}
                                                {% endif %}
                                            </td>
                                            {% if ct.hora_ingreso == \"00:00:00\" or ct.hora_ingreso == \"\" %}
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                                <td>LIBRE</td>
                                            {% else %}
                                                <td>{{ ct.hora_ingreso  }}</td>
                                                <td>{{ ct.hora_salida }}</td>
                                                <td>{{ ct.tiempocolacion }}</td>
                                                <td>{{ ct.horario_colacion }}</td>
                                                <td>{{ ct.break_1 }}</td>
                                                <td>{{ ct.break_2 }}</td>
                                            {% endif %}
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div><!-- /.tab-pane -->
                        <div class=\"tab-pane active\" id=\"tab_2-2\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"box\">
                                        <div class=\"callout callout-info\">
                                            <h4>Datos Personales Ejecutivos</h4>
                                        </div>
                                        <table class=\"table table-bordered table-striped\">
                                    <thead>
                                        <tr>
                                            <th Width=\"200\">Ejecutivo</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Telefono</th>
                                            <th>Correo Valido</th>
                                            <th>TANGO</th>
                                            <th>RED VTR</th>
                                            <th>NNOC</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for ct in getDatosEquipoAsignado if false != getDatosEquipoAsignado %}
                                            <tr>
                                                <td><input type=\"text\" size=\"35\" name=\"name-{{ct.id_user}}\" id=\"name-{{ct.id_user}}\" value=\"{{ ct.name }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"date\" name=\"fecha_nacimiento-{{ct.id_user}}\" id=\"fecha_nacimiento-{{ct.id_user}}\" value=\"{{ ct.fecha_nacimiento }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"text\" name=\"fono-{{ct.id_user}}\" id=\"fono-{{ct.id_user}}\" value=\"{{ ct.fono }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"text\" size=\"30\" name=\"email-{{ct.id_user}}\" id=\"email-{{ct.id_user}}\" value=\"{{ ct.email }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"tango-{{ct.id_user}}\" id=\"tango-{{ct.id_user}}\" value=\"{{ ct.user_tango }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"red-{{ct.id_user}}\" id=\"red-{{ct.id_user}}\" value=\"{{ ct.user_red }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                                <td><input type=\"text\" size=\"5\" name=\"nnoc-{{ct.id_user}}\" id=\"nnoc-{{ct.id_user}}\" value=\"{{ ct.user_nnoc }}\" onchange=\"updateDatosEquipoAsignado('{{ ct.id_user }}');\"></td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
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
{% endblock %}
{% block appScript %}
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
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
             \"iDisplayLength\": 25,
             \"scrollX\": true
         });
    </script>
{% endblock %}
", "rrhh/turnos/turno_equipo_asignado.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\rrhh\\turnos\\turno_equipo_asignado.twig");
    }
}
