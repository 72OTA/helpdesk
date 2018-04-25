<?php

/* plataforma/mantenedores_crud_masters/casilleros/nuevo_casillero.twig */
class __TwigTemplate_76b83a0800f2fb131a8db842069873c43a160fcc5949864051f1e9f3ddcdb5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/casilleros/nuevo_casillero.twig", 1);
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
            <small>Agregar Casillero</small>
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
                <a href=\"plataforma/listar_casilleros\">Listado de Casilleros</a>
            </li>
            <li class=\"active\">Agregar Casillero</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_casillero_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Casillero
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Ingrese nombre del casillero\" required=\"required\"/>
                                <br>
                                Zonas
                                <select name=\"id_zona\" id=\"id_zona\" class=\"form-control\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zonas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
            // line 40
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "id_zona", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "nombre_zona", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"register_casillero\" class=\"btn btn-default\">Grabar</button>
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

    // line 57
    public function block_appScript($context, array $blocks = array())
    {
        // line 58
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/casilleros/nuevo_casillero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 58,  108 => 57,  90 => 42,  79 => 40,  75 => 39,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Agregar Casillero</small>
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
                <a href=\"plataforma/listar_casilleros\">Listado de Casilleros</a>
            </li>
            <li class=\"active\">Agregar Casillero</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_casillero_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Casillero
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Ingrese nombre del casillero\" required=\"required\"/>
                                <br>
                                Zonas
                                <select name=\"id_zona\" id=\"id_zona\" class=\"form-control\">
                                    {% for z in zonas %}
                                        <option value=\"{{ z.id_zona }}\">{{ z.nombre_zona }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"register_casillero\" class=\"btn btn-default\">Grabar</button>
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
{% endblock %}", "plataforma/mantenedores_crud_masters/casilleros/nuevo_casillero.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\casilleros\\nuevo_casillero.twig");
    }
}
