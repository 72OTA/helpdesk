<?php

/* confirmacion/reporteria/report_produccion.twig */
class __TwigTemplate_c12d602d54e94f7c86140150cd1b078957c7dfbd1c1a03164b3e721e42aa4539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/reporteria/report_produccion.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"content-header\">
        <h1>
            Informes
            <small>Productividad por día</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Total Llamados</h3>
                        <label>Seleccione Fecha:
                        <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" onchange=\"actualiza_datos_meta_y_tabla();\">
                        <div id=\"cargandoooo\" name=\"cargandoooo\"></div>
                        </label>
                    </div>
                    <div class=\"box-body\" id=\"tbldatos\" name=\"tbldatos\">
                    </div>
                    <div class=\"box-footer\">
                        <form id=\"formproductividad\" name=\"formproductividad\">
                            <label>Meta total: <input type=\"number\" class=\"text-center\"id=\"txtmeta\" name=\"txtmeta\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo "\"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Grafica</h3>
                    </div>
                    <div class=\"box-body\" id=\"grafico_llamados_confirmadas\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Grafica</h3>
                    </div>
                    <div class=\"box-body\" id=\"grafico_llamados_confirmadas_total\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
    }

    // line 58
    public function block_appScript($context, array $blocks = array())
    {
        // line 59
        echo "        <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
        <script src=\"views/app/template/highcharts/highstock.js\"></script>
        <script src=\"views/app/template/highcharts/exporting.js\"></script>

        <script>
            \$(document).ready(function() {
                actualiza_datos_meta_y_tabla();
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "confirmacion/reporteria/report_produccion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 59,  96 => 58,  62 => 28,  51 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_produccion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_produccion.twig");
    }
}
