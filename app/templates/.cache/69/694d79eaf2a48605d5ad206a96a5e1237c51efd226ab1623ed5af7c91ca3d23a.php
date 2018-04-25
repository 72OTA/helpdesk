<?php

/* builderapp/principal.twig */
class __TwigTemplate_2477d70d2ec004d03df812f5de8f65649c00993a57ef1505ae05b57cd9583a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "builderapp/principal.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Builder APP
            <small>Control panel</small>
            <a class=\"btn btn-primary btn-social pull-right\" href=\"builderapp/constructor\" title=\"Agregar\" data-toggle=\"tooltip\">
                <i class=\"fa fa-plus\"></i> Agregar Nueva APP
            </a>
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "builderapp/principal.twig";
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
        return new Twig_Source("", "builderapp/principal.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\builderapp\\principal.twig");
    }
}
