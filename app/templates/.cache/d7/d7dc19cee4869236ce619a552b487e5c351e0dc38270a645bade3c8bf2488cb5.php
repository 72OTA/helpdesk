<?php

/* confirmacion/reporteria/listar_allgestion.twig */
class __TwigTemplate_59d656e9d069fd8b534c6020e0fa4f3ebf8b67ce423fde0a03327a8d7eb5111c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/reporteria/listar_allgestion.twig", 1);
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <section class=\"content-header\">
            <h1>
                Confirmación
                <small>Listado de Gestiones Registradas por día</small>

                <div class=\"pull-right\">
                    <small>
                        <label>Fecha:</label>
                        <label>&nbsp;</label>
                        <input type=\"date\" id=\"revdesde\" name=\"revdesde\" value='";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                        <label>&nbsp;</label>
                        <input type=\"date\" id=\"revhasta\" name=\"revhasta\" value='";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                        <label>&nbsp;</label>

                        <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_por_fecha_gestiones()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                        <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                        <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_ordenes_gestiones\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                        </a>
                    </small>
                </div>
            </h1>
        </section>
    </div>
</div>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formordenes\" name=\"formordenes\">
                        <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered table-responsive\">
                            <thead>
                                <tr>
                                    <th>N°Orden</th>
                                    <th>Rut Cliente</th>
                                    <th>Compromiso</th>
                                    <th>Bloque</th>
                                    <th>Motivo</th>
                                    <th>Comuna</th>
                                    <th>Nodo</th>
                                    <th>Actividad</th>
                                    <th>Resultado</th>
                                    <th>Observacion</th>
                                    <th>Operador</th>
                                    <th>Accion</th>

                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 63
        $context["No"] = 1;
        // line 64
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_gestiones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_gestiones"] ?? null))) {
                // line 65
                echo "                                    <tr>
                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo_llamado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nodo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_resultado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "accion", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                    ";
                // line 79
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 80
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 90
    public function block_appScript($context, array $blocks = array())
    {
        // line 91
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
            \"scrollX\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/reporteria/listar_allgestion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 91,  187 => 90,  175 => 81,  168 => 80,  166 => 79,  161 => 77,  157 => 76,  153 => 75,  149 => 74,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  125 => 68,  121 => 67,  117 => 66,  114 => 65,  108 => 64,  106 => 63,  64 => 24,  59 => 22,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/listar_allgestion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\listar_allgestion.twig");
    }
}
