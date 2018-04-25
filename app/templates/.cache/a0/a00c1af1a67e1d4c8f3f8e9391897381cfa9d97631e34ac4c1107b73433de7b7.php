<?php

/* plataforma/mantenedores_crud_masters/casilleros/editar_casilleros.twig */
class __TwigTemplate_719da6dbcb804c0e213ec362872823ee1f9307a2c64a5ead789cb2cb861d0c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/casilleros/editar_casilleros.twig", 1);
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
                    <form id=\"editar_casillero_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Casillero
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros_db"] ?? null), "nombre", array()), "html", null, true);
        echo "\" required=\"required\"/>
                                <input class=\"form-control\" name=\"id_casilleros\" id=\"id_casilleros\" type=\"hidden\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros_db"] ?? null), "id_casilleros", array()), "html", null, true);
        echo "\" required=\"required\"/>
                                <br>
                                Zonas
                                <select name=\"id_zona\" id=\"id_zona\" class=\"form-control\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zonas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
            // line 41
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros_db"] ?? null), "id_zona", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "id_zona", array()))) {
                // line 42
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "id_zona", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "nombre_zona", array()), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 44
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "id_zona", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "nombre_zona", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 46
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"update_casillero\" class=\"btn btn-default\">Grabar</button>
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

    // line 61
    public function block_appScript($context, array $blocks = array())
    {
        // line 62
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/casilleros/editar_casilleros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  128 => 61,  111 => 47,  105 => 46,  97 => 44,  89 => 42,  86 => 41,  82 => 40,  75 => 36,  71 => 35,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
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
                    <form id=\"editar_casillero_form\" action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                Nombre Casillero
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" value=\"{{ casilleros_db.nombre }}\" required=\"required\"/>
                                <input class=\"form-control\" name=\"id_casilleros\" id=\"id_casilleros\" type=\"hidden\" value=\"{{ casilleros_db.id_casilleros }}\" required=\"required\"/>
                                <br>
                                Zonas
                                <select name=\"id_zona\" id=\"id_zona\" class=\"form-control\">
                                    {% for z in zonas %}
                                        {% if casilleros_db.id_zona == z.id_zona %}
                                            <option value=\"{{ z.id_zona }}\" selected=\"selected\">{{ z.nombre_zona }}</option>
                                        {% else %}
                                            <option value=\"{{ z.id_zona }}\">{{ z.nombre_zona }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"update_casillero\" class=\"btn btn-default\">Grabar</button>
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
{% endblock %}", "plataforma/mantenedores_crud_masters/casilleros/editar_casilleros.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\casilleros\\editar_casilleros.twig");
    }
}
