<?php

/* administracion/administracion.twig */
class __TwigTemplate_874b44b9831974730efd2e98a05fd2649c7232efa7ce783f646db80a85d45200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/administracion.twig", 1);
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
        <i class=\"fa fa-user\"></i> ADMINISTRACION
      </h4>
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
        <li class=\"active\">Dashboard</li>
      </ol>
  </section>
  <section class=\"content\">
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
          <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, ($context["q_users"] ?? null), "html", null, true);
        echo "</h3>
            <p>Usuarios</p>
          </div>
          <div class=\"icon\">
            <i class=\"fa fa-user\"></i>
          </div>
            <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Usuarios\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
        </div>
      </div><!-- ./col -->
      <div class=\"col-lg-3\">
        <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
          <div class=\"inner\">
            <h3>";
        // line 30
        echo twig_escape_filter($this->env, ($context["q_perfiles"] ?? null), "html", null, true);
        echo "</h3>
            <p>Perfiles</p>
          </div>
          <div class=\"icon\">
            <i class=\"fa fa-pencil-square-o\"></i>
          </div>
            <a href=\"administracion/perfiles\" class=\"small-box-footer\" title=\"Ver Perfiles\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
        </div>
      </div><!-- ./col -->
      <div class=\"col-lg-3\">
        <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
          <div class=\"inner\">
            <h3>Agregar</h3>
            <p>Nuevo Usuario</p>
          </div>
          <div class=\"icon\">
            <i class=\"fa fa-plus\"></i>
          </div>
            <a href=\"administracion/registro_user\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
        </div>
      </div><!-- ./col -->
      <div class=\"col-lg-3\">
        <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
          <div class=\"inner\">
            <h3>";
        // line 54
        echo twig_escape_filter($this->env, ($context["q_users_online"] ?? null), "html", null, true);
        echo "</h3>
            <p>Usuario On-line</p>
          </div>
          <div class=\"icon\">
            <i class=\"fa fa-eye\"></i>
          </div>
          <a href=\"#\" class=\"small-box-footer\" title=\"\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
        </div>
      </div><!-- ./col -->
    </div>
    <div class=\"row\">
      <div class=\"col-lg-5\">
        <p><strong>Últimos Usuarios Registrados</strong></p>
        <table class=\"table table-bordered\">
          <thead>
            <th>No</th>
            <th>Nombre</th>
            <th>E-Mail</th>
          </thead>
          <tbody>
            ";
        // line 74
        $context["No"] = 1;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["last_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["last_user"] ?? null))) {
                // line 76
                echo "              <tr>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
              </tr>
              ";
                // line 81
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 82
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "          </tbody>
        </table>
      </div>
      <div class=\"col-lg-6\">
        <p><strong>Usuarios On-line</strong></p>
        <table class=\"table table-bordered\">
          <thead>
            <th>No</th>
            <th>Nombre</th>
            <th>E-Mail</th>
            <th>perfil</th>
          </thead>
          <tbody>
            ";
        // line 96
        $context["No"] = 1;
        // line 97
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_user_online"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_user_online"] ?? null))) {
                // line 98
                echo "              <tr>
                <td>";
                // line 99
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
              </tr>
              ";
                // line 104
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 105
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          </tbody>
        </table>
      </div>
    </row>
  </section>
";
    }

    // line 112
    public function block_appScript($context, array $blocks = array())
    {
        // line 113
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/administracion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 113,  208 => 112,  199 => 106,  192 => 105,  190 => 104,  185 => 102,  181 => 101,  177 => 100,  173 => 99,  170 => 98,  164 => 97,  162 => 96,  147 => 83,  140 => 82,  138 => 81,  133 => 79,  129 => 78,  125 => 77,  122 => 76,  116 => 75,  114 => 74,  91 => 54,  64 => 30,  49 => 18,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/administracion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\administracion.twig");
    }
}
