<?php

/* rrhh/horasextra/mostrar_hora_extra.twig */
class __TwigTemplate_2bc28d4f5231d8cd70cd7f053a51bb7105d7ac980881404e89bcf6710753e4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"modal_responder_solicitud\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Responder solicitud de horas extra</h4>
      </div>
      <div class=\"modal-body\">
        <form name=\"form_respuesta\" id=\"form_respuesta\" action=\"\" method=\"POST\">
          <center>
            <div class=\"form-group\">
              <label for=\"motivo\">Motivo de respuesta:</label>
              <input type=\"text\" class=\"form-control\" name=\"motivo_respuesta\" id=\"motivo_respuesta\">
              <input type=\"hidden\" class=\"form-control\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["id"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"id_respuesta\" id=\"id_respuesta\">
            </div>
            <button class=\"btn btn-success\" type=\"button\" id=\"btn_aprobar\">
              <span>Aprobar</span></button>
            <button class=\"btn btn-danger\" type=\"button\" id=\"btn_rechazar\">
              <span>Rechazar</span></button>
          </center>
          <br>
          <!-- <table class=\"table table-bordered\"> <thead> <tr> <th>RUT</th> </tr> </thead> <tbody> ";
        // line 22
        $context["No"] = 1;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            echo " <tr> <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
            echo "</td> <td class='center'> <form class=\"\" action=\"\" name=\"form_id_mod\" id=\"form_id_mod\"
          method=\"post\"> <input type=\"hidden\" id=\"id_hx_mod\" name=\"id_hx_mod\"> </form> </td> </tr> ";
            // line 23
            $context["No"] = (($context["No"] ?? null) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </tr> </tbody> </table> -->
        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 30
        $this->displayBlock('appScript', $context, $blocks);
    }

    public function block_appScript($context, array $blocks = array())
    {
        // line 31
        echo "  <script src=\"views/app/js/rrhh/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/mostrar_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  71 => 30,  56 => 23,  46 => 22,  35 => 14,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/mostrar_hora_extra.twig", "C:\\xampp\\htdocs\\proyectos\\helpdesk\\app\\templates\\rrhh\\horasextra\\mostrar_hora_extra.twig");
    }
}
