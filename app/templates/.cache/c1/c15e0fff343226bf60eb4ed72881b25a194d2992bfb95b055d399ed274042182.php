<?php

/* rrhh/horasextra/revisar_horas_extras_pendientes.twig */
class __TwigTemplate_1e4c63510a863d616443c41b2e668d059253e1098c12ef71995b564dc1f01486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 1);
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
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      GESTION DE HORAS EXTRA
    
  </h4>
</section>
<section class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"box box-primary\">
        <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>Peticion Creada</th>
                <th>Fecha solicitada</th>
                <th>Hora desde</th>
                <th>Hora hasta</th>
                <th>Motivo</th>
                <th>Estado</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 32
        $context["No"] = 1;
        // line 33
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 34
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 35
                    echo "                  <tr>
                    <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_creacion", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_solicitud", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_desde", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_hasta", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_solicitud", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()), "html", null, true);
                    echo "</td>
                    <td class='center' width='150'>
                      ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 44
                        echo "                        <button type=\"button\" id=\"btn_revisar\" title='Revisar' class=\"btn btn-success btn-sm\" data-toggle=\"modal\" onclick=\"modal_responder_solicitud('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo "')\">
                          <i class='glyphicon glyphicon-eye-open'></i>
                        </button>
                      </a>
                    ";
                    }
                    // line 49
                    echo "                  </td>
                </tr>
              ";
                }
                // line 52
                echo "              ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 53
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </tr>
        </tbody>

      </table>
    </div>
  </div>
</div>
</div>
</section>
";
        // line 63
        $this->loadTemplate("rrhh/horasextra/mostrar_hora_extra", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 63)->display($context);
    }

    // line 66
    public function block_appScript($context, array $blocks = array())
    {
        // line 67
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/revisar_horas_extras_pendientes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 67,  149 => 66,  145 => 63,  134 => 54,  127 => 53,  124 => 52,  119 => 49,  110 => 44,  108 => 43,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 36,  80 => 35,  77 => 34,  71 => 33,  69 => 32,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\horasextra\\revisar_horas_extras_pendientes.twig");
    }
}
