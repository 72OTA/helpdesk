<?php

/* rrhh/ausencias/modificarausencia.twig */
class __TwigTemplate_bcd7d3ac8caa38dacb51f92b3f9503f92551710508cbef8857e059820136c1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/ausencias/modificarausencia.twig", 1);
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
            RRHH
            <small>Modifica Ausencia</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i>Home</a></li>
            <li><a href=\"rrhh/revisarausencias\">Listado de Ausencias</a></li>
            <li class=\"active\">Modifica Ausencia</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <form id=\"form_modificar\" name=\"form_modificar\" action=\"\" method=\"POST\">
                            <input type=\"hidden\" id=\"modificaid\" name=\"modificaid\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "id_tblausencias", array()), "html", null, true);
        echo "\"/>
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" id=\"modificarut\" name=\"modificarut\" value='";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "rut", array()), "html", null, true);
        echo "' readonly/>
                                <input class=\"form-control\" type=\"text\" id=\"modificanombre\" name=\"modificanombre\" value='";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "name", array()), "html", null, true);
        echo "' readonly/>
                            </div>
                            <div class=\"form-group\">Tipo de Ausencia
                                <SELECT class=\"form-control\" id=\"selectmodificar\" name=\"selectmodificar\">
                                    <option>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "tipo_ausencia", array()), "html", null, true);
        echo "</option>
                                    <OPTION>Con Licencia</OPTION>
                                    <OPTION>Falta con Permiso</OPTION>
                                    <OPTION>Falta Sin Permiso</OPTION>
                                    <OPTION>Permiso Sindical</OPTION>
                                    <OPTION>Vacaciones</OPTION>
                                </SELECT>
                            </div>
                            <div class=\"form-group\">Observación
                                <textarea class=\"form-control\" id=\"modificardescripcion\" name=\"modificardescripcion\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "observacion", array()), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"form-group\">Desde - Hasta
                                <input class=\"form-control\" name=\"modificardesde\" type=\"date\" id=\"modificardesde\" value='";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "desde", array()), "html", null, true);
        echo "'/>
                                <input class=\"form-control\" name=\"modificarhasta\" type=\"date\" id=\"modificarhasta\" value='";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modifica"] ?? null), "hasta", array()), "html", null, true);
        echo "'/>
                            </div>
                            <button type=\"button\" id=\"modificaregistro\" name=\"modificaregistro\" class=\"btn btn-success\">Grabar</button>

                            <input type=\"hidden\" id=\"fechaoculta2\" name=\"fechaoculta2\" value='";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section >
";
    }

    // line 54
    public function block_appScript($context, array $blocks = array())
    {
        // line 55
        echo "    <script src=\"views/app/js/rrhh/ausencias.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/ausencias/modificarausencia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 55,  110 => 54,  98 => 46,  91 => 42,  87 => 41,  81 => 38,  69 => 29,  62 => 25,  58 => 24,  53 => 22,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/ausencias/modificarausencia.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\ausencias\\modificarausencia.twig");
    }
}
