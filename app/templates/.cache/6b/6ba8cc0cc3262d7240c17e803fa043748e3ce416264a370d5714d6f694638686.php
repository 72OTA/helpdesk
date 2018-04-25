<?php

/* despacho/cierre/listar_ordenes.twig */
class __TwigTemplate_18ee37c74c6b1d256f412025c06ca9c6162397cb0f72b8d252026229869e1468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/cierre/listar_ordenes.twig", 1);
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
        .zoom {
            transition: transform .2s; /* Animation */
            width: 200px;
            height: 200px;
            margin: 0 auto;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .zoom:hover {
            width: 500px;
            height: 250px;
        }
    </style>
";
    }

    // line 21
    public function block_appBody($context, array $blocks = array())
    {
        // line 22
        echo "<section class=\"content-header\">
    <h1>
        Cierre Asegurado
        <small>Listado de Ordenes en estado de Cierre</small>
    </h1>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formordenes\" name=\"formordenes\">
                        <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered table-responsive\">
                            <thead>
                                <tr>
                                    <th>Numero Orden</th>
                                    <th>Ejecutivo</th>
                                    <th>Rut Cliente</th>
                                    <th>Fecha Compromiso</th>
                                    <th>Bloque</th>
                                    <th>Motivo</th>
                                    <th>Comuna</th>
                                    <th>Actividad</th>
                                    <th>Observacion</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordenes_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["ordenes_db"] ?? null))) {
                // line 51
                echo "                                    <tr>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                        <td class='pull-center'>
                                          ";
                // line 62
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()) == 0)) {
                    // line 63
                    echo "                                          <a data-toggle='tooltip' data-placement='top' name=\"btnasigna\" title='Tomar cierre de OT' class='btn btn-success btn-sm' href=\"despacho/tomar_orden/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "\">
                                              <i class='glyphicon glyphicon-send'></i>
                                          </a>
                                          ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 66
$context["t"], "id_ejecutivo_cierre", array()) == ($context["id_user"] ?? null))) {
                    // line 67
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "cierre_seguro", array()) == 0)) {
                        // line 68
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-warning btn-sm' onclick=\"cierre_asegurado(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                            ";
                    } else {
                        // line 72
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-success btn-sm' disabled>
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                          ";
                    }
                    // line 76
                    echo "
                                            ";
                    // line 77
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "certificacion", array()) == 0)) {
                        // line 78
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-warning btn-sm' onclick=\"subir_certificacion(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    } else {
                        // line 82
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-success btn-sm' disabled>
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    }
                    // line 86
                    echo "                                          ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "speed_test", array()) == 0)) {
                        // line 87
                        echo "                                            <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-warning btn-sm' onclick=\"subir_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                                <i class='glyphicon glyphicon-open'></i>
                                            </a>
                                          ";
                    } else {
                        // line 91
                        echo "                                              <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-success btn-sm' onclick=\"mostrar_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ");\">
                                                <i class='glyphicon glyphicon-open'></i>
                                              </a>
                                          ";
                    }
                    // line 95
                    echo "
                                          <a data-placement='top' name=\"btnfinalizar\" id=\"btnfinalizar\" title=\"Finalizar Orden\" class='btn btn-danger btn-sm' onclick=\"seguro(";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo ");\">
                                              <i class='glyphicon glyphicon-certificate'></i>
                                          </a>
                                        ";
                }
                // line 100
                echo "                                        </td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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

    // line 113
    public function block_appScript($context, array $blocks = array())
    {
        // line 114
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/despacho/cierre.js\"></script>

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
        return "despacho/cierre/listar_ordenes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 114,  230 => 113,  217 => 103,  208 => 100,  201 => 96,  198 => 95,  190 => 91,  182 => 87,  179 => 86,  173 => 82,  165 => 78,  163 => 77,  160 => 76,  154 => 72,  146 => 68,  143 => 67,  141 => 66,  134 => 63,  132 => 62,  127 => 60,  123 => 59,  119 => 58,  115 => 57,  111 => 56,  107 => 55,  103 => 54,  99 => 53,  95 => 52,  92 => 51,  87 => 50,  57 => 22,  54 => 21,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/cierre/listar_ordenes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\cierre\\listar_ordenes.twig");
    }
}
