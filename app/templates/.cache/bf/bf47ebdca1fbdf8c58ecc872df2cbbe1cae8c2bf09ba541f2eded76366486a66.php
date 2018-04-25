<?php

/* visor/asistencia_tecnicos.twig */
class __TwigTemplate_e4f150aeba2edad9d0cc2f6411aa765aa9644c95110520d9cbe7fd79497ac101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout_visor", "visor/asistencia_tecnicos.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout_visor";
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
<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Resumen</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"col-lg-1\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                ";
        // line 17
        $context["total"] = 0;
        // line 18
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_asistencia_tecnico_Resumen"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_asistencia_tecnico_Resumen"] ?? null))) {
                // line 19
                echo "
                                    <td>
                                        ";
                // line 21
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()) == "AUS")) {
                    // line 22
                    echo "                                            <span class=\"label label-danger\">
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 23
$context["d"], "asistencia", array()) == "PRE")) {
                    // line 24
                    echo "                                            <span class=\"label label-success\">
                                        ";
                } else {
                    // line 26
                    echo "                                            <span class=\"label label-warning\">
                                        ";
                }
                // line 28
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "
                                    </td>
                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cuenta", array()), "html", null, true);
                echo "</td>
                                    ";
                // line 31
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cuenta", array()));
                // line 32
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                    <td>TOTAL</td><td>";
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
        // line 47
        $context["count"] = 1;
        // line 48
        echo "                ";
        $context["tope"] = 18;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_asistencia_tecnico"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_asistencia_tecnico"] ?? null))) {
                // line 50
                echo "                    ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 51
                    echo "                        <div class=\"col-lg-1\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <th>TEC</th>
                                    <th>ASI</th>
                                </thead>
                                <tbody>

                    ";
                }
                // line 60
                echo "                                    <tr>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "codigo", array()), "html", null, true);
                echo "</td>
                                        <td>
                                        ";
                // line 63
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()) == "AUS")) {
                    // line 64
                    echo "                                            <span class=\"label label-danger\">
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 65
$context["d"], "asistencia", array()) == "PRE")) {
                    // line 66
                    echo "                                            <span class=\"label label-success\">
                                        ";
                } else {
                    // line 68
                    echo "                                            <span class=\"label label-warning\">
                                        ";
                }
                // line 70
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "</td>
                                    </tr>
                    ";
                // line 72
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 73
                echo "                    ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 74
                    echo "                                </tbody>
                            </table>
                        </div>
                        ";
                    // line 77
                    $context["count"] = 1;
                    // line 78
                    echo "                    ";
                }
                // line 79
                echo "
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 82
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 86
        echo "            </div>
        </div>
    </div>
    </div>
</section>
<!-- /.content -->
";
    }

    // line 93
    public function block_appScript($context, array $blocks = array())
    {
        // line 94
        echo "    <script type=\"text/javascript\">
      setInterval(function() {
          location.href = \"visor/report_agendamiento\"
      }, 120000);
    </script>
";
    }

    public function getTemplateName()
    {
        return "visor/asistencia_tecnicos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 94,  208 => 93,  198 => 86,  192 => 82,  189 => 81,  181 => 79,  178 => 78,  176 => 77,  171 => 74,  168 => 73,  166 => 72,  160 => 70,  156 => 68,  152 => 66,  150 => 65,  147 => 64,  145 => 63,  140 => 61,  137 => 60,  126 => 51,  123 => 50,  117 => 49,  114 => 48,  112 => 47,  94 => 33,  87 => 32,  85 => 31,  81 => 30,  75 => 28,  71 => 26,  67 => 24,  65 => 23,  62 => 22,  60 => 21,  56 => 19,  50 => 18,  48 => 17,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "visor/asistencia_tecnicos.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\visor\\asistencia_tecnicos.twig");
    }
}
