<?php

/* builderapp/constructor.twig */
class __TwigTemplate_44742a60c5a737cc96cf1d03237d60755d1a4a704bdb46d1293493983352c383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "builderapp/constructor.twig", 1);
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
            Builder APP
            <small>Constructor</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ingrese datos necesarios para construir nueva app de Registro</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-lg-4\">
                            Nombre de APP: <input class=\"form-control\" type=\"text\" name=\"appname\" id=\"appname\" placeholder=\"Registra bitacora casilleros \">
                        </div>
                        <div class=\"col-lg-4\">
                            Menu Asignado:
                            <select class=\"form-control\" name=\"menu_ppal\" id=\"menu_ppal\">
                                <option value=\"--\">--</option>
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_ppal"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["menu_ppal"] ?? null))) {
                // line 28
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_menu", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                echo "</option>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </select>
                        </div>
                        <div class=\"col-lg-4\">
                            Agregar despues de:
                            <select class=\"form-control\" name=\"sub_menu\" id=\"sub_menu\">
                                <option value=\"--\">--</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ingrese detalle de Registro</h3>
                        <small>
                            <a class=\"btn btn-primary btn-social pull-right\" href=\"builderapp/constructor\" title=\"Agregar\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-plus\"></i> Agregar Campo
                            </a>
                        </small>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <table table id=\"dataTables1\" class=\"table table-bordered\">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nombre</th>
                                            <th>Tipo</th>
                                            <th>largo</th>
                                            <th>Predeterminado</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detalle_tmp"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["detalle_tmp"] ?? null))) {
                // line 65
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "tipo", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "largo", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "predeterminado", array()), "html", null, true);
                echo "</td>
                                            <td class='center' width='100'>
                                                <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"confirmacion/editar_resultado/";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_resultado", array()), "html", null, true);
                echo "\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-danger btn-sm' href=\"confirmacion/editar_resultado/";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_resultado", array()), "html", null, true);
                echo "\">
                                                    <i class='glyphicon glyphicon-remove-sign'></i>
                                                </a>
                                            </td>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        return "builderapp/constructor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 79,  143 => 74,  137 => 71,  132 => 69,  128 => 68,  124 => 67,  120 => 66,  115 => 65,  110 => 64,  74 => 30,  62 => 28,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "builderapp/constructor.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\builderapp\\constructor.twig");
    }
}
