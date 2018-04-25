<?php

/* portal/resetpass.twig */
class __TwigTemplate_259a80707b6a8589d9019428d217122ac5303208f3192dfd3ea3dc10079b6bba extends Twig_Template
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
        echo "<div id=\"resetpass\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Recuperar Contraseña</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"resetpass_form\" class=\"form-signin\" method=\"POST\">
            <input type=\"hidden\" name=\"id_user\" class=\"form-control\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">
            <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Ingrese Password nueva\" autofocus>
            <input type=\"password\" name=\"pass_repeat\" class=\"form-control\" placeholder=\"Re-ingrese Password nueva\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"reset_pass\" class=\"btn btn-success\">Modificar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "portal/resetpass.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/resetpass.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\portal\\resetpass.twig");
    }
}
