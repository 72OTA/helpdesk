<?php

/* administracion/editar_perfil_user.twig */
class __TwigTemplate_6fad78c4f97df98a0c1520be26045f0bf54a4ebc17cde01457167a2caf974b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/editar_perfil_user.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
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
    public function block_appStylos($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
  <h4>
    <i class=\"fa fa-user icon-title\"></i> Perfil Asignado a <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name", array())), "html", null, true);
        echo "</strong>
  </h4>
  <ol class=\"breadcrumb\">
    <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
    <li><a href=\"administracion/usuario\"> Usuarios </a></li>
    <li class=\"active\"> Perfil Asignado a ";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name", array())), "html", null, true);
        echo " </li>
  </ol>
</section>
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-primary\">
        <div class=\"box-body\">
          <div class=\"box-body col-sm-4\"></div>
          <div class=\"box-body col-sm-4\">
            <form id=\"form_user_perfil\" name=\"form_user_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
              <div class=\"panel-footer text-center\">
                <button type=\"button\" id='update_perfil_user' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
              </div>
              <input type='hidden' name='id_user' id='id_user' value='";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), "html", null, true);
        echo "'>
              ";
        // line 28
        $context["id"] = 0;
        // line 29
        echo "              ";
        $context["cont"] = 0;
        // line 30
        echo "              <ul>
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_all_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_all_menu"] ?? null))) {
                // line 32
                echo "
                  ";
                // line 33
                if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                    // line 34
                    echo "                      ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 35
                        echo "                      </ul>
                  </li>
                      ";
                    }
                    // line 38
                    echo "                  <li>
                      <i class='fa ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array()), "html", null, true);
                    echo "'></i>
                          <span>
                          ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "
                          </span>
                      <ul>
                  ";
                }
                // line 45
                echo "                          <li>
                            <div class=\"checkbox\">
                              <label>
                                ";
                // line 48
                $context["flat"] = 0;
                // line 49
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_menu_user"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mu"]) {
                    if ((false != ($context["db_menu_user"] ?? null))) {
                        // line 50
                        echo "                                  ";
                        if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["mu"], "id_menu", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["mu"], "id_submenu", array())))) {
                            // line 51
                            echo "                                    ";
                            $context["flat"] = 1;
                            // line 52
                            echo "                                    <input name=\"";
                            echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                            echo "\" type=\"checkbox\" id=\"";
                            echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                            echo "\" checked='checked'>
                                  ";
                        }
                        // line 54
                        echo "                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                ";
                if ((($context["flat"] ?? null) == 0)) {
                    // line 56
                    echo "                                  <input name=\"";
                    echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                    echo "\" type=\"checkbox\" id=\"";
                    echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                    echo "\">
                                ";
                }
                // line 58
                echo "                                ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "submenu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                echo "
                              </label>
                            </div>
                          </li>

                  ";
                // line 63
                $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array());
                // line 64
                echo "                  ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                // line 65
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"box-footer\">
  </div><!-- /.box footer -->
</section>
";
    }

    // line 77
    public function block_appScript($context, array $blocks = array())
    {
        // line 78
        echo "
    <script src=\"views/app/js/administracion/administracion.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "administracion/editar_perfil_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 78,  195 => 77,  181 => 66,  174 => 65,  171 => 64,  169 => 63,  160 => 58,  152 => 56,  149 => 55,  142 => 54,  134 => 52,  131 => 51,  128 => 50,  122 => 49,  120 => 48,  115 => 45,  108 => 41,  103 => 39,  100 => 38,  95 => 35,  92 => 34,  90 => 33,  87 => 32,  82 => 31,  79 => 30,  76 => 29,  74 => 28,  70 => 27,  53 => 13,  45 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/editar_perfil_user.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\administracion\\editar_perfil_user.twig");
    }
}
