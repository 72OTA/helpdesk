<?php

/* rrhh/turnos/turno_propio.twig */
class __TwigTemplate_8682b4bf7d89590ca5086e6417573aab919287f50f4beba98b7da7b7bfcae7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/turno_propio.twig", 1);
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
  <style>
      .rojo{color: red;}
      i {-webkit-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;}
  </style>
";
    }

    // line 11
    public function block_appBody($context, array $blocks = array())
    {
        // line 12
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Turnos Asignado - Supervisor designado: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["super"] ?? null), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
            <li class=\"active\">Turnos Plataforma</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fechas_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["fechas_db"] ?? null))) {
                // line 26
                echo "                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "mesano_print", array()), "html", null, true);
                echo " </h3>
                            <p></p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <a class=\"small-box-footer\"  title=\"Revisar proceso del mes\" data-toggle=\"tooltip\" onclick=\"verturnomes('";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rut_personal", array(), "array"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "mesano", array()), "html", null, true);
                echo "')\">
                        ";
                // line 36
                if ((twig_date_format_filter($this->env, "now", "m") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "mes", array()))) {
                    // line 37
                    echo "                            <i class=\"fa fa-eye rojo\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "mesano", array()), "html", null, true);
                    echo "\" ></i>
                        ";
                } else {
                    // line 39
                    echo "                            <i class=\"fa fa-eye\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "mesano", array()), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 41
                echo "                        </a>
                    </div>
                </div><!-- ./col -->
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>

        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-body\" id=\"camdat\" name=\"camdat\">
                    <table id=\"dataTables4\" class=\"table table-bordered\" >
                        <thead>
                            <th>N°</th>
                            <th>Rut</th>
                            <th>Servicio</th>
                            <th>Fecha</th>
                            <th>Hora Ingreso</th>
                            <th>Hora Salida</th>
                            <th>N° Semana</th>
                            <th>Hora Turnos</th>
                            <th>Hora colacion</th>
                            <th>Horario Colacion</th>
                        </thead>
                        <tbody id=\"dtturnos\">
                            ";
        // line 64
        $context["No"] = 1;
        // line 65
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carga_turno"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            if ((false != ($context["carga_turno"] ?? null))) {
                // line 66
                echo "                                <tr>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "rut", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "servicio", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "fecha", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_ingreso", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_salida", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "n_semana", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_turnos", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_colacion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "horario_colacion", array()), "html", null, true);
                echo "</td>
                                </tr>
                                ";
                // line 78
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 79
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 87
    public function block_appScript($context, array $blocks = array())
    {
        // line 88
        echo "    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/rrhh/turnos.js\"></script>
    <script>
        \$(\"#dataTables4\").dataTable({
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
             \"scrollX\": true
         });
    </script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/turnos/turno_propio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 88,  206 => 87,  196 => 80,  189 => 79,  187 => 78,  182 => 76,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  143 => 66,  137 => 65,  135 => 64,  114 => 45,  104 => 41,  98 => 39,  92 => 37,  90 => 36,  84 => 35,  75 => 29,  70 => 26,  65 => 25,  52 => 15,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
  <style>
      .rojo{color: red;}
      i {-webkit-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;}
  </style>
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Turnos Asignado - Supervisor designado: {{ super[0][0] }}</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
            <li class=\"active\">Turnos Plataforma</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            {% for d in fechas_db if false != fechas_db %}
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>{{ d.mesano_print }} </h3>
                            <p></p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <a class=\"small-box-footer\"  title=\"Revisar proceso del mes\" data-toggle=\"tooltip\" onclick=\"verturnomes('{{ owner_user['rut_personal'] }}','{{d.mesano}}')\">
                        {% if \"now\"|date(\"m\") == d.mes %}
                            <i class=\"fa fa-eye rojo\" id=\"{{ d.mesano }}\" ></i>
                        {% else %}
                            <i class=\"fa fa-eye\" id=\"{{ d.mesano }}\"></i>
                        {% endif %}
                        </a>
                    </div>
                </div><!-- ./col -->
            {% endfor %}
        </div>

        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-body\" id=\"camdat\" name=\"camdat\">
                    <table id=\"dataTables4\" class=\"table table-bordered\" >
                        <thead>
                            <th>N°</th>
                            <th>Rut</th>
                            <th>Servicio</th>
                            <th>Fecha</th>
                            <th>Hora Ingreso</th>
                            <th>Hora Salida</th>
                            <th>N° Semana</th>
                            <th>Hora Turnos</th>
                            <th>Hora colacion</th>
                            <th>Horario Colacion</th>
                        </thead>
                        <tbody id=\"dtturnos\">
                            {% set No = 1 %}
                            {% for ct in carga_turno if false != carga_turno %}
                                <tr>
                                    <td>{{No}}</td>
                                    <td>{{ ct.rut|raw|title }}</td>
                                    <td>{{ ct.servicio }}</td>
                                    <td>{{ ct.fecha }}</td>
                                    <td>{{ ct.hora_ingreso  }}</td>
                                    <td>{{ ct.hora_salida }}</td>
                                    <td>{{ ct.n_semana }}</td>
                                    <td>{{ ct.hora_turnos }}</td>
                                    <td>{{ ct.hora_colacion }}</td>
                                    <td>{{ ct.horario_colacion }}</td>
                                </tr>
                                {% set No =  No + 1 %}
                            {% endfor %}
                        </tbody>
                    </table>
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
        \$(\"#dataTables4\").dataTable({
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
             \"scrollX\": true
         });
    </script>
{% endblock %}
", "rrhh/turnos/turno_propio.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\turnos\\turno_propio.twig");
    }
}
