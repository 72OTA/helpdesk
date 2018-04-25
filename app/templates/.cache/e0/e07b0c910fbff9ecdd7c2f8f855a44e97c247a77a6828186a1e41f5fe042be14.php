<?php

/* overall/layout.twig */
class __TwigTemplate_7c194a13484fa83510deb3ab3488c8314d38096f9497e9c59967f37dcf1aa0fb extends Twig_Template
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
        // line 5
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    ";
        // line 11
        echo "    <link href=\"views/app/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/framework.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/login.css\" rel=\"stylesheet\" />
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

    ";
        // line 19
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 25
        echo "
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 34
        echo "    ";
        $this->displayBlock('appBody', $context, $blocks);
        // line 37
        echo "
    ";
        // line 39
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 40
            echo "      ";
            // line 41
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 43
            echo "      ";
            // line 44
            echo "      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    ";
        }
        // line 46
        echo "    
    <script src=\"views/app/vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    ";
        // line 53
        echo "    ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 56
        echo "

    ";
        // line 59
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 62
        echo "  </body>
</html>
";
    }

    // line 22
    public function block_appHeader($context, array $blocks = array())
    {
        // line 23
        echo "      <!-- :) -->
    ";
    }

    // line 34
    public function block_appBody($context, array $blocks = array())
    {
        // line 35
        echo "      <!-- :) -->
    ";
    }

    // line 53
    public function block_appScript($context, array $blocks = array())
    {
        // line 54
        echo "      <!-- :) -->
    ";
    }

    // line 59
    public function block_appFooter($context, array $blocks = array())
    {
        // line 60
        echo "      <!-- :) -->
    ";
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  134 => 59,  129 => 54,  126 => 53,  121 => 35,  118 => 34,  113 => 23,  110 => 22,  104 => 62,  101 => 59,  97 => 56,  94 => 53,  86 => 46,  82 => 44,  80 => 43,  76 => 41,  74 => 40,  71 => 39,  68 => 37,  65 => 34,  55 => 25,  52 => 22,  46 => 19,  37 => 11,  28 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall/layout.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\overall\\layout.twig");
    }
}
