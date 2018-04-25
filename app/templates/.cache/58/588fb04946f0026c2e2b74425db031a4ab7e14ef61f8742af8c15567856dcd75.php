<?php

/* confirmacion/programacion/editar_confirmacion.twig */
class __TwigTemplate_56e1de9b80af4e8bac878458f6f4fca6e6d1eff04c036ce81d157e0c39487e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/editar_confirmacion.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        Confirmación
        <small>Programación Nielsen</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li><a href=\"confirmacion/listar_ordenes\">Listado de Ordenes</a></li>
    <li class=\"active\">Modificar Registro</li>
    </ol>
</section>
  <!-- Main content -->
<section class=\"content\">
    <form id=\"formmodorden\" name=\"formmodorden\">
        <div id=\"mod_ot\" name=\"mod_ot\" class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Modificar Orden</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-md-4\">
                            <label>ID Orden:</label><input type=\"text\" name=\"textmodidorden\" id=\"textmodidorden\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label>Rut Cliente:</label><input type=\"text\" name=\"textmodrutcliente\" id=\"textmodrutcliente\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "rut_cliente", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Fecha OT:</label><input type=\"date\" name=\"fechaot\" id=\"fechaot\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_ot", array()), "html", null, true);
        echo "\">
                        </div>
                        <!-- <div class=\"col-md-4\">
                            <label>Reg:</label><input type=\"text\" name=\"textmodreg\" id=\"textmodreg\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reg", array()), "html", null, true);
        echo "\">
                        </div> -->
                        <div class=\"col-md-8\">
                            <label>Ejecutivo:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "name", array()), "html", null, true);
        echo "\" readonly>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id=\"bloque_ot\" name=\"bloque_ot\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BLOQUE FLUJO</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 52
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque_flujo", array()))) {
                    // line 53
                    echo "                                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbbloque__flujo\" onchange=\"bloque_flujo('";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"rbbloque__flujo-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">
                                        <font size=\"4\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                } else {
                    // line 58
                    echo "                                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbbloque__flujo\" onchange=\"bloque_flujo('";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"rbbloque__flujo-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">
                                        <font size=\"4\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                }
                // line 63
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
                    <div class=\"box-footer\">
                        <div class=\"col-md-3\" style=\"border: 1px solid white\">
                            <label>Fecha Compromiso:</label><input type=\"date\" name=\"textfecha_flujo\" min=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" id=\"textfecha_flujo\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso_flujo", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"reage\" name=\"reage\" class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">REAGENDAMIENTOS</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 81
            echo "                            ";
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()))) {
                // line 82
                echo "                                <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 83
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\" checked>
                                    ";
                // line 84
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                                </div>
                            ";
            } else {
                // line 87
                echo "                                <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 88
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\">
                                    ";
                // line 89
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                                </div>
                            ";
            }
            // line 92
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </div>
                </div>
            </div>
        </div>
        <div id=\"modmotivo\" name=\"modmotivo\" class=\"row\">
          <div class=\"col-xs-12\">
            <div class=\"box\">
              <div class=\"box-header\">
                <h3 class=\"box-title\">MOTIVO DEL LLAMADO</h3>
              </div>
              <div class=\"box-body\">
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 106
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 107
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                      ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                } else {
                    // line 112
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">
                      ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                }
                // line 117
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "              </div>
            </div>
          </div>
        </div>
    <div id=\"modcomuna\" name=\"modcomuna\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">COMUNA</h3>
          </div>
          <div class=\"box-body\">
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 130
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 131
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 136
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 138
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 141
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>NODO:<input type=\"number\" min='1' name=\"textmodnodo\" id=\"textmodnodo\" class=\"form-control\" placeholder=\"NODO\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>SUBNODO:<input type=\"number\" min='1' name=\"textmodsubnodo\" id=\"textmodsubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "subnodo", array()), "html", null, true);
        echo "\"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id=\"tipoorden\" name=\"tipoorden\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">TIPO DE ORDEN</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 160
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()))) {
                    // line 161
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodtipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\"  checked=\"checked\">
                                ";
                    // line 163
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                } else {
                    // line 166
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodtipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\">
                                ";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                }
                // line 171
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                </div>
            </div>
        </div>
    </div>
    <div id=\"modactividad\" name=\"modactividad\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">ACTIVIDAD</h3>
          </div>
          <div class=\"box-body\">
            ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 184
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 185
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 187
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 190
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 195
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "          </div>
        </div>
      </div>
     </div>
    <div id=\"modresultado\" name=\"modresultado\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">RESULTADO</h3>
          </div>
          <div class=\"box-body\">
            <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
              ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 209
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 210
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                    ";
                    // line 212
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                } else {
                    // line 215
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 216
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                    ";
                    // line 217
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                }
                // line 220
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "            </table>
           </div>
         </div>
       </div>
      </div>
      <div id=\"modbloque\" name=\"modbloque\" class=\"row\">
          <div class=\"col-xs-12\">
              <div class=\"box\">
                  <div class=\"box-header\">
                      <h3 class=\"box-title\">BLOQUE</h3>
                  </div>
                  <div class=\"box-body\">
                      ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 234
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 235
                    echo "                              <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                  <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">
                                      <font size=\"4\">";
                    // line 237
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                              </div>
                          ";
                } else {
                    // line 240
                    echo "                              <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                  <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 241
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">
                                      <font size=\"4\">";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                              </div>
                          ";
                }
                // line 245
                echo "                      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                  </div>
                  <div class=\"box-footer\">
                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                          <label>Fecha Compromiso:</label><input type=\"date\" name=\"textmodfecha\" id=\"textmodfecha\" class=\"form-control\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso", array()), "html", null, true);
        echo "\">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id=\"observacion\" name=\"observacion\" class=\"row\">
          <div class=\"col-xs-12\">
              <div class=\"box\">
                  <div class=\"box-header\">
                      <h3 class=\"box-title\">OBSERVACIÓN</h3>
                  </div>
                  <div class=\"box-body\">
                      <font size=\"4\"><input type=\"text\" name=\"textmodobservacion\" id=\"textmodobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\"></font>
                  </div>
              </div>
          </div>
       </div>

        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodtipoorden\" id=\"textmodtipoorden\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "operador", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reagendamiento\" id=\"reagendamiento\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textbloque_flujo\" id=\"textbloque_flujo\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque_flujo", array()), "html", null, true);
        echo "\">

      </div>
      </form>
    </section>
  ";
    }

    // line 285
    public function block_appScript($context, array $blocks = array())
    {
        // line 286
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
    <script type=\"text/javascript\">
        window.onload= function(){
            document.formmodorden.textmodidorden.focus()
        }
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/editar_confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 286,  649 => 285,  639 => 279,  635 => 278,  631 => 277,  627 => 276,  623 => 275,  619 => 274,  615 => 273,  611 => 272,  607 => 271,  603 => 270,  592 => 262,  576 => 249,  571 => 246,  564 => 245,  558 => 242,  552 => 241,  549 => 240,  543 => 237,  537 => 236,  534 => 235,  531 => 234,  526 => 233,  512 => 221,  505 => 220,  499 => 217,  493 => 216,  490 => 215,  484 => 212,  478 => 211,  475 => 210,  472 => 209,  467 => 208,  453 => 196,  446 => 195,  440 => 192,  434 => 191,  431 => 190,  425 => 187,  419 => 186,  416 => 185,  413 => 184,  408 => 183,  395 => 172,  388 => 171,  382 => 168,  376 => 167,  373 => 166,  367 => 163,  361 => 162,  358 => 161,  355 => 160,  350 => 159,  334 => 146,  328 => 143,  325 => 142,  318 => 141,  312 => 138,  306 => 137,  303 => 136,  297 => 133,  291 => 132,  288 => 131,  285 => 130,  280 => 129,  267 => 118,  260 => 117,  254 => 114,  248 => 113,  245 => 112,  239 => 109,  233 => 108,  230 => 107,  227 => 106,  222 => 105,  209 => 94,  202 => 92,  196 => 89,  190 => 88,  187 => 87,  181 => 84,  175 => 83,  172 => 82,  169 => 81,  165 => 80,  147 => 67,  142 => 64,  135 => 63,  129 => 60,  123 => 59,  120 => 58,  114 => 55,  108 => 54,  105 => 53,  102 => 52,  97 => 51,  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/editar_confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\editar_confirmacion.twig");
    }
}
