<?php

/* administracion/perfiles.twig */
class __TwigTemplate_efc6a276ba32cd331e5fc42106dd2802cf1e4a40d401affd2e7c2b5fef20c1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/perfiles.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
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
      <i class=\"fa fa-user\"></i> PERFILES DE PLANTILLA
    </h4>
    <ol class=\"breadcrumb\">
      <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
      <li class=\"active\"> PERFILES DE PLANTILLA </li>
    </ol>
</section>

<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-primary\">
        <div class=\"box-body\">
          <form id=\"form_select_perfil\" name=\"form_select_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
              <div class=\"panel-footer\">
                <label>
                  <select name='select_perfil' onchange=mostar_datos_perfil();>
                    <option>--</option>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 25
                echo "                    <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                  </select>
                </label>
                <label>
                    <input type='button' name='Submit' value='Consultar' id='submit' class=\"btn btn-sm btn-success\" onclick=\"mostar_datos_perfil(); return false\"/>
                </label>
                <label>
                    <input type='button' name='nuevoperfil' value='Nuevo perfil' id='nuevoperfil' class=\"btn btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#modal_new_perfil\">
                </label>
                <label>
                    <input type='button' name='deleteperfil' value='Elimina perfil' id='deleteperfil' class=\"btn btn-sm btn-success\">
                </label>
              </div>
            </div>
          </form>
          <div class=\"box-body col-sm-4\"></div>
          <div class=\"box-body col-sm-4\">
            <div id=\"mostar_datos_perfil\"></div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.box footer -->
</section>
";
        // line 50
        $this->loadTemplate("administracion/nuevo_perfil", "administracion/perfiles.twig", 50)->display($context);
    }

    // line 52
    public function block_appScript($context, array $blocks = array())
    {
        // line 53
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/perfiles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  101 => 52,  97 => 50,  72 => 27,  60 => 25,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/perfiles.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\perfiles.twig");
    }
}
