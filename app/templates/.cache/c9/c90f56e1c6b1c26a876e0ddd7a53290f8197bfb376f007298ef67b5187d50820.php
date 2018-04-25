<?php

/* despacho/despacho.twig */
class __TwigTemplate_fe5ad4838cd7d15cbc7daf706ac9683b9d5247a0cc6087476b13e0ac7fcc22f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/despacho.twig", 1);
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
            Despacho
            <small>Control panel</small>
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
                        <h3 class=\"box-title\">Resumen</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-lg-1\">
                            <table class=\"table table-bordered\">
                                <tbody>
                                    <tr>
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_asistencia_tecnico_Resumen"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_asistencia_tecnico_Resumen"] ?? null))) {
                // line 28
                echo "
                                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cuenta", array()), "html", null, true);
                echo "</td>

                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                    </tr>
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
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Detalle Asistencia</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 48
        $context["count"] = 1;
        // line 49
        echo "                    ";
        $context["tope"] = 20;
        // line 50
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_asistencia_tecnico"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_asistencia_tecnico"] ?? null))) {
                // line 51
                echo "                        ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 52
                    echo "                            <div class=\"col-lg-1\">
                                <table class=\"table table-bordered\">
                                    <thead>
                                        <th>TEC</th>
                                        <th>ASI</th>
                                    </thead>
                                    <tbody>

                        ";
                }
                // line 61
                echo "                                        <tr>
                                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "codigo", array()), "html", null, true);
                echo "</td>
                                            <td>
                                            ";
                // line 64
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()) == "AUS")) {
                    // line 65
                    echo "                                                <span class=\"label label-danger\">
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 66
$context["d"], "asistencia", array()) == "PRE")) {
                    // line 67
                    echo "                                                <span class=\"label label-success\">
                                            ";
                } else {
                    // line 69
                    echo "                                                <span class=\"label label-warning\">


                                            ";
                }
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "asistencia", array()), "html", null, true);
                echo "</td>
                                        </tr>
                        ";
                // line 75
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 76
                echo "                        ";
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 77
                    echo "                                    </tbody>
                                </table>
                            </div>
                            ";
                    // line 80
                    $context["count"] = 1;
                    // line 81
                    echo "                        ";
                }
                // line 82
                echo "
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 85
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 89
        echo "                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    // line 97
    public function block_appScript($context, array $blocks = array())
    {
        // line 98
        echo "  <script type=\"text/javascript\">
    setInterval(function() {
        window.location.reload();
    }, 300000);
  </script>
";
    }

    public function getTemplateName()
    {
        return "despacho/despacho.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 98,  196 => 97,  185 => 89,  179 => 85,  176 => 84,  168 => 82,  165 => 81,  163 => 80,  158 => 77,  155 => 76,  153 => 75,  147 => 73,  141 => 69,  137 => 67,  135 => 66,  132 => 65,  130 => 64,  125 => 62,  122 => 61,  111 => 52,  108 => 51,  102 => 50,  99 => 49,  97 => 48,  80 => 33,  70 => 30,  66 => 29,  63 => 28,  58 => 27,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/despacho.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\despacho.twig");
    }
}
