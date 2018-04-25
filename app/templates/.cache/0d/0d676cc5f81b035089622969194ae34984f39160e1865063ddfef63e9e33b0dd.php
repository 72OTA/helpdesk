<?php

/* administracion/listado_usuarios.twig */
class __TwigTemplate_db75796255a05efffdefe3418977819c1e9bfc1f109d6a6657db29f80f296f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/listado_usuarios.twig", 1);
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
        echo "<div class=\"row\">
  <div class=\"col-md-12\">
      <section class=\"content-header\">
          <h4>
            <i class=\"fa fa-user\"></i> GESTIÓN DE USUARIOS

            <a class=\"btn btn-danger btn-social pull-right\" href=\"administracion/generar_pdf_users\" target=\"_blank\" title=\"Generar PDF\" data-toggle=\"tooltip\">
              <i class=\"fa fa-arrow-down\"></i> Generar PDF
            </a>

            <a class=\"btn btn-success btn-social pull-right\" href=\"administracion/exporta_excel_users\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
              <i class=\"fa fa-arrow-down\"></i> Exportar Excel
            </a>

            <a class=\"btn btn-primary btn-social pull-right\" href=\"administracion/registro_user\" title=\"Agregar\" data-toggle=\"tooltip\">
              <i class=\"fa fa-plus\"></i> Agregar
            </a>

          </h4>
      </section>
  </div>
</div>

  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>No</th>
              \t<th>Nombre</th>
                <th>Rut Trabajador</th>
              \t<th>E-Mail</th>
                <th>Fono</th>
                <th>Cargo</th>
                <th>PERFIL</th>
              \t<th>ROL</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 49
        $context["No"] = 1;
        // line 50
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 51
                echo "                <tr>
                  <td>";
                // line 52
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                  <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                  <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut_personal", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fono", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cargo", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 59
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rol", array())) ? ("Admin") : ("Usuario"));
                echo "</td>
                  <td class='center' width='150'>
                    <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"administracion/editar_user/";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">
                    <i class='glyphicon glyphicon-edit'></i>
                    </a>
                    <button type=\"button\" id=\"btn_reset_pass\" title='Reset Pass' class=\"btn btn-info btn-sm\" data-toggle=\"modal\" onclick=\"carga_modal_reset_pass('";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "')\"><i class='glyphicon glyphicon-cog'></i></button>
                    <a data-toggle='tooltip' data-placement='top' title='Revisar Perfil de accesos' class='btn btn-info btn-sm' href=\"administracion/editar_perfil_user/";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">
                    <i class='glyphicon glyphicon-list-alt'></i>
                    </a>
                    ";
                // line 68
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 69
                    echo "                        <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"administracion/estado_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                        <i class='glyphicon glyphicon-off'></i>
                        </a>

                    ";
                } else {
                    // line 74
                    echo "                        <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"administracion/estado_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                        <i class='glyphicon glyphicon-check'></i>
                        </a>

                    ";
                }
                // line 79
                echo "
                  </td>
                </tr>
                ";
                // line 82
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 83
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  ";
        // line 91
        $this->loadTemplate("administracion/reset_pass_user", "administracion/listado_usuarios.twig", 91)->display($context);
    }

    // line 93
    public function block_appScript($context, array $blocks = array())
    {
        // line 94
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/administracion/administracion.js\"></script>

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
        return "administracion/listado_usuarios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 94,  193 => 93,  189 => 91,  180 => 84,  173 => 83,  171 => 82,  166 => 79,  157 => 74,  148 => 69,  146 => 68,  140 => 65,  136 => 64,  130 => 61,  125 => 59,  121 => 58,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  101 => 53,  97 => 52,  94 => 51,  88 => 50,  86 => 49,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administracion/listado_usuarios.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\administracion\\listado_usuarios.twig");
    }
}
