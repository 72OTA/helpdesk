<?php

/* confirmacion/actividad/listar_actividad.twig */
class __TwigTemplate_aa443f4559960430a3b22000577d16ccfa3acb64c74571f2f50613fd0618afbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/actividad/listar_actividad.twig", 1);
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
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"content-header\">
        <h1>
            Confirmación
            <small>Listado de Actividades</small>

          <a class=\"btn btn-primary btn-social pull-right\" href=\"confirmacion/nueva_actividad\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar
          </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Actividad</th>
                  <th>Cierre Asegurado</th>
                  <th>Speed Test</th>
                  <th>Certificacion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 35
        $context["No"] = 1;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actividades_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["actividades_db"] ?? null))) {
                // line 37
                echo "                  <tr>
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "actividad", array()), "html", null, true);
                echo "</td>
                      ";
                // line 40
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cierre_seguro", array()) == 0)) {
                    // line 41
                    echo "                      <td> <i class='text-danger  glyphicon glyphicon-remove'></i></td>
                      ";
                } else {
                    // line 43
                    echo "                      <td> <i class='text-success glyphicon glyphicon-ok'></i></td>
                      ";
                }
                // line 45
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "speed_test", array()) == 0)) {
                    // line 46
                    echo "                      <td> <i class='text-danger  glyphicon glyphicon-remove'></i></td>
                      ";
                } else {
                    // line 48
                    echo "                      <td> <i class='text-success glyphicon glyphicon-ok'></i></td>
                      ";
                }
                // line 50
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "certificacion", array()) == 0)) {
                    // line 51
                    echo "                      <td> <i class='text-danger  glyphicon glyphicon-remove'></i></td>
                      ";
                } else {
                    // line 53
                    echo "                      <td> <i  class='text-success glyphicon glyphicon-ok'></i></td>
                      ";
                }
                // line 55
                echo "                      <td class='center' width='80'>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"confirmacion/editar_actividad/";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_actividad", array()), "html", null, true);
                echo "\">
                      <i class='glyphicon glyphicon-edit'></i>
                      </a>

                      ";
                // line 60
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 61
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"confirmacion/estado_actividad/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_actividad", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-off'></i>
                          </a>

                      ";
                } else {
                    // line 66
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"confirmacion/estado_actividad/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_actividad", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-check'></i>
                          </a>

                      ";
                }
                // line 71
                echo "
                    </td>
                  </tr>
                  ";
                // line 74
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 75
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 86
    public function block_appScript($context, array $blocks = array())
    {
        // line 87
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

    <script>
     \$(\"#dataTables1\").dataTable({
                \"language\": {
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"No hay datos para mostrar\",
                    \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\":\"Procesando...\",
                    \"infoEmpty\":\"No hay entradas para mostrar\",
                    \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                    \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                    }
                              },
                \"autoWidth\": true,
                \"scrollX\": true
            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "confirmacion/actividad/listar_actividad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 87,  180 => 86,  167 => 76,  160 => 75,  158 => 74,  153 => 71,  144 => 66,  135 => 61,  133 => 60,  126 => 56,  123 => 55,  119 => 53,  115 => 51,  112 => 50,  108 => 48,  104 => 46,  101 => 45,  97 => 43,  93 => 41,  91 => 40,  87 => 39,  83 => 38,  80 => 37,  74 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/actividad/listar_actividad.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\actividad\\listar_actividad.twig");
    }
}
