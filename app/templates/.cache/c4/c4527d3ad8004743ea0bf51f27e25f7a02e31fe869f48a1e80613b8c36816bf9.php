<?php

/* plataforma/mantenedores_crud_masters/agendaeps/editar_agenda.twig */
class __TwigTemplate_04d38185e72d5c0f3eeea6379349368e144ead754cb438ad6f72ccd885c15384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/agendaeps/editar_agenda.twig", 1);
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
            <small>Editar Estado</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"plataforma/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"plataforma/listar_agenda\">Listado de Estados</a></li>
        <li class=\"active\">Editar Estado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_estado_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id' id='id' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "id", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"nombre_eps\" id=\"nombre_eps\" type=\"text\" placeholder=\"Nombre EPS\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "nombre_eps", array()), "html", null, true);
        echo "\" >
                    <br>
                    <input class=\"form-control\" name=\"contacto\" id=\"contacto\" type=\"text\" placeholder=\"Contacto\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "contacto", array()), "html", null, true);
        echo "\" />
                    <br>
                    <input class=\"form-control\" name=\"correo\" id=\"correo\" type=\"text\" placeholder=\"Correo Valido\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "correo", array()), "html", null, true);
        echo "\" />
                    <br>
                    <input class=\"form-control\" name=\"telefono\" id=\"telefono\" type=\"text\" placeholder=\"Telefono\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "telefono", array()), "html", null, true);
        echo "\" />
                    <br>
                    <input class=\"form-control\" name=\"anexo\" id=\"anexo\" type=\"text\" placeholder=\"Anexo\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "anexo", array()), "html", null, true);
        echo "\" />
                    <br>
                    <input class=\"form-control\" name=\"tipo_contacto\" id=\"tipo_contacto\" type=\"text\" placeholder=\"Tipo Contacto\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_agendaeps"] ?? null), "tipo_contacto", array()), "html", null, true);
        echo "\" />
                    <br>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_agenda\" class=\"btn btn-default\">Grabar</button>
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
        return "plataforma/mantenedores_crud_masters/agendaeps/editar_agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  110 => 53,  91 => 38,  86 => 36,  81 => 34,  76 => 32,  71 => 30,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "plataforma/mantenedores_crud_masters/agendaeps/editar_agenda.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\agendaeps\\editar_agenda.twig");
    }
}
