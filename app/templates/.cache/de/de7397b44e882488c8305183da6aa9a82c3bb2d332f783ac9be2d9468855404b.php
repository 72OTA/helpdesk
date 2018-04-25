<?php

/* error/error_portal.twig */
class __TwigTemplate_c1734f16c771ff553aa33a423a2958368a4e29f3fb44cd50aa78d80123da7dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "error/error_portal.twig", 1);
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
            ERROR 404
            <small>El controlador solicitado no ha sido encontrado.</small>
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
        return "error/error_portal.twig";
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
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            ERROR 404
            <small>El controlador solicitado no ha sido encontrado.</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
    </section>
    <!-- /.content -->
{% endblock %}", "error/error_portal.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\error\\error_portal.twig");
    }
}
