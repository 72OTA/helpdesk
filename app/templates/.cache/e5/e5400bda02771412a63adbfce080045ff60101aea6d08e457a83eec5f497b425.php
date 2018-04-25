<?php

/* plataforma/mantenedores_crud_masters/actividad/nueva_actividad.twig */
class __TwigTemplate_f73c463c47ad1d2a7ecd655b2ad12d5a3f243addaf737ffa93522af48a5c1192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/actividad/nueva_actividad.twig", 1);
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

    public function block_appStylos($context, array $blocks = array())
    {
    }

    public function block_appBody($context, array $blocks = array())
    {
        // line 2
        echo "<section class=\"content-header\">
    <h1>
        Plataforma
        <small>Agregar Actividad</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-home\"></i>
                Home</a>
        </li>
        <li>
            <a href=\"plataforma/mantenedores_crud_masters\">Mantenedores</a>
        </li>
        <li>
            <a href=\"plataforma/listar_actividades\">Listado de Actividades</a>
        </li>
        <li class=\"active\">Nueva Actividad</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <form id=\"register_actividad_form\" action=\"\" method=\"POST\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" name=\"actividad\" id=\"actividad\" type=\"text\" placeholder=\"Nombre de la actividad\" required=\"required\"
                            />
                        </div>
                        <div class=\"form-group\">
                            <button type=\"button\" id=\"register_actividad\" class=\"btn btn-default\">Grabar</button>
                            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

";
    }

    // line 47
    public function block_appScript($context, array $blocks = array())
    {
        // line 48
        echo "<script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/actividad/nueva_actividad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  85 => 47,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %} {% block appStylos %}{% endblock %} {% block appBody %}
<section class=\"content-header\">
    <h1>
        Plataforma
        <small>Agregar Actividad</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-home\"></i>
                Home</a>
        </li>
        <li>
            <a href=\"plataforma/mantenedores_crud_masters\">Mantenedores</a>
        </li>
        <li>
            <a href=\"plataforma/listar_actividades\">Listado de Actividades</a>
        </li>
        <li class=\"active\">Nueva Actividad</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <form id=\"register_actividad_form\" action=\"\" method=\"POST\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" name=\"actividad\" id=\"actividad\" type=\"text\" placeholder=\"Nombre de la actividad\" required=\"required\"
                            />
                        </div>
                        <div class=\"form-group\">
                            <button type=\"button\" id=\"register_actividad\" class=\"btn btn-default\">Grabar</button>
                            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

{% endblock %} {% block appScript %}
<script src=\"views/app/js/plataforma/plataforma.js\"></script>
{% endblock %}", "plataforma/mantenedores_crud_masters/actividad/nueva_actividad.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\actividad\\nueva_actividad.twig");
    }
}
