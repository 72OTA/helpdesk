<?php

/* portal/footer.twig */
class __TwigTemplate_70f84f1d574675d39ef5019e8cebc09936497ba5987b3757a37bc5e395b1b686 extends Twig_Template
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
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\">HELPDESK TEAM DEVELOPER</a>.</strong>
</footer>
";
    }

    public function getTemplateName()
    {
        return "portal/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; {{ \"now\"|date(\"Y\") }} <a href=\"#\">HELPDESK TEAM DEVELOPER</a>.</strong>
</footer>
", "portal/footer.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\portal\\footer.twig");
    }
}
