<?php

/* plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig */
class __TwigTemplate_fa282c8de84775bae4b7c2caa5388c3bef3760058c144749deaca451f3512ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig", 1);
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
            <small>Editar Comuna</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"plataforma/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"plataforma/listar_comunas\">Listado de Comunas</a></li>
        <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_comuna_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_comuna' id='id_comuna' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "id_comuna", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Nombre de la comuna\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "nombre", array()), "html", null, true);
        echo "' required/>
                    <br>
                    <input class=\"form-control\" name=\"zona\" id=\"zona\" type=\"text\" placeholder=\"Ingrese Zona ej:ZMET\" value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "zona", array()), "html", null, true);
        echo "' required/>
                    <br>
                    <input class=\"form-control\" name=\"cod_sub_zona\" id=\"cod_sub_zona\" type=\"text\" placeholder=\"Ingrese subzona ej:ZMNOR\" value='";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "cod_sub_zona", array()), "html", null, true);
        echo "' required/>
                    <br>
                    <input class=\"form-control\" name=\"territorio\" id=\"territorio\" type=\"text\" placeholder=\"Ingrese Territorio\" value='";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "territorio", array()), "html", null, true);
        echo "' required/>
                    <br>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_comuna\" class=\"btn btn-default\">Grabar</button>
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

    // line 49
    public function block_appScript($context, array $blocks = array())
    {
        // line 50
        echo "    <script src=\"views/app/js/plataforma/plataforma.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  100 => 49,  81 => 34,  76 => 32,  71 => 30,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "plataforma/mantenedores_crud_masters/comuna/editar_comuna.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\comuna\\editar_comuna.twig");
    }
}
