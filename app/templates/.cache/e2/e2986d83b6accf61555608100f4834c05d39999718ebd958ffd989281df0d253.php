<?php

/* rrhh/turnos/turno_propio.twig */
class __TwigTemplate_0ea03be630f5bb69fc3a84cf39afcf2fcd71e3fe02de961ad759a14f6a54c481 extends Twig_Template
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
            <li class=\"active\">Turnos Propios</li>
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
        <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-body\" id=\"camdat\" name=\"camdat\">
                    <table id=\"dataTables4\" class=\"table table-bordered\" >
                        <thead>
                            <th Width=\"40\">N°Semana</th>
                            <th Width=\"200\">Servicio</th>
                            <th Width=\"150\">Fecha</th>
                            <th>Hora Ingreso</th>
                            <th>Hora Salida</th>
                            <th>Hora Turnos</th>
                            <th>Min Colación</th>
                            <th>Horario Colacion</th>
                            <th>Break_1</th>
                            <th>Break_2</th>
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "n_semana", array()), "html", null, true);
                echo "</td>
                                    <td Width=\"200\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "servicio", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "fecha", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_ingreso", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_salida", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "hora_turnos", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "tiempocolacion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "horario_colacion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "break_1", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "break_2", array()), "html", null, true);
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
        </div>
    </section>
";
    }

    // line 88
    public function block_appScript($context, array $blocks = array())
    {
        // line 89
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
                     \"previous\":\"Anterior\"
                 }
            },
             \"scrollX\": true,
             \"lengthMenu\": [[10, 35, 50, -1], [10, 35, 50, \"Todos\"]],
             \"iDisplayLength\": 35
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
        return array (  210 => 89,  207 => 88,  196 => 80,  189 => 79,  187 => 78,  182 => 76,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  143 => 66,  137 => 65,  135 => 64,  114 => 45,  104 => 41,  98 => 39,  92 => 37,  90 => 36,  84 => 35,  75 => 29,  70 => 26,  65 => 25,  52 => 15,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/turno_propio.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\turnos\\turno_propio.twig");
    }
}
