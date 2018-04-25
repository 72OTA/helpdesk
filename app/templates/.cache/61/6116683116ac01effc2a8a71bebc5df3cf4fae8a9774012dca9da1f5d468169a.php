<?php

/* administracion/nuevo_perfil.twig */
class __TwigTemplate_700ace2b399e50765cf749f11284f5dcbadc0ab234cd99e2590bc8fa5661b1ba extends Twig_Template
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
        echo "<div id=\"modal_new_perfil\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Recuperar Contraseña</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"new_perfil_form\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\" name=\"new_perfil\" class=\"form-control\" placeholder=\"Ingrese Nombre nuevo perfil\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btn_new_perfil\" class=\"btn btn-success\">Registrar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "administracion/nuevo_perfil.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/nuevo_perfil.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\nuevo_perfil.twig");
    }
}
