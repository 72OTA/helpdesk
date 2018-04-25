<?php

/* overall/layout_visor.twig */
class __TwigTemplate_357b937495788bf706bf1f2dd74ef03722d3fdba335277626dc674b8b3050cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
            'appFooter' => array($this, 'block_appFooter'),
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
        echo "    ";
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

    ";
        // line 30
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 33
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 36
        echo "
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 45
        echo "    ";
        $this->displayBlock('appBody', $context, $blocks);
        // line 48
        echo "    
    ";
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 51
            echo "      ";
            // line 52
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 54
            echo "      ";
            // line 55
            echo "      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    ";
        }
        // line 57
        echo "    <!-- jQuery UI 1.11.4 -->
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


    ";
        // line 78
        echo "    ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 81
        echo "

    ";
        // line 84
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 87
        echo "  </body>
</html>
";
    }

    // line 33
    public function block_appHeader($context, array $blocks = array())
    {
        // line 34
        echo "      <!-- :) -->
    ";
    }

    // line 45
    public function block_appBody($context, array $blocks = array())
    {
        // line 46
        echo "      <!-- :) -->
    ";
    }

    // line 78
    public function block_appScript($context, array $blocks = array())
    {
        // line 79
        echo "      <!-- :) -->
    ";
    }

    // line 84
    public function block_appFooter($context, array $blocks = array())
    {
        // line 85
        echo "      <!-- :) -->
    ";
    }

    public function getTemplateName()
    {
        return "overall/layout_visor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 85,  158 => 84,  153 => 79,  150 => 78,  145 => 46,  142 => 45,  137 => 34,  134 => 33,  128 => 87,  125 => 84,  121 => 81,  118 => 78,  96 => 57,  92 => 55,  90 => 54,  86 => 52,  84 => 51,  81 => 50,  78 => 48,  75 => 45,  65 => 36,  62 => 33,  56 => 30,  29 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall/layout_visor.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\overall\\layout_visor.twig");
    }
}
