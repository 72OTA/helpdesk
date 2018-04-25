<?php

/* portal/perfil_usuario.twig */
class __TwigTemplate_4a34a46181633ea64253889f42b2d62e4c1ada9636fc5954d80821e10d057bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "portal/perfil_usuario.twig", 1);
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
        echo "<section class=\"content-header\">
  <h4>
    <i class=\"fa fa-user icon-title\"></i> Perfil de Usuario
  </h4>
  <ol class=\"breadcrumb\">
    <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
    <li class=\"active\"> Perfil de Usuario </li>
  </ol>
</section>
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-primary\">
        <form role=\"form\" class=\"form-horizontal\" method=\"POST\" enctype=\"multipart/form-data\">
          <div class=\"box-body\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">
                ";
        // line 20
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
            // line 21
            echo "                  <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
            echo "\" width=\"128\">
                ";
        } else {
            // line 23
            echo "                  <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                ";
        }
        // line 25
        echo "              </label>
              <label style=\"font-size:25px;margin-top:10px;\" class=\"col-sm-8\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</label>
            </div>
            <hr>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Email</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "email", array(), "array"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Cargo</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "cargo", array(), "array"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Telefono</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "fono", array(), "array"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Rol de acceso</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 47
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rol", array(), "array")) ? ("Admin") : ("Usuario"));
        echo "</label>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Perfil Asignado</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "perfil", array(), "array"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">Status</label>
              <label style=\"text-align:left\" class=\"col-sm-8 control-label\">: ";
        // line 57
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "estado", array(), "array")) ? ("Activo") : ("Desactivo"));
        echo "</label>
            </div>
          </div><!-- /.box body -->

          <div class=\"box-footer\">
          </div><!-- /.box footer -->
        </form>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "portal/perfil_usuario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 57,  106 => 52,  98 => 47,  90 => 42,  82 => 37,  74 => 32,  65 => 26,  62 => 25,  58 => 23,  52 => 21,  50 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/perfil_usuario.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\portal\\perfil_usuario.twig");
    }
}
