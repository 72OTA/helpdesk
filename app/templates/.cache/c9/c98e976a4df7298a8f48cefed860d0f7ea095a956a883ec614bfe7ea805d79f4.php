<?php

/* casilleros/chess.twig */
class __TwigTemplate_de3671d0b9169b064bafeb64a3e7d397f2e3e54c89a715e62e762934ab6c901f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "casilleros/chess.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
        echo "    <iframe src=\"https://chess24.com/play/embed?ref=felipeandresandradevalenzuela\" width=\"1000\" height=\"740\" frameborder=\"0\" style=\"padding: 0;margin:0\"></iframe>

";
    }

    public function getTemplateName()
    {
        return "casilleros/chess.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "casilleros/chess.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\casilleros\\chess.twig");
    }
}
