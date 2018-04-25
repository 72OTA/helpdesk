<?php

/* administracion/empresa.twig */
class __TwigTemplate_2eb82668ec2ba822e83c706e126ebb794b21f61f011cd752798ded79cd397c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/empresa.twig", 1);
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
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i> DATOS DE EMPRESA
    </h4>
    <ol class=\"breadcrumb\">
      <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
      <li class=\"active\">Empresa</li>
    </ol>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <form method=\"post\" id=\"perfil\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad\" >
          <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class='glyphicon glyphicon-cog'></i> Configuración</h3>
            </div>
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-md-3 col-lg-3 \" align=\"center\">
                  <div id=\"load_img\">
                    <img class=\"img-responsive\" src=\"views/app/images/";
        // line 24
        echo twig_escape_filter($this->env, sprintf("%s%s%s", "logo", ".", twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "ext_logo", array())), "html", null, true);
        echo "\" alt=\"Logo\">
                  </div>
                  <br/>
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div class=\"form-group\">
                        <input class='filestyle' data-buttonText=\"Logo\" type=\"file\" name=\"imagefile\" id=\"imagefile\" onchange=\"document.getElementById('archivo').value=document.getElementById('imagefile').value\" tabindex=\"-1\" style=\"position:absolute; clip: rect(0px 0px 0px 0px);\" accept=\"file_extension|image/*|media_type\">
                        <div class=\"bootstrap-filestyle input-group\">
                          <input type=\"text\" class=\"form-control\" id=\"archivo\" placeholder=\"\" disabled=\"\">
                          <span class=\"group-span-filestyle input-group-btn\" tabindex=\"0\">
                            <label for=\"imagefile\" class=\"btn btn-default \"><span class=\"icon-span-filestyle glyphicon glyphicon-folder-open\">
                            </span>
                            <span class=\"buttonText\">Logo</span>
                            </label>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\" col-md-9 col-lg-9 \">
                  <table class=\"table table-condensed\">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>* Nombre de la empresa:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"nombre_empresa\" id=\"nombre_empresa\"  value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "nombre", array()), "html", null, true);
        echo "\" ></td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"telefono\" id=\"telefono\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "telefono", array()), "html", null, true);
        echo "\" ></td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><input type=\"email\" class=\"form-control input-sm\" name=\"email\" id=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "email", array()), "html", null, true);
        echo "\" ></td>
                      </tr>
                      <tr>
                        <td>* IVA (%):</td>
                        <td><input type=\"text\" class=\"form-control input-sm\"  name=\"impuesto\" id=\"impuesto\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "impuesto", array()), "html", null, true);
        echo "\" placeholder=\"19\"></td>
                      </tr>
                      <tr>
                        <td>* Simbolo de moneda:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\"  name=\"tipo_moneda\" id=\"tipo_moneda\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "tipo_moneda", array()), "html", null, true);
        echo "\" placeholder=\"\$\"></td>
                      </tr>
                      <tr>
                        <td>* Dirección:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "direccion", array()), "html", null, true);
        echo "\" ></td>
                      </tr>
                      <tr>
                        <td>* Ciudad:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"ciudad\" id=\"ciudad\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "ciudad", array()), "html", null, true);
        echo "\" placeholder=\"Santiago\"></td>
                      </tr>
                      <tr>
                        <td>* Comuna:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"comuna\" id=\"comuna\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "comuna", array()), "html", null, true);
        echo "\" placeholder=\"Santiago\"></td>
                      </tr>
                      <tr>
                        <td>Región:</td>
                        <td><input type=\"text\" class=\"form-control input-sm\" name=\"region\" id=\"region\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "region", array()), "html", null, true);
        echo "\" placeholder=\"Metropolitana\"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
              <div class=\"panel-footer text-center\">
                <button type=\"button\" id='update_empresa_btn' class=\"btn btn-sm btn-success\" onclick=\"update_empresa();\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
              </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  ";
    }

    // line 97
    public function block_appScript($context, array $blocks = array())
    {
        // line 98
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "administracion/empresa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 98,  159 => 97,  139 => 81,  132 => 77,  125 => 73,  118 => 69,  111 => 65,  104 => 61,  97 => 57,  90 => 53,  83 => 49,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/empresa.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\empresa.twig");
    }
}
