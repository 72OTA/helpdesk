<?php

/* administracion/usuarios.twig */
class __TwigTemplate_b68468c8bbd94a677a8e99dd19102a404eaa22ccd21836994a1c569ce52120ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/usuarios.twig", 1);
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
        echo "  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> REGISTRO DE USUARIOS
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> agregar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"register_user_form\"  action=\"\" method=\"POST\">
            <div class=\"box-body col-sm-2\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required/>
                <input class=\"form-control\" name=\"cargo\"       id=\"cargo\"       type=\"text\"    placeholder=\"Cargo\" value='PROGRAMADOR' required/>
                <input class=\"form-control\" name=\"fono\"       id=\"fono\"       type=\"text\"    placeholder=\"Fono\" value='+56' required/>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" value='1' required/>
                <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" value='1' required/>
              </div>
              <div class=\"form-group\">Perfil Asignado
                <select name='perfil' id='perfil' class='form-control'>
                <option selected='selected'>--</option>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 35
                echo "                <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                <option value='DEFINIDO'>DEFINIDO</option>
                </select>
              </div>
              <div class=\"form-group\">Pagina de Inicio
                <select name='pagina_inicio' id='pagina_inicio' class='form-control'>
                  <option value='portal'>HOME</option>
                  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_menu"] ?? null))) {
                // line 44
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "pagin_inicio", array()))) {
                    // line 45
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 47
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 49
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                <input name=\"rol\" type=\"checkbox\" id=\"admin\" /> Usuario Administrador?
                </label>
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"register\" class=\"btn btn-default\">Grabar</button>
                <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
              </div>
            </div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <label class=\"col-sm-4  control-label\">Rut Asocia Trabajador</label>
                <div class=\"col-sm-5\">
                  <input class=\"form-control\" name=\"rut_trabajador\"        id=\"rut_trabajador\"        type=\"text\"     placeholder=\"xxxxxxxx s/digito\"/>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 76
    public function block_appScript($context, array $blocks = array())
    {
        // line 77
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/usuarios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 77,  150 => 76,  121 => 50,  114 => 49,  106 => 47,  98 => 45,  95 => 44,  90 => 43,  82 => 37,  70 => 35,  65 => 34,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/usuarios.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\administracion\\usuarios.twig");
    }
}
