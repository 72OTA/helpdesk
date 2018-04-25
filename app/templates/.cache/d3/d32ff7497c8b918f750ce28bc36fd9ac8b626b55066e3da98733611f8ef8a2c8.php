<?php

/* confirmacion/programacion/listar_ordenes.twig */
class __TwigTemplate_c93f319beba95a99887cd54bc6475350353c205ff6d5d5969134814015a8b38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/listar_ordenes.twig", 1);
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
  <style media=\"screen\">
    .at{
      display: none;
    }
  </style>
";
    }

    // line 10
    public function block_appBody($context, array $blocks = array())
    {
        // line 11
        echo "<section class=\"content-header\">
    <h1>
        Confirmación
        <small>Listado de Ordenes Registradas por Ejecutivo</small>

        <a class=\"btn btn-primary btn-social pull-right\" href=\"confirmacion/programacion\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar Nueva Orden
        </a>
    </h1>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>N°Orden</th>
                                <th>Rut Cliente</th>
                                <th>Fecha Compromiso</th>
                                <th>Bloque</th>
                                <th>Motivo</th>
                                <th>Reag.</th>
                                <th>Comuna</th>
                                <th>Actividad</th>
                                <th>Resultado</th>
                                <th>Observacion</th>
                                <th>Funciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 43
        $context["No"] = 1;
        // line 44
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_ordenes"] ?? null))) {
                // line 45
                echo "                                <tr>
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "reagendamiento", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_resultado", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                    <td >
                                            <a data-toggle='tooltip' data-placement='top' id=\"historicoorden\" name=\"historicoorden\" title='Historico Orden' class='btn btn-primary btn-sm' onclick=\"historico(";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo ");\">
                                                <i class='glyphicon glyphicon-eye-open'></i>
                                            </a>
                                        ";
                // line 60
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "ubicacion", array()) == "CONFIRMACION")) {
                    // line 61
                    echo "                                            <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-success btn-sm' href=\"confirmacion/editar_confirmacion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_orden", array()), "html", null, true);
                    echo "\">
                                                <i class='glyphicon glyphicon-edit'></i>
                                            </a>
                                        ";
                } else {
                    // line 65
                    echo "                                            <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-success btn-sm' disabled>
                                                <i class='glyphicon glyphicon-edit'></i>
                                            </a>
                                        ";
                }
                // line 69
                echo "
                                    </td>
                                </tr>
                                ";
                // line 72
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 73
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 82
    public function block_appScript($context, array $blocks = array())
    {
        // line 83
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

    <script>
        \$(\"#dataordenes\").dataTable({
            \"language\": {
                \"search\": \"Buscar:\",
                \"zeroRecords\": \"No hay datos para mostrar\",
                \"info\": \"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                \"loadingRecords\": \"Cargando...\",
                \"processing\": \"Procesando...\",
                \"infoEmpty\": \"No hay entradas para mostrar\",
                \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                \"paginate\": {
                    \"first\": \"Primera\",
                    \"last\": \"Ultima\",
                    \"next\": \"Siguiente\",
                    \"previous\": \"Anterior\"
                }
            },
            \"autoWidth\": true,
            \"scrollX\": true,
            \"bSort\": false
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/listar_ordenes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 83,  179 => 82,  168 => 74,  161 => 73,  159 => 72,  154 => 69,  148 => 65,  140 => 61,  138 => 60,  132 => 57,  127 => 55,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  91 => 46,  88 => 45,  82 => 44,  80 => 43,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/listar_ordenes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\listar_ordenes.twig");
    }
}
