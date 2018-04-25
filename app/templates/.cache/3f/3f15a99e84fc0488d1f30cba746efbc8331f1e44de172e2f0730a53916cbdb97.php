<?php

/* casilleros/excell.twig */
class __TwigTemplate_8222eac471af2078b62e69949e910fff3eb5e65f1c16e37c4c15177c9c1d4528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "casilleros/excell.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
    <style media=\"screen\">
        .at {
            display: none;
        }
    </style>
";
    }

    // line 10
    public function block_appBody($context, array $blocks = array())
    {
        // line 11
        echo "    <section class=\"content-header\">
        <h1>
            Casilleros
            <small>Casilleros Registrados por Ejecutivo</small>

            <a class=\"btn btn-success btn-social pull-right\" id=\"exportar\" href=\"casilleros/exportar\" title=\"Exportar\" data-toggle=\"tooltip\">
                <i class=\"fa fa-plus\"></i>
                Exportar a Excell
            </a>
        </h1>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-3\"></div>
            <form id=\"form_fecha\" name=\"form_fecha\">
                <div class=\"col-md-3\">
                    <h3>Fecha inicio:
                        <input type=\"date\" id=\"fechaI\" name=\"fechaI\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\"></h3>
                </div>
                <div class=\"col-md-3\">
                    <h3>Fecha Fin:
                        <input type=\"date\" id=\"fechaF\" name=\"fechaF\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\"></h3>
                </div>
            </form>
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>N°Orden</th>
                                    <th>Rut Cliente</th>
                                    <th>Comuna</th>
                                    <th>Actividad</th>
                                    <th>Accion</th>
                                    <th>Casillero</th>
                                    <th>Observacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["casilleros"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["t"]) {
            if ((false != ($context["casilleros"] ?? null))) {
                // line 53
                echo "                                    <tr>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</td>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "descripcion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "accion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "casillero", array()), "html", null, true);
                echo "</td>
                                        <td >";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 72
    public function block_appScript($context, array $blocks = array())
    {
        // line 73
        echo "
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/casilleros/casilleros.js\"></script>
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
        return "casilleros/excell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 73,  152 => 72,  141 => 64,  131 => 61,  127 => 60,  123 => 59,  119 => 58,  115 => 57,  111 => 56,  107 => 55,  103 => 54,  100 => 53,  95 => 52,  72 => 32,  65 => 28,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
    <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
    <style media=\"screen\">
        .at {
            display: none;
        }
    </style>
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Casilleros
            <small>Casilleros Registrados por Ejecutivo</small>

            <a class=\"btn btn-success btn-social pull-right\" id=\"exportar\" href=\"casilleros/exportar\" title=\"Exportar\" data-toggle=\"tooltip\">
                <i class=\"fa fa-plus\"></i>
                Exportar a Excell
            </a>
        </h1>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-3\"></div>
            <form id=\"form_fecha\" name=\"form_fecha\">
                <div class=\"col-md-3\">
                    <h3>Fecha inicio:
                        <input type=\"date\" id=\"fechaI\" name=\"fechaI\" class=\"form-control\" value=\"{{ fecha }}\"></h3>
                </div>
                <div class=\"col-md-3\">
                    <h3>Fecha Fin:
                        <input type=\"date\" id=\"fechaF\" name=\"fechaF\" class=\"form-control\" value=\"{{ fecha }}\"></h3>
                </div>
            </form>
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>N°Orden</th>
                                    <th>Rut Cliente</th>
                                    <th>Comuna</th>
                                    <th>Actividad</th>
                                    <th>Accion</th>
                                    <th>Casillero</th>
                                    <th>Observacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for key, t in casilleros if false != casilleros %}
                                    <tr>
                                        <td>{{ key + 1 }}</td>
                                        <td>{{ t.n_orden }}</td>
                                        <td>{{ t.rut }}</td>
                                        <td>{{ t.descripcion }}</td>
                                        <td>{{ t.actividad }}</td>
                                        <td>{{ t.accion }}</td>
                                        <td>{{ t.casillero }}</td>
                                        <td >{{t.observacion}}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block appScript %}

    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/casilleros/casilleros.js\"></script>
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
{% endblock %}", "casilleros/excell.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\casilleros\\excell.twig");
    }
}
