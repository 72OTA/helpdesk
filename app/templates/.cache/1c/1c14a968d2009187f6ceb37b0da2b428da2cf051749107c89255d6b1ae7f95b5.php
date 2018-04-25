<?php

/* confirmacion/confirmacion.twig */
class __TwigTemplate_f3a7617898bea267ae486baaa3afadc27c7e68f8ee1bcbc07151f0be0fb07be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/confirmacion.twig", 1);
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
            Confirmación
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
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h2>";
        // line 21
        echo twig_escape_filter($this->env, ($context["confirma_q_ordenes_gestionadas"] ?? null), "html", null, true);
        echo "</h2>
                            <p>Ordenes Registradas Hoy</p>
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
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_q_orden_x_estado_confirmacion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_q_orden_x_estado_confirmacion"] ?? null))) {
                // line 34
                echo "                                    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "Resultado", array())), "html", null, true);
                echo " </p>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            <p>Resumen Confirmación</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-eye\"></i>
                        </div>
                        <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                    </div>
                </div>
                <div class=\"col-lg-3\">
                  <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                      <h3>Agregar</h3>
                      <p>Nuevo Orden</p>
                    </div>
                    <div class=\"icon\">
                      <i class=\"fa fa-plus\"></i>
                    </div>
                      <a href=\"confirmacion/programacion\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
                  </div>
                </div><!-- ./col -->
                <div class=\"col-lg-3\">
                  <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                      <h3>Listar</h3>
                      <p>Ordenes</p>
                    </div>
                    <div class=\"icon\">
                      <i class=\"fa fa-eye\"></i>
                    </div>
                      <a href=\"confirmacion/listar_ordenes\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                  </div>
                </div><!-- ./col -->
            </div><!-- ./col -->
            <!-- Resumen TOP 10 -->
            <div class=\"col-lg-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Gestión Confirmación Hoy - Meta: ";
        // line 73
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo " confirmaciones</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Comuna</th>
                                <th>Llamados</th>
                                <th>confirmados</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                ";
        // line 86
        $context["No"] = 1;
        // line 87
        echo "                                ";
        $context["total"] = 0;
        // line 88
        echo "                                ";
        $context["total_confirmados"] = 0;
        // line 89
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_llamados_ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_llamados_ejecutivos"] ?? null))) {
                // line 90
                echo "                                    <tr>
                                        <td>";
                // line 91
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()), "html", null, true);
                echo "</td>
                                        <td class=\"col-lg-1\"><div class=\"progress progress-xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 96
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
                echo "\">
                                                    <span class=\"sr-only\">";
                // line 97
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                </div>
                                            </div></td>
                                        <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                    </tr>
                                    ";
                // line 102
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 103
                echo "                                    ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()));
                // line 104
                echo "                                    ";
                $context["total_confirmados"] = (($context["total_confirmados"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()));
                // line 105
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                <tr>
                                <td colspan=\"2\">TOTAL:</td>
                                <td>";
        // line 108
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
                                <td>";
        // line 109
        echo twig_escape_filter($this->env, ($context["total_confirmados"] ?? null), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen por Bloque</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Bloque</th>
                                <th>Confirmado</th>
                                <th>Requerido</th>
                                <th colspan=\"2\">%</th>
                            </thead>
                            <tbody>
                                ";
        // line 131
        $context["No"] = 1;
        // line 132
        echo "                                ";
        $context["total_agendado"] = 0;
        // line 133
        echo "                                ";
        $context["total_requerido"] = 0;
        // line 134
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_bloque"] ?? null))) {
                // line 135
                echo "                                    <tr>
                                        <td>";
                // line 136
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "</td>
                                        <td width=\"100\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 142
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "\">
                                                    <span class=\"sr-only\">";
                // line 143
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td >
                                            ";
                // line 148
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%
                                        </td>
                                    </tr>
                                ";
                // line 151
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 152
                echo "                                ";
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()));
                // line 153
                echo "                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()));
                // line 154
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                <tr>
                                    <td colspan=\"2\">TOTAL</td>
                                    <td>";
        // line 157
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                    <td>";
        // line 158
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                    <td>
                                        <div class=\"progress progress-xs\">
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 161
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                <span class=\"sr-only\">";
        // line 162
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>";
        // line 166
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
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
        return "confirmacion/confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 166,  333 => 162,  325 => 161,  319 => 158,  315 => 157,  311 => 155,  304 => 154,  301 => 153,  298 => 152,  296 => 151,  290 => 148,  282 => 143,  274 => 142,  268 => 139,  264 => 138,  260 => 137,  256 => 136,  253 => 135,  247 => 134,  244 => 133,  241 => 132,  239 => 131,  214 => 109,  210 => 108,  206 => 106,  199 => 105,  196 => 104,  193 => 103,  191 => 102,  186 => 100,  180 => 97,  172 => 96,  167 => 94,  163 => 93,  159 => 92,  155 => 91,  152 => 90,  146 => 89,  143 => 88,  140 => 87,  138 => 86,  122 => 73,  83 => 36,  71 => 34,  66 => 33,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\confirmacion.twig");
    }
}
