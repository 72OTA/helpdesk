<?php

/* confirmacion/reporteria/report_confirmados.twig */
class __TwigTemplate_0d95cd667835d8b10780aab683b5818a59743a5235e52dc436fbb964076cce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/reporteria/report_confirmados.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <section class=\"content-header\">
                <h1>
                    Informes
                    <small>Listado de Gestiones Registradas entre fechas</small>
                    <div class=\"pull-right col-lg-7\">
                      <div class=\"pull-right\">
                        <h4>
                          <label>Fecha Desde:
                          </label>
                          <label>&nbsp;</label>
                          <input type=\"date\" id=\"textdesde\" name=\"textdesde\" value='";
        // line 15
        echo twig_escape_filter($this->env, ($context["fecha_desde"] ?? null), "html", null, true);
        echo "'>
                          <label>&nbsp;</label>
                          <label>Fecha Hasta:
                          </label>
                          <label>&nbsp;</label>
                          <input type=\"date\" id=\"texthasta\" name=\"texthasta\" value='";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                          <label>&nbsp;</label>
                          <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_por_fecha_reporte_produccion()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                        </h4>
                      </div>
                    </div>
                </h1>
            </section>
        </div>
    </div>
      <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-4\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Datos</h3>
                        </div>
                        <div class=\"box-body\">
                            <div id=\"tblfiltro\" name=\"tblfiltro\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Grafica</h3>
                        </div>
                        <div class=\"box-body\">
                            <div id=\"tblgraficos\" name=\"tblgraficos\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 57
    public function block_appScript($context, array $blocks = array())
    {
        // line 58
        echo "  <script src=\"views/app/template/highcharts/highstock.js\"></script>
  <script src=\"views/app/template/highcharts/exporting.js\"></script>
  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  <script>
      \$(document).ready(function() {
          revisar_por_fecha_reporte_produccion();
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/reporteria/report_confirmados.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 58,  95 => 57,  54 => 20,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_confirmados.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_confirmados.twig");
    }
}
