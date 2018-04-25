<?php

/* plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig */
class __TwigTemplate_904ace01875dda44a15dcc7bfd9c91fa277cfd0c938e6e5c9e9e043f302df2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig", 1);
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
            <small>Editar Comuna</small>
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
            <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"editar_comuna_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <input type='hidden' name='id_comuna' id='id_comuna' value='";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "id_comuna", array()), "html", null, true);
        echo "'/>
                            <div class=\"form-group\">
                                Codigo Comuna
                                <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Nombre de la comuna\" value='";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "nombre", array()), "html", null, true);
        echo "' required=\"required\"/>
                                <br>
                                Zona
                                <input class=\"form-control\" name=\"zona\" id=\"zona\" type=\"text\" placeholder=\"Ingrese Zona ej:ZMET\" value='";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "zona", array()), "html", null, true);
        echo "' required=\"required\"/>
                                <br>
                                Codigo Zona
                                <input class=\"form-control\" name=\"cod_sub_zona\" id=\"cod_sub_zona\" type=\"text\" placeholder=\"Ingrese subzona ej:ZMNOR\" value='";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "cod_sub_zona", array()), "html", null, true);
        echo "' required=\"required\"/>
                                <br>
                                Territorio
                                <input class=\"form-control\" name=\"territorio\" id=\"territorio\" type=\"text\" placeholder=\"Ingrese Territorio\" value='";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "territorio", array()), "html", null, true);
        echo "' required=\"required\"/>
                                <br>
                                Nombre Comuna
                                <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" placeholder=\"Ingrese nombre completo de la comuna\" value='";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "descripcion", array()), "html", null, true);
        echo "' required=\"required\"/>
                                <br>
                                AVAR
                                <select name=\"avar\" id=\"avar\" class=\"form-control\">
                                    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "avar", array()) == 1)) {
            // line 53
            echo "                                        <option value=\"si\" selected=\"selected\">SI</option>
                                        <option value=\"no\">NO</option>
                                    ";
        } else {
            // line 56
            echo "                                        <option value=\"si\">SI</option>
                                        <option value=\"no\" selected=\"selected\">NO</option>
                                    ";
        }
        // line 59
        echo "                                </select>
                            </div>
                            <div class=\"panel-footer text-center\">
                                <button type=\"button\" id=\"update_comuna\" class=\"btn btn-default\">Grabar</button>
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

    // line 73
    public function block_appScript($context, array $blocks = array())
    {
        // line 74
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 74,  135 => 73,  118 => 59,  113 => 56,  108 => 53,  106 => 52,  99 => 48,  93 => 45,  87 => 42,  81 => 39,  75 => 36,  69 => 33,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Editar Comuna</small>
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
            <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"editar_comuna_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <input type='hidden' name='id_comuna' id='id_comuna' value='{{ db_comuna.id_comuna }}'/>
                            <div class=\"form-group\">
                                Codigo Comuna
                                <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Nombre de la comuna\" value='{{ db_comuna.nombre }}' required=\"required\"/>
                                <br>
                                Zona
                                <input class=\"form-control\" name=\"zona\" id=\"zona\" type=\"text\" placeholder=\"Ingrese Zona ej:ZMET\" value='{{ db_comuna.zona }}' required=\"required\"/>
                                <br>
                                Codigo Zona
                                <input class=\"form-control\" name=\"cod_sub_zona\" id=\"cod_sub_zona\" type=\"text\" placeholder=\"Ingrese subzona ej:ZMNOR\" value='{{ db_comuna.cod_sub_zona }}' required=\"required\"/>
                                <br>
                                Territorio
                                <input class=\"form-control\" name=\"territorio\" id=\"territorio\" type=\"text\" placeholder=\"Ingrese Territorio\" value='{{ db_comuna.territorio }}' required=\"required\"/>
                                <br>
                                Nombre Comuna
                                <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" placeholder=\"Ingrese nombre completo de la comuna\" value='{{ db_comuna.descripcion }}' required=\"required\"/>
                                <br>
                                AVAR
                                <select name=\"avar\" id=\"avar\" class=\"form-control\">
                                    {% if db_comuna.avar == 1 %}
                                        <option value=\"si\" selected=\"selected\">SI</option>
                                        <option value=\"no\">NO</option>
                                    {% else %}
                                        <option value=\"si\">SI</option>
                                        <option value=\"no\" selected=\"selected\">NO</option>
                                    {% endif %}
                                </select>
                            </div>
                            <div class=\"panel-footer text-center\">
                                <button type=\"button\" id=\"update_comuna\" class=\"btn btn-default\">Grabar</button>
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
{% endblock %}", "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\comuna\\editar_comuna.twig");
    }
}
