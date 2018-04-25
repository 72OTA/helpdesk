<?php

/* plataforma/mantenedores_crud_masters/agendaeps/nuevo_agenda.twig */
class __TwigTemplate_50f41960109f1673ff08f8bd4c7d9abcee28946deefa28d1aaf17fa8ea5ea0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/agendaeps/nuevo_agenda.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
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
    public function block_appStylos($context, array $blocks = array())
    {
    }

    // line 4
    public function block_appBody($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"content-header\">
        <h1>
            Plataforma
            <small>Agregar Contacto EPS</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"plataforma/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"plataforma/listar_agenda\">Listado de Estados</a></li>
        <li class=\"active\">Agregar Estado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_agenda_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"nombre_eps\" id=\"nombre_eps\" type=\"text\" placeholder=\"Nombre EPS\" required/>
                  <br>
                  <input class=\"form-control\" name=\"contacto\" id=\"contacto\" type=\"text\" placeholder=\"Contacto\" required/>
                  <br>
                  <input class=\"form-control\" name=\"correo\" id=\"correo\" type=\"text\" placeholder=\"Correo Valido\" required/>
                  <br>
                  <input class=\"form-control\" name=\"telefono\" id=\"telefono\" type=\"text\" placeholder=\"Telefono\" required/>
                  <br>
                  <input class=\"form-control\" name=\"anexo\" id=\"anexo\" type=\"text\" placeholder=\"Anexo\" required/>
                  <br>
                  <input class=\"form-control\" name=\"tipo_contacto\" id=\"tipo_contacto\" type=\"text\" placeholder=\"Tipo Contacto\" required/>
                  <br>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_agenda\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 53
    public function block_appScript($context, array $blocks = array())
    {
        // line 54
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/agendaeps/nuevo_agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  89 => 53,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "plataforma/mantenedores_crud_masters/agendaeps/nuevo_agenda.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\agendaeps\\nuevo_agenda.twig");
    }
}
