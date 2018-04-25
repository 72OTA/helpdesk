<?php

/* plataforma/mantenedores_crud_masters/comuna/nueva_comuna.twig */
class __TwigTemplate_a6dfb454efb16d9afa56e04519e3f6f7f3eadaa3f8d8b2cf56767824c0150c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/comuna/nueva_comuna.twig", 1);
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
            <small>Agregar Comuna</small>
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
                <a href=\"plataforma/listar_comunas\">Listado de Comunas</a>
            </li>
            <li class=\"active\">Agregar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_comuna_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Codigo Comuna
                                <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Codigo comuna ej: MAIP\" required=\"required\"/>
                                <br>
                                Zona
                                <input class=\"form-control\" name=\"zona\" id=\"zona\" type=\"text\" placeholder=\"Ingrese Zona ej:ZMET\" required=\"required\"/>
                                <br>
                                Codigo zona
                                <input class=\"form-control\" name=\"cod_sub_zona\" id=\"cod_sub_zona\" type=\"text\" placeholder=\"Ingrese subzona ej:ZMNOR\" required=\"required\"/>
                                <br>
                                Territorio
                                <input class=\"form-control\" name=\"territorio\" id=\"territorio\" type=\"text\" placeholder=\"Ingrese Territorio\" required=\"required\"/>
                                <br>
                                Nombre Comuna
                                <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" placeholder=\"Ingrese nombre completo de la comuna\" required=\"required\"/>
                                <br>
                                AVAR
                                <select name=\"avar\" id=\"avar\" class=\"form-control\">
                                    <option value=\"si\">SI</option>
                                    <option value=\"no\">NO</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"register_comuna\" class=\"btn btn-default\">Grabar</button>
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

    // line 68
    public function block_appScript($context, array $blocks = array())
    {
        // line 69
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/comuna/nueva_comuna.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 69,  105 => 68,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Agregar Comuna</small>
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
                <a href=\"plataforma/listar_comunas\">Listado de Comunas</a>
            </li>
            <li class=\"active\">Agregar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_comuna_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Codigo Comuna
                                <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Codigo comuna ej: MAIP\" required=\"required\"/>
                                <br>
                                Zona
                                <input class=\"form-control\" name=\"zona\" id=\"zona\" type=\"text\" placeholder=\"Ingrese Zona ej:ZMET\" required=\"required\"/>
                                <br>
                                Codigo zona
                                <input class=\"form-control\" name=\"cod_sub_zona\" id=\"cod_sub_zona\" type=\"text\" placeholder=\"Ingrese subzona ej:ZMNOR\" required=\"required\"/>
                                <br>
                                Territorio
                                <input class=\"form-control\" name=\"territorio\" id=\"territorio\" type=\"text\" placeholder=\"Ingrese Territorio\" required=\"required\"/>
                                <br>
                                Nombre Comuna
                                <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" placeholder=\"Ingrese nombre completo de la comuna\" required=\"required\"/>
                                <br>
                                AVAR
                                <select name=\"avar\" id=\"avar\" class=\"form-control\">
                                    <option value=\"si\">SI</option>
                                    <option value=\"no\">NO</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"register_comuna\" class=\"btn btn-default\">Grabar</button>
                                <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
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
{% endblock %}", "plataforma/mantenedores_crud_masters/comuna/nueva_comuna.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\comuna\\nueva_comuna.twig");
    }
}
