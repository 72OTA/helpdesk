<?php

/* casilleros/editar_casillero.twig */
class __TwigTemplate_34dfbdd6b0e78c5251bfac735ae6bf11455544ee6e2b96cc1d7f8bdb2cd02cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "casilleros/editar_casillero.twig", 1);
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
            <small>Casillero A Editar</small>
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
            <li class=\"active\">Editar Casillero</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <form id=\"form_editar_casillero\" name=\"form_editar_casillero\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Editar Casillero</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"col-md-6\">
                                <label>Numero de Orden:</label><input type=\"number\" name=\"nOrden\" id=\"nOrden\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "n_orden", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>RUT:</label><input type=\"text\" name=\"rut\" id=\"rut\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "rut", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Comuna:</label>
                                <select name=\"comuna\" id=\"comuna\" class=\"form-control\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 40
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()))) {
                // line 41
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 43
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 45
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Actividad:</label>
                                <select name=\"actividad\" id=\"actividad\" class=\"form-control\">
                                    <option value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "actividad", array()), "html", null, true);
        echo "\" selected=\"selected\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "actividad", array()), "html", null, true);
        echo "</option>
                                    <option value=\"Altas\">Altas</option>
                                    <option value=\"SSTT\">SSTT</option>
                                    <option value=\"Pet Varias\">Pet Varias</option>
                                    <option value=\"Traslados\">Traslados</option>
                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Acción:</label>
                                <select name=\"accion\" id=\"accion\" class=\"form-control\">
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 62
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "accion", array()) == $context["c"])) {
                // line 63
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "accion", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "accion", array()), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 65
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["c"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["c"], "html", null, true);
                echo "</option>
                                        ";
            }
            // line 67
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </select>
                                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "id", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Casillero:</label>
                                <input type=\"text\" name=\"casillero\" id=\"casillero\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "casillero", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12\">
                                <label>Observación:</label>
                                <textarea name=\"observacion\" id=\"observacion\" cols=\"30\" rows=\"3\" class=\"form-control\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["casilleros"] ?? null), "observacion", array()), "html", null, true);
        echo "</textarea>
                            </div>
                            <br>
                            <div class=\"col-md-12 text-center\">
                                <br>
                                <a data-toggle='tooltip' data-placement='top' name=\"modificarCasillero\" id=\"modificarCasillero\" class='btn btn-success btn-lg'>Modificar Casillero
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
";
    }

    // line 93
    public function block_appScript($context, array $blocks = array())
    {
        // line 94
        echo "    <script src=\"views/app/js/casilleros/casilleros.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "casilleros/editar_casillero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 94,  193 => 93,  173 => 77,  166 => 73,  159 => 69,  156 => 68,  150 => 67,  142 => 65,  134 => 63,  131 => 62,  127 => 61,  112 => 51,  105 => 46,  99 => 45,  91 => 43,  83 => 41,  80 => 40,  76 => 39,  68 => 34,  62 => 31,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "casilleros/editar_casillero.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\casilleros\\editar_casillero.twig");
    }
}
