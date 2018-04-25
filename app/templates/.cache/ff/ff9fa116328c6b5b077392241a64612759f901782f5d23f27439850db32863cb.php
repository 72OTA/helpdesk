<?php

/* rrhh/asignar_ejecutivo/asignar_ejecutivo.twig */
class __TwigTemplate_7afa5ddaaab8768b4f040fbbae5211d9b7cf8afae6e8a6db4df0abeabcda50af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Asignar Ejecutivo a Supervisor</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Asignar Ejecutivo a Supervisor</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <label><strong>Seleccione Cargo para filtrar</strong></label>
                            <form name=\"filtra_usuario_perfil\" id=\"filtra_usuario_perfil\" action=\"\" method=\"POST\">
                                <label>
                                    <select class=\"form-control\" name='select_perfil' id='select_perfil'>
                                    <option selected='selected'>--</option>
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 26
            echo "                                        <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                    </select>
                                </label>
                                <input type='hidden' name='Submit' value='Consultar' id='submit'>
                            </form>
                        </div>

                        <div class=\"col-sm-8\">
                            <form id=\"form_opciones\" name=\"form_opciones\" action=\"\" method=\"POST\">
                                <label id=\"resultado\" name=\"resultado\">
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"box-body\" id=\"mostrardatosdiv\">
                            <div id=\"mostrarDatos\">

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

    // line 54
    public function block_appScript($context, array $blocks = array())
    {
        // line 55
        echo "    <script src=\"views/app/js/rrhh/asignar_user.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  98 => 54,  69 => 28,  60 => 26,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\asignar_ejecutivo\\asignar_ejecutivo.twig");
    }
}
