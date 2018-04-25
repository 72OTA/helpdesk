<?php

/* administracion/edit_user.twig */
class __TwigTemplate_761b4da976918418726fe5e7f4ab1368a0b1d8c0227970c2f2076bde49aabd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/edit_user.twig", 1);
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
        <i class=\"fa fa-user\"></i> EDITAR USUARIO
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
        <li><a href=\"administracion/usuario\"> Usuarios </a></li>
        <li class=\"active\"> editar </li>
      </ol>
  </section>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <form id=\"update_user_form\"  action=\"\" method=\"POST\">
            <input type='hidden' name='id_user' id='id_user' value='";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), "html", null, true);
        echo "' />
            <div class=\"box-body col-sm-2\"></div>
            <div class=\"box-body col-sm-4\">
              <div class=\"form-group\">
                <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" value='";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name", array())), "html", null, true);
        echo "'/>
                <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" value='";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "email", array()), "html", null, true);
        echo "' readonly/>
                <input class=\"form-control\" name=\"cargo\"       id=\"cargo\"       type=\"text\"    placeholder=\"cargo\" value='";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "cargo", array()), "html", null, true);
        echo "'/>
                <input class=\"form-control\" name=\"fono\"       id=\"fono\"       type=\"text\"    placeholder=\"Fono\" value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "fono", array()), "html", null, true);
        echo "'/>
              </div>
              <div class=\"form-group\">Perfil Asignado
                <select name='perfil' id='perfil' class='form-control'>
                  <option>--</option>
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 32
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
                    // line 33
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 35
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 37
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                  ";
        if (("DEFINIDO" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
            // line 39
            echo "                    <option value='DEFINIDO' selected='selected'>DEFINIDO</option>
                  ";
        } else {
            // line 41
            echo "                    <option value='DEFINIDO'>DEFINIDO</option>
                  ";
        }
        // line 43
        echo "                </select>
              </div>
              <div class=\"form-group\">Pagina de Inicio
                <select name='pagina_inicio' id='pagina_inicio' class='form-control'>
                  ";
        // line 47
        if (("portal" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "pagina_inicio", array()))) {
            // line 48
            echo "                    <option value='portal' selected='selected'>HOME</option>
                  ";
        } else {
            // line 50
            echo "                    <option value='portal'>HOME</option>
                  ";
        }
        // line 52
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_menu"] ?? null))) {
                // line 53
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "pagina_inicio", array()))) {
                    // line 54
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array())), "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 56
                    echo "                      <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array())), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 58
                echo "
                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </select>
              </div>
              <div class=\"checkbox\">
                <label>
                  ";
        // line 64
        if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "rol", array()))) {
            // line 65
            echo "                    <input name=\"rol\" type=\"checkbox\" id=\"rol\" />
                  ";
        } else {
            // line 67
            echo "                    <input name=\"rol\" type=\"checkbox\" id=\"rol\" checked />
                  ";
        }
        // line 69
        echo "                  Usuario Administrador?

                </label>
              </div>
              <div class=\"panel-footer text-center\">
                <button type=\"button\" id='update_user' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
              </div>
            </div>
            <div class=\"box-body col-sm-4\">
              <div class=\"row\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">Foto</label>
                  <div class=\"col-sm-5\">
                    <input type=\"file\" name=\"foto\" id=\"foto\">
                    <br/>
                    ";
        // line 84
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "foto", array()) == 1)) {
            // line 85
            echo "                      <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name_foto", array()), "html", null, true);
            echo "\" width=\"128\">
                    ";
        } else {
            // line 87
            echo "                      <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                    ";
        }
        // line 89
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"row\">
                  <br/>
                  <label class=\"col-sm-4  control-label\">Rut Asocia Trabajador</label>
                  <div class=\"col-sm-5\">
                    <input class=\"form-control\" name=\"rut_trabajador\"        id=\"rut_trabajador\"        type=\"text\"     placeholder=\"xxxxxxxx s/digito\" value='";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "rut_personal", array()), "html", null, true);
        echo "'/>
                  </div>
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

    // line 108
    public function block_appScript($context, array $blocks = array())
    {
        // line 109
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 109,  238 => 108,  223 => 97,  213 => 89,  209 => 87,  203 => 85,  201 => 84,  184 => 69,  180 => 67,  176 => 65,  174 => 64,  168 => 60,  160 => 58,  152 => 56,  144 => 54,  141 => 53,  135 => 52,  131 => 50,  127 => 48,  125 => 47,  119 => 43,  115 => 41,  111 => 39,  108 => 38,  101 => 37,  93 => 35,  85 => 33,  82 => 32,  77 => 31,  69 => 26,  65 => 25,  61 => 24,  57 => 23,  50 => 19,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/edit_user.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\edit_user.twig");
    }
}
