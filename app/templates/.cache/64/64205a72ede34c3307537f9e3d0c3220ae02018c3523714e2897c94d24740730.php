<?php

/* portal/menu.twig */
class __TwigTemplate_1763ce0e3a7648f56f502e22dc2a4a14a382e7fd4592c070651b354bd05153a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          ";
        // line 7
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
            // line 8
            echo "            <img src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
          ";
        } else {
            // line 10
            echo "            <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">
          ";
        }
        // line 12
        echo "
        </div>
        <div class=\"pull-left info\">
          <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array")), "html", null, true);
        echo "</p>
          <a href=\"portal\"><i class=\"fa fa-circle text-success\"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\" >
      <li class=\"header\">MENÚ PRINCIPAL</li>
        ";
        // line 33
        if ((($context["menu_op"] ?? null) == 0)) {
            // line 34
            echo "            <li class=\"active treeview\">
        ";
        } else {
            // line 36
            echo "            <li class=\"treeview\">
        ";
        }
        // line 38
        echo "            <a href=\"portal\"><i class=\"fa fa-home\"></i><span>HOME</span>
            </a>
        </li>
      </ul>
      <ul class=\"sidebar-menu\" data-widget=\"tree\">


          ";
        // line 45
        $context["id"] = 0;
        // line 46
        echo "          ";
        $context["cont"] = 0;
        // line 47
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["menu_user"] ?? null))) {
                // line 48
                echo "
              ";
                // line 49
                if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                    // line 50
                    echo "                  ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 51
                        echo "                  </ul>
              </li>
                  ";
                    }
                    // line 54
                    echo "              ";
                    if ((($context["menu_op"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                        // line 55
                        echo "              <li class=\"active treeview\">
              ";
                    } else {
                        // line 57
                        echo "              <li class=\"treeview\">
              ";
                    }
                    // line 59
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "\">
                      <i class='fa ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array()), "html", null, true);
                    echo "'></i>
                      <span>

                      ";
                    // line 63
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "

                      </span><i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                  <ul class=\"treeview-menu\">
              ";
                }
                // line 69
                echo "
                      <li>
                          <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-circle-o\"></i>";
                echo twig_escape_filter($this->env, twig_convert_encoding(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "submenu", array())), "UTF-8", "ISO-8859-1"), "html", null, true);
                echo "</a>
                      </li>

              ";
                // line 74
                $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array());
                // line 75
                echo "              ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                // line 76
                echo "          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
";
    }

    public function getTemplateName()
    {
        return "portal/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 77,  156 => 76,  153 => 75,  151 => 74,  143 => 71,  139 => 69,  130 => 63,  124 => 60,  119 => 59,  115 => 57,  111 => 55,  108 => 54,  103 => 51,  100 => 50,  98 => 49,  95 => 48,  89 => 47,  86 => 46,  84 => 45,  75 => 38,  71 => 36,  67 => 34,  65 => 33,  44 => 15,  39 => 12,  35 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          {% if owner_user['foto'] == 1 %}
            <img src=\"views/app/images/avatares/{{ owner_user['name_foto'] }}\" class=\"img-circle\" alt=\"User Image\">
          {% else %}
            <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">
          {% endif %}

        </div>
        <div class=\"pull-left info\">
          <p>{{ owner_user['name']|title }}</p>
          <a href=\"portal\"><i class=\"fa fa-circle text-success\"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\" >
      <li class=\"header\">MENÚ PRINCIPAL</li>
        {% if menu_op == 0 %}
            <li class=\"active treeview\">
        {% else %}
            <li class=\"treeview\">
        {% endif %}
            <a href=\"portal\"><i class=\"fa fa-home\"></i><span>HOME</span>
            </a>
        </li>
      </ul>
      <ul class=\"sidebar-menu\" data-widget=\"tree\">


          {% set id = 0 %}
          {% set cont = 0 %}
          {% for m in menu_user if false != menu_user %}

              {% if id != m.id_menu %}
                  {% if cont >= 1 %}
                  </ul>
              </li>
                  {% endif %}
              {% if menu_op == m.id_menu %}
              <li class=\"active treeview\">
              {% else %}
              <li class=\"treeview\">
              {% endif %}
                  <a href=\"{{ m.url }}\">
                      <i class='fa {{ m.glyphicon }}'></i>
                      <span>

                      {{ m.menu|raw|convert_encoding('UTF-8', 'ISO-8859-1')|upper }}

                      </span><i class=\"fa fa-angle-left pull-right\"></i>
                  </a>
                  <ul class=\"treeview-menu\">
              {% endif %}

                      <li>
                          <a href=\"{{ m.url }}\"><i class=\"fa fa-circle-o\"></i>{{ m.submenu|capitalize|raw|convert_encoding('UTF-8', 'ISO-8859-1') }}</a>
                      </li>

              {% set id=m.id_menu %}
              {% set cont =  cont + 1 %}
          {% endfor %}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
", "portal/menu.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\portal\\menu.twig");
    }
}
