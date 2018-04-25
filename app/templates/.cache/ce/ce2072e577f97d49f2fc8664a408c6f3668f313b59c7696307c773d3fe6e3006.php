<?php

/* rrhh/mantenedores_crud_masters.twig */
class __TwigTemplate_d90d3934783ff0bfb0f3af3000f9d82e5d634cf81002eebb4c6badf4bcca05d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/mantenedores_crud_masters.twig", 1);
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
            RRHH
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
            <legend>Trabajadores</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Agregar</h3>
                  <p></p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"rrhh/nuevo_trabajador\" class=\"small-box-footer\" title=\"Agregar Nuevo\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
              </div>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p></p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-address-card-o\"></i>
                </div>
                  <a href=\"rrhh/listar_trabajadores\" class=\"small-box-footer\" title=\"Ver Trabajadores\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>

            </fieldset>
          </form>
        </div><!-- ./col -->

        <div class=\"col-lg-3\">
          <form>
            <fieldset>
              <legend>Areas y Cargos</legend>
              <div style=\"background-color:#00aa99;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Area</h3>
                  <p></p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-list-alt\"></i>
                </div>
                  <a href=\"rrhh/listar_areas\" class=\"small-box-footer\" title=\"Ver Cargos\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
              
              <div style=\"background-color:#0aaaaa;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Cargos</h3>
                  <p></p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-list-alt\"></i>
                </div>
                  <a href=\"rrhh/listar_cargos\" class=\"small-box-footer\" title=\"Ver Cargos\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>

            </fieldset>
          </form>
        </div><!-- ./col -->
        
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Tecnicos</legend>
              <div style=\"background-color:#8ee28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Agregar</h3>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"rrhh/nuevo_tecnico\" class=\"small-box-footer\" title=\"Agregar Nuevo Tecnico\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
              </div>
              <div style=\"background-color:#8ee28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"rrhh/listar_tecnicos\" class=\"small-box-footer\" title=\"Ver Tecnicos\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
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
        return "rrhh/mantenedores_crud_masters.twig";
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
        return new Twig_Source("", "rrhh/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\mantenedores_crud_masters.twig");
    }
}
