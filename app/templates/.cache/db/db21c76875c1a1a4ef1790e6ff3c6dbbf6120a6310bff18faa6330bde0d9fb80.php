<?php

/* casilleros/principal.twig */
class __TwigTemplate_94e48394cebbafc9eb3f1a1d2df858f26b2c41646ae3069644d847d61ca51094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "casilleros/principal.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
            <small>Principal</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3 class=\"text-center\">
                                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleroQ"] ?? null), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "
                                Casilleros</h3>
                            <p>
                                Registrados Hoy</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-headphones\"></i>
                        </div>
                        <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>
                                Descargar Excell</h3>
                            <p>Resumen Casilleros</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-check-square\"></i>
                        </div>
                        <a href=\"casilleros/excell\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-download\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>Agregar</h3>
                            <p>Nuevo Casillero</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-plus\"></i>
                        </div>
                        <a href=\"casilleros/agregar\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>Listar</h3>
                            <p>Casilleros</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-eye\"></i>
                        </div>
                        <a href=\"casilleros/listar_casilleros\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
            <!-- Resumen TOP 10 -->
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Gestión Casilleros Hoy
                        </h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr >
                                    <th scope=\"col\" class=\"text-center\">Zonas</th>
                                    <th scope=\"col\" class=\"text-center\">Ejecutivo</th>
                                    <th scope=\"col\">Casillero</th>
                                    <th scope=\"col\">Ordenes</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zona"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["z"]) {
            // line 103
            echo "                                    <th class=\"text-center\" rowspan=\"4\" style=\"vertical-align: middle;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["z"], "nombre_zona", array()), "html", null, true);
            echo "</th>
                                    <td class=\"text-center\" rowspan=\"4\" style=\"vertical-align: middle;\">EJECUTIVO</td>
                                    ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ordenes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 106
                echo "                                        <tr>
                                            <td>";
                // line 107
                echo twig_escape_filter($this->env, $context["o"], "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                <tr>
                                    <td colspan=\"2\">TOTAL:</td>
                                    <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleroQ"] ?? null), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "casilleros/principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 113,  167 => 111,  161 => 110,  152 => 107,  149 => 106,  145 => 105,  139 => 103,  135 => 102,  56 => 26,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Casilleros
            <small>Principal</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3 class=\"text-center\">
                                {{casilleroQ[0][0]}}
                                Casilleros</h3>
                            <p>
                                Registrados Hoy</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-headphones\"></i>
                        </div>
                        <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>
                                Descargar Excell</h3>
                            <p>Resumen Casilleros</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-check-square\"></i>
                        </div>
                        <a href=\"casilleros/excell\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-download\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>Agregar</h3>
                            <p>Nuevo Casillero</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-plus\"></i>
                        </div>
                        <a href=\"casilleros/agregar\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h3>Listar</h3>
                            <p>Casilleros</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-eye\"></i>
                        </div>
                        <a href=\"casilleros/listar_casilleros\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
            <!-- Resumen TOP 10 -->
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Gestión Casilleros Hoy
                        </h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr >
                                    <th scope=\"col\" class=\"text-center\">Zonas</th>
                                    <th scope=\"col\" class=\"text-center\">Ejecutivo</th>
                                    <th scope=\"col\">Casillero</th>
                                    <th scope=\"col\">Ordenes</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for z in zona %}
                                    <th class=\"text-center\" rowspan=\"4\" style=\"vertical-align: middle;\">{{ z.nombre_zona }}</th>
                                    <td class=\"text-center\" rowspan=\"4\" style=\"vertical-align: middle;\">EJECUTIVO</td>
                                    {% for o in ordenes %}
                                        <tr>
                                            <td>{{ o }}</td>
                                        </tr>
                                    {% endfor %}
                                {% endfor %}
                                <tr>
                                    <td colspan=\"2\">TOTAL:</td>
                                    <td>{{casilleroQ[0][0]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->

{% endblock %}", "casilleros/principal.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\casilleros\\principal.twig");
    }
}
