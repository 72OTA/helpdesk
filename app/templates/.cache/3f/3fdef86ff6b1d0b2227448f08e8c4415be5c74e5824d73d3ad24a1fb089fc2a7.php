<?php

/* visor/visor_agendamiento.twig */
class __TwigTemplate_36bbb4f24b3dc9384e11ccc928ea43cb9fb6240546d0e59120db61aadb21d92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout_visor", "visor/visor_agendamiento.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Informes
            <small>Agendamientos</small>
        </h1>
    </section>
    <section class=\"content\">
        <form id=\"forminforme\" name=\"forminforme\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Agendamiento de hoy</h3>
                            </div>
                            <div class=\"box-body\">
                                <div align=\"right\" class=\"col-md-2\">
                                    <label>Seleccionar Fecha:</label>
                                </div>
                                <div align=\"right\" class=\"col-md-6\">
                                    <input type=\"date\" class=\"form-control\" id=\"calendariohoy\" name=\"calendariohoy\" value='";
        // line 23
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "' onchange=\"revisarporfecha()\">
                                </div>
                                <div id=\"tabla\" name=\"tabla\">
                                    <table class=\"table table-bordered\" id=\"tblinforme\" name=\"tblinforme\">
                                        <thead>
                                            <th>Bloque</th>
                                            <th>Cliente Agendado</th>
                                            <th>Requerido</th>
                                            <th>Progreso</th>
                                            <th>%</th>
                                        </thead>
                                        <tbody>
                                            ";
        // line 35
        $context["total_agendado"] = 0;
        // line 36
        echo "                                            ";
        $context["total_requerido"] = 0;
        // line 37
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_hoy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((false != ($context["informe_hoy"] ?? null))) {
                // line 38
                echo "                                            <tr>
                                                <td><a onclick=\"verbloque('";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "</a></td>
                                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 44
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "\">
                                                            <span class=\"sr-only\">";
                // line 45
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                            </tr>
                                                ";
                // line 51
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()));
                // line 52
                echo "                                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()));
                // line 53
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                            <tr>
                                                <td>TOTAL</td>
                                                <td>";
        // line 56
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                                <td>";
        // line 57
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 60
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                            <span class=\"sr-only\">";
        // line 61
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Agendamiento dia posterior</h3>
                            </div>
                            <div class=\"box-body\">
                                <div align=\"right\" class=\"col-md-2\">
                                    <label>Fecha dia posterior:</label>
                                </div>
                                <div id=\"tablaposterior\" name=\"tablaposterior\">
                                    <div align=\"right\" class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" id=\"calendariopost\" name=\"calendariopost\" value='";
        // line 84
        echo twig_escape_filter($this->env, ($context["fecha2"] ?? null), "html", null, true);
        echo "' onchange=\"revisarporfecha()\">
                                    </div>
                                    <table class=\"table table-bordered\" id=\"tblinforme\" name=\"tblinforme\">
                                        <thead>
                                            <th>Bloque</th>
                                            <th>Cliente Agendado</th>
                                            <th>Requerido</th>
                                            <th>Progreso</th>
                                            <th>%</th>
                                        </thead>
                                        <tbody>
                                            ";
        // line 95
        $context["total_agendado"] = 0;
        // line 96
        echo "                                            ";
        $context["total_requerido"] = 0;
        // line 97
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_posterior"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["informe_posterior"] ?? null))) {
                // line 98
                echo "                                                <tr>
                                                    <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "bloque", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <div class=\"progress progress-xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 104
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "\">
                                                                <span class=\"sr-only\">";
                // line 105
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                                </tr>
                                                ";
                // line 111
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()));
                // line 112
                echo "                                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()));
                // line 113
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                            <tr>
                                                <td>TOTAL</td>
                                                <td>";
        // line 116
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                                <td>";
        // line 117
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 120
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                            <span class=\"sr-only\">";
        // line 121
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div id=\"tablacomuna\" name=\"tablacomuna\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                                    ";
        // line 142
        if ((($context["bloque"] ?? null) != false)) {
            // line 143
            echo "                                        <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                                    ";
        } else {
            // line 145
            echo "                                        <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                                    ";
        }
        // line 147
        echo "                                </div>
                                <div class=\"box-body\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <th>Comuna</th>
                                            <th>Cantidad Gestion</th>
                                            <th>Requerido</th>
                                            <th>Progreso</th>
                                            <th>%</th>
                                        </thead>
                                        <tbody>
                                            ";
        // line 158
        $context["total_agendado"] = 0;
        // line 159
        echo "                                            ";
        $context["total_requerido"] = 0;
        // line 160
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cantcomunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            if ((false != ($context["cantcomunas"] ?? null))) {
                // line 161
                echo "                                                <tr>
                                                    <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "nombre", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <div class=\"progress progress-xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 167
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "\">
                                                                <span class=\"sr-only\">";
                // line 168
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                                </tr>
                                                ";
                // line 174
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()));
                // line 175
                echo "                                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()));
                // line 176
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                                            <tr>
                                                <td>TOTAL</td>
                                                <td>";
        // line 179
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                                <td>";
        // line 180
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 183
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                            <span class=\"sr-only\">";
        // line 184
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
        // line 188
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div id=\"comunapos\" name=\"comunapos\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                                    ";
        // line 201
        if ((($context["bloque"] ?? null) != false)) {
            // line 202
            echo "                                        <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                                    ";
        } else {
            // line 204
            echo "                                        <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                                    ";
        }
        // line 206
        echo "                                    <h3 class=\"box-title col-xs-4\"><label>Fecha: ";
        echo twig_escape_filter($this->env, ($context["fecha2"] ?? null), "html", null, true);
        echo "</label></h3>
                                </div>
                                <div class=\"box-body\">
                                <table class=\"table table-bordered\">
                                    <thead>
                                        <th>Comuna</th>
                                        <th>Cantidad Gestion</th>
                                        <th>Requerido</th>
                                        <th>Progreso</th>
                                        <th>%</th>
                                    </thead>
                                    <tbody>
                                        ";
        // line 218
        $context["total_agendado"] = 0;
        // line 219
        echo "                                        ";
        $context["total_requerido"] = 0;
        // line 220
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunapos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
            if ((false != ($context["comunapos"] ?? null))) {
                // line 221
                echo "                                            <tr>
                                                <td>";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "nombre", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 227
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "\">
                                                            <span class=\"sr-only\">";
                // line 228
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
                // line 232
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                            </tr>
                                            ";
                // line 234
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()));
                // line 235
                echo "                                            ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()));
                // line 236
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                                        <tr>
                                            <td>TOTAL</td>
                                            <td>";
        // line 239
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                            <td>";
        // line 240
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                            <td>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 243
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                        <span class=\"sr-only\">";
        // line 244
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>";
        // line 248
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

";
    }

    // line 263
    public function block_appScript($context, array $blocks = array())
    {
        // line 264
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  <script type=\"text/javascript\">
    setInterval(function() {
        location.href = \"visor\"
    }, 120000);
  </script>
";
    }

    public function getTemplateName()
    {
        return "visor/visor_agendamiento.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 264,  571 => 263,  552 => 248,  545 => 244,  537 => 243,  531 => 240,  527 => 239,  523 => 237,  516 => 236,  513 => 235,  511 => 234,  506 => 232,  499 => 228,  491 => 227,  485 => 224,  481 => 223,  477 => 222,  474 => 221,  468 => 220,  465 => 219,  463 => 218,  447 => 206,  443 => 204,  437 => 202,  435 => 201,  419 => 188,  412 => 184,  404 => 183,  398 => 180,  394 => 179,  390 => 177,  383 => 176,  380 => 175,  378 => 174,  373 => 172,  366 => 168,  358 => 167,  352 => 164,  348 => 163,  344 => 162,  341 => 161,  335 => 160,  332 => 159,  330 => 158,  317 => 147,  313 => 145,  307 => 143,  305 => 142,  285 => 125,  278 => 121,  270 => 120,  264 => 117,  260 => 116,  256 => 114,  249 => 113,  246 => 112,  244 => 111,  239 => 109,  232 => 105,  224 => 104,  218 => 101,  214 => 100,  210 => 99,  207 => 98,  201 => 97,  198 => 96,  196 => 95,  182 => 84,  160 => 65,  153 => 61,  145 => 60,  139 => 57,  135 => 56,  131 => 54,  124 => 53,  121 => 52,  119 => 51,  114 => 49,  107 => 45,  99 => 44,  93 => 41,  89 => 40,  83 => 39,  80 => 38,  74 => 37,  71 => 36,  69 => 35,  54 => 23,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "visor/visor_agendamiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\visor\\visor_agendamiento.twig");
    }
}
