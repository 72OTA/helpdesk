<?php

/* avar/distribuir_blindaje.twig */
class __TwigTemplate_a6add8dcb1f0e22c3a1f641bf4ac60eafd38ffdfb7be93e30de549273f3f2456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "avar/distribuir_blindaje.twig", 1);
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
        echo "
    <section class=\"content-header\">
        <h1>
            AVAR
            <small>PROCESO AVAR DISTRIBUCIÓN</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Cargar Pendiente de blindaje</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <div class=\"box\">
                        <div class=\"box-body\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs pull-rigth\">
                                    <li class=\"active\">
                                        <a href=\"#tab_1-1\" data-toggle=\"tab\">NIVEL 1 - AVAR REACTIVO DIA</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_2-2\" data-toggle=\"tab\">NIVEL 2 - AVAR REACTIVO ESCALAMIENTO</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_3-3\" data-toggle=\"tab\">NIVEL 3 - AVAR REACTIVO REDES</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_4-4\" data-toggle=\"tab\">NIVEL 4 - AVAR PROACTIVO</a>
                                    </li>
                                    <li class=\"pull-left header\"></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Bloque</h4>
                                            <select name=\"bloqueAvR\" id=\"bloqueAvR\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["bloque"] ?? null))) {
                // line 48
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "id_bloque", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                            </select>
                                        </div>
                                        <div id=\"listar_bloque_ejecutivo\" class=\"col-md-6 table-responsive\"></div>

                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_2-2\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv2\" id=\"comunaAv2\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["comunas"] ?? null))) {
                // line 61
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_3-3\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv3\" id=\"comunaAv3\" class=\"form-control\">
                                                <option value=\"--\">--</option>
                                                <option value=\"TODAS\">TODAS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_4-4\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv4\" id=\"comunaAv4\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["comunas"] ?? null))) {
                // line 81
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                            </select>
                                        </div>
                                    </div>
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

    // line 96
    public function block_appScript($context, array $blocks = array())
    {
        // line 97
        echo "    <script src=\"views/app/js/avar/avar.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "avar/distribuir_blindaje.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 97,  176 => 96,  160 => 83,  148 => 81,  143 => 80,  124 => 63,  112 => 61,  107 => 60,  95 => 50,  83 => 48,  78 => 47,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}

    <section class=\"content-header\">
        <h1>
            AVAR
            <small>PROCESO AVAR DISTRIBUCIÓN</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Cargar Pendiente de blindaje</li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <div class=\"box\">
                        <div class=\"box-body\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs pull-rigth\">
                                    <li class=\"active\">
                                        <a href=\"#tab_1-1\" data-toggle=\"tab\">NIVEL 1 - AVAR REACTIVO DIA</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_2-2\" data-toggle=\"tab\">NIVEL 2 - AVAR REACTIVO ESCALAMIENTO</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_3-3\" data-toggle=\"tab\">NIVEL 3 - AVAR REACTIVO REDES</a>
                                    </li>
                                    <li>
                                        <a href=\"#tab_4-4\" data-toggle=\"tab\">NIVEL 4 - AVAR PROACTIVO</a>
                                    </li>
                                    <li class=\"pull-left header\"></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Bloque</h4>
                                            <select name=\"bloqueAvR\" id=\"bloqueAvR\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                {% for b in bloque if false != bloque %}
                                                    <option value=\"{{b.id_bloque}}\">{{ b.bloque }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div id=\"listar_bloque_ejecutivo\" class=\"col-md-6 table-responsive\"></div>

                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_2-2\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv2\" id=\"comunaAv2\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                {% for c in comunas if false != comunas %}
                                                    <option value=\"{{c.id_comuna}}\">{{ c.descripcion }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_3-3\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv3\" id=\"comunaAv3\" class=\"form-control\">
                                                <option value=\"--\">--</option>
                                                <option value=\"TODAS\">TODAS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab_4-4\">
                                        <div class=\"col-md-4\">
                                            <h4>Seleccione Comuna</h4>
                                            <select name=\"comunaAv4\" id=\"comunaAv4\" class=\"form-control\">
                                                <option value=\"--\" selected=\"selected\">--</option>
                                                {% for c in comunas if false != comunas %}
                                                    <option value=\"{{c.id_comuna}}\">{{ c.descripcion }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/avar/avar.js\"></script>
{% endblock %}", "avar/distribuir_blindaje.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\avar\\distribuir_blindaje.twig");
    }
}
