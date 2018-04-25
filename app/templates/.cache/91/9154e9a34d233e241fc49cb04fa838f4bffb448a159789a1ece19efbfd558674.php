<?php

/* plataforma/mantenedores_crud_masters/zona/editar_zona.twig */
class __TwigTemplate_841c642e8cdcafb03e1c77066dd18aa7f9019f721b0e9c41f9f551fb67331d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/zona/editar_zona.twig", 1);
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
    }

    // line 3
    public function block_appBody($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Agregar Zona</small>
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
                <a href=\"plataforma/listar_zonas\">Listado de Zonas</a>
            </li>
            <li class=\"active\">Agregar Zona</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"editar_zona_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Zona
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["zona_db"] ?? null), "nombre_zona", array()), "html", null, true);
        echo "\" required=\"required\"/>
                                <input type=\"hidden\" name=\"id_zona\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["zona_db"] ?? null), "id_zona", array()), "html", null, true);
        echo "\">
                                <br>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"update_zona\" class=\"btn btn-default\">Grabar</button>
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

    // line 51
    public function block_appScript($context, array $blocks = array())
    {
        // line 52
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/zona/editar_zona.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  94 => 51,  75 => 36,  71 => 35,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Agregar Zona</small>
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
                <a href=\"plataforma/listar_zonas\">Listado de Zonas</a>
            </li>
            <li class=\"active\">Agregar Zona</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"editar_zona_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Zona
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" value=\"{{zona_db.nombre_zona}}\" required=\"required\"/>
                                <input type=\"hidden\" name=\"id_zona\" value=\"{{ zona_db.id_zona }}\">
                                <br>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"update_zona\" class=\"btn btn-default\">Grabar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
{% endblock %}", "plataforma/mantenedores_crud_masters/zona/editar_zona.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\zona\\editar_zona.twig");
    }
}
