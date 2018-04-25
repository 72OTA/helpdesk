<?php

/* administracion/reset_pass_user.twig */
class __TwigTemplate_607aec53748eb893fa017f35d076ec727b6e40986eb5a16ba480eb278ba40dcf extends Twig_Template
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
        echo "<div id=\"modal_reset_pass_user\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Cambiar Contraseña</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"reset_pass_user_form\" class=\"form-signin\" method=\"POST\">
            <input type=\"hidden\" id=\"id_user\" name=\"id_user\" class=\"form-control\" value=\"\">
            <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Ingrese Password nueva\" autofocus>
            <input type=\"password\" name=\"pass_repeat\" class=\"form-control\" placeholder=\"Re-ingrese Password nueva\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btn_reset_pass_user\" class=\"btn btn-success\">Modificar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "administracion/reset_pass_user.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/reset_pass_user.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\reset_pass_user.twig");
    }
}
