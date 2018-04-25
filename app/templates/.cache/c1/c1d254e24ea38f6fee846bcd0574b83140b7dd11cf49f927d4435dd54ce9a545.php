<?php

/* portal/header.twig */
class __TwigTemplate_0f55012a14c3605a148cc3988b720d969161c028cb6e45179227b5cd031bd5c5 extends Twig_Template
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
        echo "
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"portal\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\">H<b>D</b>N</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo " <b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
          <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- <li class=\"dropdown messages-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 mensajes</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <!-- <ul class=\"menu\">

                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todos los mensajes</a></li>
                    </ul>
                </li> -->
                <!-- Notifications: style can be found in dropdown.less -->
                <!-- <li class=\"dropdown notifications-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 notificaciones</li>
                        <li> -->
                            <!-- inner menu: contains the actual data -->
                            <!-- <ul class=\"menu\">

                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">Ver todo</a></li>
                    </ul>
                </li> -->
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- <li class=\"dropdown tasks-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">Tienes 0 tareas</li>
                        <li> -->
                            <!-- inner menu: contains the actual data -->
                            <!-- <ul class=\"menu\">

                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">Ver todas las tareas</a>
                        </li>
                    </ul>
                </li> --> 
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                      ";
        // line 75
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
            // line 76
            echo "                        <img src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                      ";
        } else {
            // line 78
            echo "                        <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"user-image\" alt=\"User Image\">
                      ";
        }
        // line 80
        echo "
                        <span class=\"hidden-xs\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">

                            ";
        // line 87
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
            // line 88
            echo "                              <img src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                            ";
        } else {
            // line 90
            echo "                              <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">
                            ";
        }
        // line 92
        echo "                            <p>
                                ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "email", array(), "array"), "html", null, true);
        echo "
                                <small></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"portal/perfil_usuario\">Perfil</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\"></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\" data-toggle=\"modal\" data-target=\"#resetpass\">Reset Password</a>
                            </div>

                            <div class=\"pull-right\">
                                <a href=\"logout\" class=\"btn btn-default btn-flat\">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "portal/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 93,  134 => 92,  130 => 90,  124 => 88,  122 => 87,  113 => 81,  110 => 80,  106 => 78,  100 => 76,  98 => 75,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/header.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\portal\\header.twig");
    }
}
