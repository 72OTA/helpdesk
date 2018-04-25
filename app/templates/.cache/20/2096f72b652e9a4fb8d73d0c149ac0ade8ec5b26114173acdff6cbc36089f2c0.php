<?php

/* despacho/seguimiento.twig */
class __TwigTemplate_777ec3862618863d2f0857c6dd081909ad9be295d6ac9edeb8dfe8a81864378c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/seguimiento.twig", 1);
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

    // line 22
    public function block_appBody($context, array $blocks = array())
    {
        // line 23
        echo "<section class=\"content-header\">
    <h1>
        DESPACHO
        <small>Seguimiento</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i>Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    <li ><a href=\"#tab_1-1\" data-toggle=\"tab\" onclick=\"actualizar_tablas_resumenes('";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "','usuario');\">RESUMEN SEGUIMIENTO</a></li>
                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\" onclick=\"carga_ordenes_comuna_seguimiento();\">SEGUIMIENTO</a></li>
                    <li><a id=\"tab3\" href=\"#tab_3-3\" data-toggle=\"tab\" onclick=\"actualizar_tabla_ordenes('";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "','*','usuario');\">ORDENES ASIGANDAS</a></li>
                    <li><a id=\"tab4\" href=\"#tab_4-4\" data-toggle=\"tab\" onclick=\"actualizar_tabla_ordenes('";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "','*','sin_asignar');\">ORDENES SIN ASIGNAR</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"tab_1-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Comunas y Ordenes Asignadas</h3>
                                    </div>
                                    <div id=\"div_contenedor_resumen_ordenes\" class=\"box-body\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Tecnicos Asignados</h3>
                                    </div>
                                    <div id=\"div_contenedor_tecnicos_asignados\" class=\"box-body\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-1\">
                                            <label>Seleccione Comuna:
                                        </div></label>
                                        <div class=\"col-md-3\">
                                            <select class=\"form-control\" id=\"comuna_Seguimiento\" name=\"comuna_Seguimiento\" onchange=\"carga_ordenes_comuna_seguimiento();\">
                                                <option>--</option>
                                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 80
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"row\">
                                        <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                            <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Orden</th>
                                                        <th>Actividad</th>
                                                        <th>N° Orden</th>
                                                        <th>Rut Cliente</th>
                                                        <th>Fecha compromiso</th>
                                                        <th>Bloque</th>
                                                        <th>Tecnico Asignado</th>
                                                        <th>Estado de Orden</th>
                                                        <th>OPERACIONES</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Carga Mediante archivo -->
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <table class=\"table table-bordered table-responsive\" id=\"tblordenes\" name=\"tblordenes\">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Tipo Orden</th>
                                            <th>Actividad</th>
                                            <th>N° Orden</th>
                                            <th>Rut Cliente</th>
                                            <th>Fecha compromiso</th>
                                            <th>Bloque</th>
                                            <th>Comuna</th>
                                            <th>Tecnico Asignado</th>
                                            <th>Estado de Orden</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_4-4\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <!-- <form id=\"formordenes\" name=\"formordenes\" method=\"post\"> -->
                                        <table class=\"table table-bordered table-responsive\" id=\"tblordenes_sin_asignar\" name=\"tblordenes_sin_asignar\">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Tipo Orden</th>
                                                <th>Actividad</th>
                                                <th>N° Orden</th>
                                                <th>Rut Cliente</th>
                                                <th>Fecha compromiso</th>
                                                <th>Bloque</th>
                                                <th>Comuna</th>
                                                <th>Estado de Orden</th>
                                                <th>Asignar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    <!-- </form> -->
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

    // line 174
    public function block_appScript($context, array $blocks = array())
    {
        // line 175
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/despacho/despacho.js\"></script>
  <script src=\"views/app/js/despacho/cierre.js\"></script>
  <script>
    \$(\"#tblseguimiento\").dataTable({
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
      \"bSort\": false,
    \"scrollX\": true
    });
  </script>
  <script>
    \$(\"#tblordenes\").dataTable({
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
      \"bSort\": false,
    \"scrollX\": true
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "despacho/seguimiento.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 175,  237 => 174,  142 => 82,  130 => 80,  125 => 79,  84 => 41,  80 => 40,  75 => 38,  58 => 23,  55 => 22,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/seguimiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\seguimiento.twig");
    }
}
