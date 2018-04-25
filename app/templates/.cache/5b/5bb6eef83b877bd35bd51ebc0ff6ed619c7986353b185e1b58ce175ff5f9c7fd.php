<?php

/* administracion/edit_user.twig */
class __TwigTemplate_e21a1de0d3ff03951d68af280c21a0df80f5be1d38bc35b8d07cf7cf102cc6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/edit_user.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h4>
            <i class=\"fa fa-user\"></i>
            EDITAR USUARIO
        </h4>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"portal\">
                    <i class=\"fa fa-home\"></i>
                    Home
                </a>
            </li>
            <li>
                <a href=\"administracion/usuario\">
                    Usuarios
                </a>
            </li>
            <li class=\"active\">
                editar
            </li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"update_user_form\" action=\"\" method=\"POST\">
                        <input type='hidden' name='id_user' id='id_user' value='";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), "html", null, true);
        echo "'/>
                        <div class=\"box-body col-sm-2\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" placeholder=\"Nombre Completo\" value='";
        // line 35
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name", array())), "html", null, true);
        echo "'/>
                                <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" placeholder=\"E-Mail\" value='";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "email", array()), "html", null, true);
        echo "' readonly=\"readonly\"/>
                                <input class=\"form-control\" name=\"cargo\" id=\"cargo\" type=\"text\" placeholder=\"cargo\" value='";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "cargo", array()), "html", null, true);
        echo "'/>
                                <input class=\"form-control\" name=\"fono\" id=\"fono\" type=\"text\" placeholder=\"Fono\" value='";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "fono", array()), "html", null, true);
        echo "'/>
                            </div>
                            <div class=\"form-group\">Perfil Asignado
                                <select name='perfil' id='perfil' class='form-control'>
                                    <option>--</option>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 44
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
                    // line 45
                    echo "                                            <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 47
                    echo "                                            <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 49
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                    ";
        if (("DEFINIDO" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "perfil", array()))) {
            // line 51
            echo "                                        <option value='DEFINIDO' selected='selected'>DEFINIDO</option>
                                    ";
        } else {
            // line 53
            echo "                                        <option value='DEFINIDO'>DEFINIDO</option>
                                    ";
        }
        // line 55
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">Pagina de Inicio
                                <select name='pagina_inicio' id='pagina_inicio' class='form-control'>
                                    ";
        // line 59
        if (("portal" == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "pagina_inicio", array()))) {
            // line 60
            echo "                                        <option value='portal' selected='selected'>HOME</option>
                                    ";
        } else {
            // line 62
            echo "                                        <option value='portal'>HOME</option>
                                    ";
        }
        // line 64
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_menu"] ?? null))) {
                // line 65
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "pagina_inicio", array()))) {
                    // line 66
                    echo "                                            <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "' selected='selected'>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array())), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 68
                    echo "                                            <option value='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array())), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 70
                echo "
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                </select>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    ";
        // line 76
        if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "rol", array()))) {
            // line 77
            echo "                                        <input name=\"rol\" type=\"checkbox\" id=\"rol\"/>
                                    ";
        } else {
            // line 79
            echo "                                        <input name=\"rol\" type=\"checkbox\" id=\"rol\" checked=\"checked\"/>
                                    ";
        }
        // line 81
        echo "                                    Usuario Administrador?

                                </label>
                            </div>
                            <div class=\"panel-footer text-center\">
                                <button type=\"button\" id='update_user' class=\"btn btn-sm btn-success\">
                                    <i class=\"glyphicon glyphicon-refresh\"></i>
                                    Actualizar datos</button>
                            </div>
                        </div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">Foto</label>
                                    <div class=\"col-sm-5\">
                                        <input type=\"file\" name=\"foto\" id=\"foto\">
                                        <br/>
                                        ";
        // line 98
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "foto", array()) == 1)) {
            // line 99
            echo "                                            <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "name_foto", array()), "html", null, true);
            echo "\" width=\"128\">
                                        ";
        } else {
            // line 101
            echo "                                            <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                                        ";
        }
        // line 103
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <br/>
                                    <label class=\"col-sm-4  control-label\">Rut Asocia Trabajador</label>
                                    <div class=\"col-sm-5\">
                                        <input class=\"form-control\" name=\"rut_trabajador\" id=\"rut_trabajador\" type=\"text\" placeholder=\"xxxxxxxx s/digito\" value='";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "rut_personal", array()), "html", null, true);
        echo "'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 122
    public function block_appScript($context, array $blocks = array())
    {
        // line 123
        echo "    <script src=\"views/app/js/administracion/administracion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 123,  252 => 122,  237 => 111,  227 => 103,  223 => 101,  217 => 99,  215 => 98,  196 => 81,  192 => 79,  188 => 77,  186 => 76,  180 => 72,  172 => 70,  164 => 68,  156 => 66,  153 => 65,  147 => 64,  143 => 62,  139 => 60,  137 => 59,  131 => 55,  127 => 53,  123 => 51,  120 => 50,  113 => 49,  105 => 47,  97 => 45,  94 => 44,  89 => 43,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  62 => 31,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h4>
            <i class=\"fa fa-user\"></i>
            EDITAR USUARIO
        </h4>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"portal\">
                    <i class=\"fa fa-home\"></i>
                    Home
                </a>
            </li>
            <li>
                <a href=\"administracion/usuario\">
                    Usuarios
                </a>
            </li>
            <li class=\"active\">
                editar
            </li>
        </ol>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"update_user_form\" action=\"\" method=\"POST\">
                        <input type='hidden' name='id_user' id='id_user' value='{{ db_users.id_user }}'/>
                        <div class=\"box-body col-sm-2\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" placeholder=\"Nombre Completo\" value='{{ db_users.name|raw|upper }}'/>
                                <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" placeholder=\"E-Mail\" value='{{ db_users.email }}' readonly=\"readonly\"/>
                                <input class=\"form-control\" name=\"cargo\" id=\"cargo\" type=\"text\" placeholder=\"cargo\" value='{{ db_users.cargo }}'/>
                                <input class=\"form-control\" name=\"fono\" id=\"fono\" type=\"text\" placeholder=\"Fono\" value='{{ db_users.fono }}'/>
                            </div>
                            <div class=\"form-group\">Perfil Asignado
                                <select name='perfil' id='perfil' class='form-control'>
                                    <option>--</option>
                                    {% for p in db_perfiles if false != db_perfiles %}
                                        {% if p.nombre == db_users.perfil %}
                                            <option value='{{ p.nombre }}' selected='selected'>{{ p.nombre }}</option>
                                        {% else %}
                                            <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                                        {% endif %}
                                    {% endfor %}
                                    {% if 'DEFINIDO' == db_users.perfil %}
                                        <option value='DEFINIDO' selected='selected'>DEFINIDO</option>
                                    {% else %}
                                        <option value='DEFINIDO'>DEFINIDO</option>
                                    {% endif %}
                                </select>
                            </div>
                            <div class=\"form-group\">Pagina de Inicio
                                <select name='pagina_inicio' id='pagina_inicio' class='form-control'>
                                    {% if 'portal' == db_users.pagina_inicio %}
                                        <option value='portal' selected='selected'>HOME</option>
                                    {% else %}
                                        <option value='portal'>HOME</option>
                                    {% endif %}
                                    {% for m in db_menu if false != db_menu %}
                                        {% if m.url == db_users.pagina_inicio %}
                                            <option value='{{ m.url }}' selected='selected'>{{ m.url|upper }}</option>
                                        {% else %}
                                            <option value='{{ m.url }}'>{{ m.url|upper }}</option>
                                        {% endif %}

                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    {% if 0 == db_users.rol %}
                                        <input name=\"rol\" type=\"checkbox\" id=\"rol\"/>
                                    {% else %}
                                        <input name=\"rol\" type=\"checkbox\" id=\"rol\" checked=\"checked\"/>
                                    {% endif %}
                                    Usuario Administrador?

                                </label>
                            </div>
                            <div class=\"panel-footer text-center\">
                                <button type=\"button\" id='update_user' class=\"btn btn-sm btn-success\">
                                    <i class=\"glyphicon glyphicon-refresh\"></i>
                                    Actualizar datos</button>
                            </div>
                        </div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">Foto</label>
                                    <div class=\"col-sm-5\">
                                        <input type=\"file\" name=\"foto\" id=\"foto\">
                                        <br/>
                                        {% if db_users.foto == 1 %}
                                            <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"views/app/images/avatares/{{ db_users.name_foto }}\" width=\"128\">
                                        {% else %}
                                            <img style=\"border:1px solid #eaeaea;border-radius:5px;\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"128\">
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <br/>
                                    <label class=\"col-sm-4  control-label\">Rut Asocia Trabajador</label>
                                    <div class=\"col-sm-5\">
                                        <input class=\"form-control\" name=\"rut_trabajador\" id=\"rut_trabajador\" type=\"text\" placeholder=\"xxxxxxxx s/digito\" value='{{ db_users.rut_personal }}'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/administracion/administracion.js\"></script>
{% endblock %}", "administracion/edit_user.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\administracion\\edit_user.twig");
    }
}
