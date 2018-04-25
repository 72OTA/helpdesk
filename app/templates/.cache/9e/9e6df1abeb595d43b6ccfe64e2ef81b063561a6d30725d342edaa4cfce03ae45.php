<?php

/* rrhh/rrhh.twig */
class __TwigTemplate_44d700b0a20c60e00ac835415b09fa95759c6009f827ae4284deb1e7b1ef7451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/rrhh.twig", 1);
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
            RRHH
            <small>Principal</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen Asistencia</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-lg-4\">
                            <table class=\"table table-bordered\">
                                <tbody>
                                    <tr>
                                    ";
        // line 27
        $context["total"] = 0;
        // line 28
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["GetAllTurnoDiaResumen"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["GetAllTurnoDiaResumen"] ?? null))) {
                // line 29
                echo "
                                        <td>
                                            ";
                // line 31
                if ((twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), 0, 5) == "Falta")) {
                    // line 32
                    echo "                                                <span class=\"label label-danger\">
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 33
$context["d"], "asistencia", array()) == "PRESENTE")) {
                    // line 34
                    echo "                                                <span class=\"label label-success\">
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 35
$context["d"], "asistencia", array()) == "LIBRE")) {
                    // line 36
                    echo "                                                <span class=\"label label-primary\">
                                            ";
                } else {
                    // line 38
                    echo "                                                <span class=\"label label-warning\">
                                            ";
                }
                // line 40
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "</span>
                                        </td>
                                        <td> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cuenta", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 43
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cuenta", array()));
                // line 44
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                        <td>TOTAL</td><td>";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"box\">

                <div class=\"box-body\">
                    ";
        // line 59
        $context["count"] = 1;
        // line 60
        echo "                    ";
        $context["tope"] = 18;
        // line 61
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getAllTurnosDia"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["getAllTurnosDia"] ?? null))) {
                // line 62
                echo "                        ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 63
                    echo "                            <div class=\"col-lg-4\">
                                <table class=\"table table-bordered\">
                                    <thead>
                                        <th>Ejecutivo</th>
                                        <th>Asistencia</th>
                                    </thead>
                                    <tbody>

                        ";
                }
                // line 72
                echo "                                        <tr>
                                            <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 75
                if ((twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), 0, 5) == "Falta")) {
                    // line 76
                    echo "                                                    <span class=\"label label-danger\">
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 77
$context["d"], "asistencia", array()) == "")) {
                    // line 78
                    echo "                                                    <span class=\"label label-success\">
                                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 79
$context["d"], "asistencia", array()) == "LIBRE")) {
                    // line 80
                    echo "                                                    <span class=\"label label-primary\">
                                                ";
                } else {
                    // line 82
                    echo "                                                    <span class=\"label label-warning\">
                                                ";
                }
                // line 84
                echo "                                            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array())) : ("PRESENTE")), "html", null, true);
                echo "</td>
                                        </tr>
                        ";
                // line 86
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 87
                echo "                        ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 88
                    echo "                                    </tbody>
                                </table>
                            </div>
                            ";
                    // line 91
                    $context["count"] = 1;
                    // line 92
                    echo "                        ";
                }
                // line 93
                echo "
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 96
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 100
        echo "                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "rrhh/rrhh.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 100,  211 => 96,  208 => 95,  200 => 93,  197 => 92,  195 => 91,  190 => 88,  187 => 87,  185 => 86,  179 => 84,  175 => 82,  171 => 80,  169 => 79,  166 => 78,  164 => 77,  161 => 76,  159 => 75,  154 => 73,  151 => 72,  140 => 63,  137 => 62,  131 => 61,  128 => 60,  126 => 59,  108 => 45,  101 => 44,  99 => 43,  95 => 42,  89 => 40,  85 => 38,  81 => 36,  79 => 35,  76 => 34,  74 => 33,  71 => 32,  69 => 31,  65 => 29,  59 => 28,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/rrhh.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\rrhh.twig");
    }
}
