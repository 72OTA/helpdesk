<?php

/* redes/agregar.twig */
class __TwigTemplate_3a9b8660a6353355cdc34d7d91342d009d9096edf9dd2b8a8da0c421022faeaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "redes/agregar.twig", 1);
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
            Redes
            <small>OT A Registrar</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
            <li>
                <a href=\"redes/listar_redes\">Listado de OT Redes</a>
            </li>
            <li class=\"active\">Agregar OT</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <form id=\"form_redes\" name=\"form_redes\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Agregar OT redes</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"col-md-6\">
                                <label>Rut del Cliente:</label><input type=\"text\" name=\"rutC\" id=\"rutC\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Numero de Orden:</label><input type=\"number\" name=\"nOrden\" id=\"nOrden\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Nodo Cuadrante:</label><input type=\"text\" name=\"nodo\" id=\"nodo\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>ID tecnico Operaciones:</label><input type=\"text\" name=\"idTec\" id=\"idTec\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>ID tecnico Redes:</label><input type=\"text\" name=\"idRed\" id=\"idRed\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Nombre Supervisor:</label><input type=\"text\" name=\"nameSup\" id=\"nameSup\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-6\">
                                <label>Comuna:</label>
                                <select name=\"comuna\" id=\"comuna\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 53
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descripcion", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Corresponde a redes:</label>
                                <select name=\"corresponde\" id=\"corresponde\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    <option value=\"1\">SI</option>
                                    <option value=\"0\">NO</option>
                                </select>
                            </div>
                            <div class=\"col-md-6\">
                                <label>Estatus:</label>
                                <select name=\"estatus\" id=\"estatus\" class=\"form-control\">
                                    <option value=\"--\" selected=\"selected\">--</option>
                                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estatus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 70
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo "\">ORDEN EN
                                            ";
            // line 71
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </select>
                            </div>
                            <br>
                            <div class=\"col-md-12\">
                                <label>Observación:</label>
                                <textarea name=\"observacion\" id=\"observacion\" cols=\"30\" rows=\"3\" class=\"form-control\"></textarea>
                            </div>
                            <br>
                            <div class=\"col-md-12 text-center\">
                                <br>
                                <a data-toggle='tooltip' data-placement='top' name=\"agregarOT\" id=\"agregarOT\" class='btn btn-success btn-lg'>Agregar OT redes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    ";
    }

    // line 92
    public function block_appScript($context, array $blocks = array())
    {
        // line 93
        echo "        <script src=\"views/app/js/redes/redes.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "redes/agregar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 93,  153 => 92,  131 => 73,  123 => 71,  118 => 70,  114 => 69,  98 => 55,  87 => 53,  83 => 52,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "redes/agregar.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\redes\\agregar.twig");
    }
}
