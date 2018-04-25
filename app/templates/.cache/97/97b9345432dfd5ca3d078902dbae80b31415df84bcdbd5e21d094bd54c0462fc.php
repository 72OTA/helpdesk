<?php

/* coordinacion/asignar_tecnico/asignar_tecnico.twig */
class __TwigTemplate_7875f97b2edf16e717f265b91f2c7c144e3465ac4cbc5d6aa0a63d2ff4a2593d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/asignar_tecnico/asignar_tecnico.twig", 1);
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
        Coordinación
        <small>Asignar Tecnico a Ejecutivos</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Asignar Tecnico a Ejecutivos</li>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()) != 1)) {
                // line 31
                echo "                                        <option>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                echo "</option>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                    </select>
                                </label>
                                <input type='hidden' name='Submit' value='Consultar' id='submit'>
                            </form>
                        </div>

                        <div class=\"col-sm-4\">
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

    // line 61
    public function block_appScript($context, array $blocks = array())
    {
        // line 62
        echo "   <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
   <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/coordinacion/asignar_tecnico.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "coordinacion/asignar_tecnico/asignar_tecnico.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 62,  113 => 61,  82 => 33,  72 => 31,  67 => 30,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coordinacion/asignar_tecnico/asignar_tecnico.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\asignar_tecnico\\asignar_tecnico.twig");
    }
}
