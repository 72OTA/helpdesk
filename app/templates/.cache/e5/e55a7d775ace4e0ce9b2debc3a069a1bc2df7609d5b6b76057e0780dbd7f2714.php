<?php

/* casilleros/nuevo_casillero.twig */
class __TwigTemplate_d4a9cfceaa1aefeef0ed565f7dbfb9e573e7dcf870972f0b7da94dba57b42185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "casilleros/nuevo_casillero.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Casilleros
            <small>Casillero A Registrar</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li>
                <a href=\"casilleros/listar_casilleros\">Listado de Casilleros</a>
            </li>
            <li class=\"active\">Agregar Casillero</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <form id=\"form_casillero\" name=\"form_casillero\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Agregar Casillero</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"col-md-6\">
                                <label>Numero de Orden:</label><input type=\"number\" name=\"nOrden\" id=\"nOrden\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>RUT:</label><input type=\"text\" name=\"rut\" id=\"rut\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Comuna:</label>
                                <select name=\"comuna\" id=\"comuna\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Actividad:</label>
                                <select name=\"actividad\" id=\"actividad\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
            // line 50
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["ac"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ac"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Acción:</label>
                                <select name=\"accion\" id=\"accion\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 59
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Casillero:</label>
                                <input type=\"text\" class=\"form-control\" id=\"casillero\" name=\"casillero\" placeholder=\"Ingrese el nombre del casillero\">
                            </div>
                            <br>
                            <div class=\"col-md-12\">
                                <label>Observación:</label>
                                <textarea name=\"observacion\" id=\"observacion\" cols=\"30\" rows=\"3\" class=\"form-control\"></textarea>
                            </div>
                            <br>
                            <div class=\"col-md-12 text-center\">
                                <br>
                                <a data-toggle='tooltip' data-placement='top' name=\"agregarCasillero\" id=\"agregarCasillero\" class='btn btn-success btn-lg'>Agregar Casillero
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    ";
    }

    // line 84
    public function block_appScript($context, array $blocks = array())
    {
        // line 85
        echo "        <script src=\"views/app/js/casilleros/casilleros.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "casilleros/nuevo_casillero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 85,  158 => 84,  132 => 61,  121 => 59,  117 => 58,  109 => 52,  98 => 50,  94 => 49,  86 => 43,  75 => 41,  71 => 40,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Casilleros
            <small>Casillero A Registrar</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li>
                <a href=\"casilleros/listar_casilleros\">Listado de Casilleros</a>
            </li>
            <li class=\"active\">Agregar Casillero</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <form id=\"form_casillero\" name=\"form_casillero\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Agregar Casillero</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"col-md-6\">
                                <label>Numero de Orden:</label><input type=\"number\" name=\"nOrden\" id=\"nOrden\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>RUT:</label><input type=\"text\" name=\"rut\" id=\"rut\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Comuna:</label>
                                <select name=\"comuna\" id=\"comuna\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    {% for c in comunas %}
                                        <option value=\"{{ c.id_comuna }}\">{{ c.descripcion }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Actividad:</label>
                                <select name=\"actividad\" id=\"actividad\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    {% for ac in actividad %}
                                        <option value=\"{{ac}}\">{{ac}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Acción:</label>
                                <select name=\"accion\" id=\"accion\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    {% for a in accion %}
                                        <option value=\"{{a}}\">{{a}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Casillero:</label>
                                <input type=\"text\" class=\"form-control\" id=\"casillero\" name=\"casillero\" placeholder=\"Ingrese el nombre del casillero\">
                            </div>
                            <br>
                            <div class=\"col-md-12\">
                                <label>Observación:</label>
                                <textarea name=\"observacion\" id=\"observacion\" cols=\"30\" rows=\"3\" class=\"form-control\"></textarea>
                            </div>
                            <br>
                            <div class=\"col-md-12 text-center\">
                                <br>
                                <a data-toggle='tooltip' data-placement='top' name=\"agregarCasillero\" id=\"agregarCasillero\" class='btn btn-success btn-lg'>Agregar Casillero
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    {% endblock %}
    {% block appScript %}
        <script src=\"views/app/js/casilleros/casilleros.js\"></script>
    {% endblock %}", "casilleros/nuevo_casillero.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\casilleros\\nuevo_casillero.twig");
    }
}
