<?php

/* plataforma/mantenedores_crud_masters/mantenedores_crud_masters.twig */
class __TwigTemplate_041806c07910ddf1172d1030f47345b8ae1efc481672db535f3d0b19da07bfb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "plataforma/mantenedores_crud_masters/mantenedores_crud_masters.twig", 1);
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
            Confirmación
            <small>Mantenedor de Maestros</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
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
                        <legend>Comuna</legend>
                        <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_comunas\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- ./col -->

            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Agenda EPS</legend>
                        <div style=\"background-color:#499299;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_agenda\" class=\"small-box-footer\" title=\"Ver Motivos\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Motivos por Acción Casilleros</legend>
                        <div style=\"background-color:#30f290;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_motivos\" class=\"small-box-footer\" title=\"Ver Motivos\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Actividades</legend>
                        <div style=\"background-color:#1cabbb;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_actividades\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Zonas</legend>
                        <div style=\"background-color:#0db9a4;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_zonas\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Casilleros</legend>
                        <div style=\"background-color:#0a8374;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_casilleros\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
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
        return "plataforma/mantenedores_crud_masters/mantenedores_crud_masters.twig";
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
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Confirmación
            <small>Mantenedor de Maestros</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">
                    <i class=\"fa fa-home\"></i>
                    Home</a>
            </li>
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
                        <legend>Comuna</legend>
                        <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_comunas\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- ./col -->

            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Agenda EPS</legend>
                        <div style=\"background-color:#499299;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_agenda\" class=\"small-box-footer\" title=\"Ver Motivos\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Motivos por Acción Casilleros</legend>
                        <div style=\"background-color:#30f290;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_motivos\" class=\"small-box-footer\" title=\"Ver Motivos\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Actividades</legend>
                        <div style=\"background-color:#1cabbb;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_actividades\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Zonas</legend>
                        <div style=\"background-color:#0db9a4;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_zonas\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"col-lg-3\">
                <form>
                    <fieldset>
                        <legend>Casilleros</legend>
                        <div style=\"background-color:#0a8374;color:#fff\" class=\"small-box\">
                            <div class=\"inner\">
                                <h3>Listar</h3>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fa fa-user-plus\"></i>
                            </div>
                            <a href=\"plataforma/listar_casilleros\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-eye\"></i>
                            </a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->

{% endblock %}", "plataforma/mantenedores_crud_masters/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\plataforma\\mantenedores_crud_masters\\mantenedores_crud_masters.twig");
    }
}
