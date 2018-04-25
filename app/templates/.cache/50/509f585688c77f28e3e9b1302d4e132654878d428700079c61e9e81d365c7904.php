<?php

/* rrhh/horasextra/revisar_horas_extra.twig */
class __TwigTemplate_de02ffba1fa7a2f330fefcbffd5684c57074348d7fc8914c0b9f6a0792e6be99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/revisar_horas_extra.twig", 1);
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

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Listado de Horas Extras</small>

        <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/registra_horasextra\" title=\"solicitar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Solicitar
        </a>
    </h1>
</section>

<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-primary\">
        <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Peticion Creada</th>
                        <th>Fecha solicitada</th>
                        <th>Hora desde</th>
                        <th>Hora hasta</th>
                        <th>Motivo</th>
                        <th>Estatus</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 35
        $context["No"] = 1;
        // line 36
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 37
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 38
                    echo "                    <tr>
                        <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_creacion", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_solicitud", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_desde", array())), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_hasta", array()), "html", null, true);
                    echo "</td>
                        ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 44
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_solicitud", array()), "html", null, true);
                        echo "</td>
                        ";
                    } else {
                        // line 46
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_respuesta", array()), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 48
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()), "html", null, true);
                    echo "</td>
                        <td class='center' width='150'>
                            ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 51
                        echo "                                <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-sm' href=\"rrhh/modificar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo "\">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 54
$context["d"], "estado", array()) == "Aprobada")) {
                        // line 55
                        echo "                                <a data-toggle='tooltip' data-placement='top' title='Aceptada ' class='btn btn-success btn-sm' disabled=\"disabled\">
                                    <i class='glyphicon glyphicon-ok'></i>
                                </a>
                            ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 58
$context["d"], "estado", array()) == "Rechazada")) {
                        // line 59
                        echo "                                <a data-toggle='tooltip' data-placement='top' title='Rechazada ' class='btn btn-danger btn-sm' disabled=\"disabled\">
                                    <i class='glyphicon glyphicon-remove'></i>
                                </a>
                            ";
                    }
                    // line 63
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) != "Aprobada")) {
                        // line 64
                        echo "                                <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_peticiones(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo ")\" class='btn btn-warning btn-sm'>
                                <i class='glyphicon glyphicon-trash'></i>
                                </a>
                            ";
                    }
                    // line 68
                    echo "                        </td>
                    </tr>
                    ";
                }
                // line 71
                echo "                    ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 72
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    // line 81
    public function block_appScript($context, array $blocks = array())
    {
        // line 82
        echo "    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/rrhh/horasextra.js\"></script>
    <script type=\"text/javascript\">
        \$(\"#dataTables1\").dataTable({
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
        return "rrhh/horasextra/revisar_horas_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 82,  183 => 81,  172 => 73,  165 => 72,  162 => 71,  157 => 68,  149 => 64,  146 => 63,  140 => 59,  138 => 58,  133 => 55,  131 => 54,  124 => 51,  122 => 50,  116 => 48,  110 => 46,  104 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  83 => 38,  80 => 37,  74 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/revisar_horas_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\revisar_horas_extra.twig");
    }
}
