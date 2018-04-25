<?php

/* portal/portal.twig */
class __TwigTemplate_96f01f46e0e68070ca5a042435b22570b6875959218c42f061bdf7c9618860a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appHeader' => array($this, 'block_appHeader'),
            'appHead' => array($this, 'block_appHead'),
            'appside' => array($this, 'block_appside'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>

        ";
        // line 6
        echo "        ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=\"views/app/template/bootstrap/dist/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"views/app/template/font-awesome/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"views/app/template/Ionicons/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"views/app/template/AdminLTE.min.css\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
        <!-- Alertas -->
        <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script> <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->

        <!-- Google Font -->
        <!-- <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"> -->

        ";
        // line 35
        $this->displayBlock('appStylos', $context, $blocks);
        // line 36
        echo "
        <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\"/>
        ";
        // line 39
        echo "        <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

        ";
        // line 42
        echo "        ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 45
        echo "
    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
        <!--<body class=\"hold-transition skin-blue sidebar-mini\">-->
        <div class=\"wrapper\">
            <div style=\"display: none;\" id=\"cargador\" align=\"center\">
                <br>
                <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

                <img src=\"views/app/images/cargando.gif\" align=\"middle\" alt=\"cargador\">
                &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>

                <br>
                <hr style=\"color:#003\" width=\"30%\">
                <br>
            </div>
            ";
        // line 61
        $this->displayBlock('appHead', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->displayBlock('appside', $context, $blocks);
        // line 68
        echo "
            ";
        // line 70
        echo "            <div class=\"content-wrapper\">
                ";
        // line 71
        $this->displayBlock('appBody', $context, $blocks);
        // line 133
        echo "            </div>

            ";
        // line 136
        echo "            ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 139
        echo "
            ";
        // line 140
        $this->loadTemplate("portal/resetpass", "portal/portal.twig", 140)->display($context);
        // line 141
        echo "        </div>
        ";
        // line 143
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 144
            echo "            ";
            // line 145
            echo "            <script src=\"views/app/js/jdev.min.js\"></script>
        ";
        } else {
            // line 147
            echo "            ";
            // line 148
            echo "            <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
        ";
        }
        // line 150
        echo "
        <!-- jQuery UI 1.11.4 -->
        <script src=\"views/app/template/jquery-ui/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src=\"views/app/template/bootstrap/dist/js/bootstrap.min.js\"></script>
        <!-- Slimscroll -->
        <script src=\"views/app/template/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
        <!-- FastClick -->
        <script src=\"views/app/template/fastclick/lib/fastclick.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"views/app/template/adminlte.min.js\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"views/app/template/demo.js\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

        <!-- Alertas -->
        <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

        <script src=\"views/app/js/portal/portal.js\"></script>
        <script>
            var width = \$(document).width();
            if (width > 770) {
                \$('body').addClass('sidebar-collapse');
            }
            \$(window).resize(function () {
                if (width <= 770) {
                    \$('body').removeClass('sidebar-collapse');
                }
            })
        </script>

        ";
        // line 187
        echo "        ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 188
        echo "
    </body>
</html>";
    }

    // line 35
    public function block_appStylos($context, array $blocks = array())
    {
    }

    // line 42
    public function block_appHeader($context, array $blocks = array())
    {
        // line 43
        echo "            <!-- :) -->
        ";
    }

    // line 61
    public function block_appHead($context, array $blocks = array())
    {
        // line 62
        echo "                ";
        $this->loadTemplate("portal/header", "portal/portal.twig", 62)->display($context);
        // line 63
        echo "            ";
    }

    // line 65
    public function block_appside($context, array $blocks = array())
    {
        // line 66
        echo "                ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 66)->display($context);
        // line 67
        echo "            ";
    }

    // line 71
    public function block_appBody($context, array $blocks = array())
    {
        // line 72
        echo "                    <section class=\"content-header\">
                        <h1>
                            ESCRITORIO
                            <small>Control panel</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <a href=\"portal\">
                                    <i class=\"fa fa-home\"></i>
                                    Home
                                </a>
                            </li>
                            <li class=\"active\">Dashboard</li>
                        </ol>

                    </section>
                    <section class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-xs-12\">
                                <div class=\"panel panel-info\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">
                                            <i class=\"icon fa fa-user\"></i>
                                            Bienvenido
                                            <strong>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</strong>.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Cumpleaños del Mes</h3>
                                    </div>
                                    <div class=\"box-body\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                            </thead>
                                            <tbody>
                                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getCumpleañosUsuarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["getCumpleañosUsuarios"] ?? null))) {
                // line 115
                echo "                                                    <tr>
                                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, sprintf("%02d", twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "dia", array())), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_nacimiento", array()), "M"), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 119
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_nacimiento", array()), "d-m") == twig_date_format_filter($this->env, "now", "d-m"))) {
                    // line 120
                    echo "                                                                <span class=\"label label-success\">Feliz cumpleaños!!!</span>
                                                            ";
                }
                // line 122
                echo "                                                        </td>
                                                    </tr>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                ";
    }

    // line 136
    public function block_appFooter($context, array $blocks = array())
    {
        // line 137
        echo "                ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 137)->display($context);
        // line 138
        echo "            ";
    }

    // line 187
    public function block_appScript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "portal/portal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 187,  324 => 138,  321 => 137,  318 => 136,  307 => 125,  298 => 122,  294 => 120,  292 => 119,  285 => 117,  281 => 116,  278 => 115,  273 => 114,  252 => 96,  226 => 72,  223 => 71,  219 => 67,  216 => 66,  213 => 65,  209 => 63,  206 => 62,  203 => 61,  198 => 43,  195 => 42,  190 => 35,  184 => 188,  181 => 187,  143 => 150,  139 => 148,  137 => 147,  133 => 145,  131 => 144,  128 => 143,  125 => 141,  123 => 140,  120 => 139,  117 => 136,  113 => 133,  111 => 71,  108 => 70,  105 => 68,  103 => 65,  100 => 64,  98 => 61,  80 => 45,  77 => 42,  71 => 39,  67 => 36,  65 => 35,  32 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>

        {# Formato #}
        {{ base_assets()|raw }}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=\"views/app/template/bootstrap/dist/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"views/app/template/font-awesome/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"views/app/template/Ionicons/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"views/app/template/AdminLTE.min.css\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
        <!-- Alertas -->
        <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script> <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script> <![endif]-->

        <!-- Google Font -->
        <!-- <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"> -->

        {% block appStylos %}{% endblock %}

        <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\"/>
        {# Título #}
        <title>{{ config.site.name }}</title>

        {# Extras en el header #}
        {% block appHeader %}
            <!-- :) -->
        {% endblock %}

    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
        <!--<body class=\"hold-transition skin-blue sidebar-mini\">-->
        <div class=\"wrapper\">
            <div style=\"display: none;\" id=\"cargador\" align=\"center\">
                <br>
                <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

                <img src=\"views/app/images/cargando.gif\" align=\"middle\" alt=\"cargador\">
                &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>

                <br>
                <hr style=\"color:#003\" width=\"30%\">
                <br>
            </div>
            {% block appHead %}
                {% include 'portal/header' %}
            {% endblock %}

            {% block appside %}
                {% include 'portal/menu' %}
            {% endblock %}

            {# Contenido real #}
            <div class=\"content-wrapper\">
                {% block appBody %}
                    <section class=\"content-header\">
                        <h1>
                            ESCRITORIO
                            <small>Control panel</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <a href=\"portal\">
                                    <i class=\"fa fa-home\"></i>
                                    Home
                                </a>
                            </li>
                            <li class=\"active\">Dashboard</li>
                        </ol>

                    </section>
                    <section class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-xs-12\">
                                <div class=\"panel panel-info\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">
                                            <i class=\"icon fa fa-user\"></i>
                                            Bienvenido
                                            <strong>{{ owner_user['name'] }}</strong>.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Cumpleaños del Mes</h3>
                                    </div>
                                    <div class=\"box-body\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                            </thead>
                                            <tbody>
                                                {% for d in getCumpleañosUsuarios if false != getCumpleañosUsuarios %}
                                                    <tr>
                                                        <td>{{ d.name|raw|title }}</td>
                                                        <td>{{ \"%02d\"|format(d.dia) }}-{{ d.fecha_nacimiento|date('M') }}</td>
                                                        <td>
                                                            {% if d.fecha_nacimiento|date('d-m') == 'now'|date('d-m') %}
                                                                <span class=\"label label-success\">Feliz cumpleaños!!!</span>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                {% endblock %}
            </div>

            {# Footer #}
            {% block appFooter %}
                {% include 'portal/footer' %}
            {% endblock %}

            {% include 'portal/resetpass' %}
        </div>
        {# Carga de jQuery #}
        {% if config.framework.debug %}
            {# jQuery para ver errores de ajax vía consola, no eliminar #}
            <script src=\"views/app/js/jdev.min.js\"></script>
        {% else %}
            {# jQuery para su plantilla, este puede ser modificado a voluntad #}
            <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
        {% endif %}

        <!-- jQuery UI 1.11.4 -->
        <script src=\"views/app/template/jquery-ui/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src=\"views/app/template/bootstrap/dist/js/bootstrap.min.js\"></script>
        <!-- Slimscroll -->
        <script src=\"views/app/template/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
        <!-- FastClick -->
        <script src=\"views/app/template/fastclick/lib/fastclick.js\"></script>
        <!-- AdminLTE App -->
        <script src=\"views/app/template/adminlte.min.js\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"views/app/template/demo.js\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

        <!-- Alertas -->
        <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

        <script src=\"views/app/js/portal/portal.js\"></script>
        <script>
            var width = \$(document).width();
            if (width > 770) {
                \$('body').addClass('sidebar-collapse');
            }
            \$(window).resize(function () {
                if (width <= 770) {
                    \$('body').removeClass('sidebar-collapse');
                }
            })
        </script>

        {# Scripts globales #}
        {% block appScript %}{% endblock %}

    </body>
</html>", "portal/portal.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\portal\\portal.twig");
    }
}
