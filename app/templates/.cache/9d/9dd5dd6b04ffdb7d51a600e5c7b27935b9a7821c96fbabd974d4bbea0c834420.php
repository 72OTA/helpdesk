<?php

/* despacho/mantenedores_crud_masters.twig */
class __TwigTemplate_52f06e787bfe3a26e7bd64284244fa8a0c0fc7e398bf233ac0ed0dbf5a68a645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/mantenedores_crud_masters.twig", 1);
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
            Despacho
            <small>Mantenedor de Maestros</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Mantenedores</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <!-- Small boxes (Stat box) -->
      <br/>
      <div class=\"row\">
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Estado</legend>
              <div style=\"background-color:#00ee8a;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"despacho/listar_estados\" class=\"small-box-footer\" title=\"Ver Estados\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "despacho/mantenedores_crud_masters.twig";
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
        return new Twig_Source("", "despacho/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\mantenedores_crud_masters.twig");
    }
}
