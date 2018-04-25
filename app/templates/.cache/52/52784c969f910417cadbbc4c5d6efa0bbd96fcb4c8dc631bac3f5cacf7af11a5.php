<?php

/* plataforma/mantenedores_crud_masters/actividad/editar_actividad.twig */
class __TwigTemplate_7dbc0d94b4018c1663c636eda5417ae5f7bf1d9856bb5a1fd4a1789749a69c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/actividad/editar_actividad.twig", 1);
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
        <small>Edita Actividad</small>
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
        <li class=\"active\">Editar Actividad</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <form id=\"editar_actividad_form\" action=\"\" method=\"POST\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <input type='hidden' name='id_actividad' id='id_actividad' value='";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_actividad"] ?? null), "id_actividad", array()), "html", null, true);
        echo "' />
                        <div class=\"form-group\">
                            <input class=\"form-control\" name=\"actividad\" id=\"actividad\" type=\"text\" placeholder=\"Nombre de la actividad\" value='";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_actividad"] ?? null), "actividad", array()), "html", null, true);
        echo "'
                                required=\"required\" />
                        </div>
                        <div class=\"panel-footer text-center\">
                            <button type=\"button\" id=\"update_actividad\" class=\"btn btn-default\">Grabar</button>
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
        return "plataforma/mantenedores_crud_masters/actividad/editar_actividad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 48,  91 => 47,  72 => 33,  67 => 31,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %} {% block appStylos %}{% endblock %} {% block appBody %}
<section class=\"content-header\">
    <h1>
        Plataforma
        <small>Edita Actividad</small>
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
        <li class=\"active\">Editar Actividad</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <form id=\"editar_actividad_form\" action=\"\" method=\"POST\">
                    <div class=\"box-body col-sm-4\"></div>
                    <div class=\"box-body col-sm-4\">
                        <input type='hidden' name='id_actividad' id='id_actividad' value='{{ db_actividad.id_actividad }}' />
                        <div class=\"form-group\">
                            <input class=\"form-control\" name=\"actividad\" id=\"actividad\" type=\"text\" placeholder=\"Nombre de la actividad\" value='{{ db_actividad.actividad }}'
                                required=\"required\" />
                        </div>
                        <div class=\"panel-footer text-center\">
                            <button type=\"button\" id=\"update_actividad\" class=\"btn btn-default\">Grabar</button>
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
{% endblock %}", "plataforma/mantenedores_crud_masters/actividad/editar_actividad.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\actividad\\editar_actividad.twig");
    }
}
