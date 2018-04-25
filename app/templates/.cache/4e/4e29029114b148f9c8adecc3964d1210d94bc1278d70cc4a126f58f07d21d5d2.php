<?php

/* coordinacion/asignar_comuna/asignar_comuna.twig */
class __TwigTemplate_6e2394186501f7a1640836df778fdc7f440a3780b7dfb05fcd47f6fe8d712681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/asignar_comuna/asignar_comuna.twig", 1);
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
        Coordinación
        <small>Asignar Comuna a Ejecutivos</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Asignar Comuna a Ejecutivos</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <label><strong>Seleccione Perfil</strong></label>
                            <form name=\"filtra_usuario_perfil\" id=\"filtra_usuario_perfil\" action=\"\" method=\"POST\">
                                <label>
                                    <select class=\"form-control\" name='select_ejecutivo' id='select_ejecutivo'>
                                    <option selected='selected'>--</option>
                                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()) != 1)) {
                // line 27
                echo "                                        <option>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                echo "</option>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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

    // line 57
    public function block_appScript($context, array $blocks = array())
    {
        // line 58
        echo "    <script src=\"views/app/js/coordinacion/asignar_comuna.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "coordinacion/asignar_comuna/asignar_comuna.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 58,  103 => 57,  72 => 29,  62 => 27,  57 => 26,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coordinacion/asignar_comuna/asignar_comuna.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\asignar_comuna\\asignar_comuna.twig");
    }
}
