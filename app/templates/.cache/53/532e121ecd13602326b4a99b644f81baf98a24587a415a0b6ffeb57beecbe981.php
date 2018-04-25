<?php

/* rrhh/ausencias/ausencias.twig */
class __TwigTemplate_99bcb72d7d5e5ab718c0b351869de2ee02d269345dffdf5b18489069192096ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/ausencias/ausencias.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\">
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Registrar Ausencia</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-home\"></i>Home</a></li>
            <li><a href=\"rrhh/revisarausencias\">Listado de Ausencias</a></li>
            <li class=\"active\">Registra Ausencia</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <form id=\"form_buscar\" name=\"form_buscar\" action=\"\" method=\"POST\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" id=\"busrut\" name=\"busrut\" placeholder='Ingrese rut o nombre'/>
                                <button type=\"button\" name=\"botrut\" id=\"botrut\" class=\"btn btn-primary\" onclick=\"buscar_rut()\">Traer Datos</button>
                            </div>
                        </form>
                        <form id=\"form_ausencia\" name=\"form_ausencia\"  action=\"\" method=\"POST\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" size=\"50\" id=\"textrut\" name=\"textrut\"  placeholder=\"Rut\" readonly/>
                                <input class=\"form-control\" type=\"text\" id=\"textnombre\" size=\"50\"  name=\"textnombre\" placeholder=\"Nombre\" readonly/>
                            </div>
                            <div class=\"form-group\">Tipo de ausencias
                                <SELECT class=\"form-control\" id=\"selectinasistencias\"  name=\"selectinasistencias\">
                                    <OPTION>Con Licencia</OPTION>
                                    <OPTION>Falta con Permiso</OPTION>
                                    <OPTION>Falta Sin Permiso</OPTION>
                                    <OPTION>Permiso Sindical</OPTION>
                                    <OPTION>Vacaciones</OPTION>
                                </SELECT>
                            </div>
                            <div class=\"form-group\">Observación
                                <textarea class=\"form-control\" id=\"txtdescripcion\" name=\"txtdescripcion\"></textarea>
                            </div>
                            <div class=\"form-group\">Desde - Hasta
                                <input class=\"form-control\" name=\"iddesde\" type=\"date\" id=\"iddesde\" value='";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'/>
                                <input class=\"form-control\" name=\"idhasta\" type=\"date\" id=\"idhasta\" value='";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'/>
                            </div>
                            <button type=\"button\" id=\"guardarregistro\" name=\"guardarregistro\" class=\"btn btn-success\">Grabar</button>
                            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>


                            <input type=\"hidden\" id=\"valorusu\" name=\"valorusu\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" id=\"area\" name=\"area\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_area"] ?? null), "id_area", array()), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\"  id=\"fechaoculta\" name=\"fechaoculta\" value='";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section >
";
    }

    // line 67
    public function block_appScript($context, array $blocks = array())
    {
        // line 68
        echo "    <script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script>
         \$(function(){
           var dbdatos = [
             ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 73
                echo "             '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "',
             '";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut_personal", array()), "html", null, true);
                echo "',
             ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "           ];
           \$('#busrut').autocomplete({
             source: dbdatos
           });
         });
         </script>

         <script src=\"views/app/js/rrhh/ausencias.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/ausencias/ausencias.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  137 => 74,  132 => 73,  127 => 72,  121 => 68,  118 => 67,  106 => 58,  102 => 57,  98 => 56,  89 => 50,  85 => 49,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/ausencias/ausencias.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\ausencias\\ausencias.twig");
    }
}
