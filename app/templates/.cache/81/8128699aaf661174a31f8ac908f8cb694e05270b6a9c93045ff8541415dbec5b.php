<?php

/* home/home.twig */
class __TwigTemplate_79f700e7e36172c07a5fa2732cbdc75fef8ffc4bbc0c8442d8d04f9bb97fdf1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "   <div class=\"container\">
           <div class=\"card card-container\">
            <!-- <img class=\"profile-img-card\" src=\"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" alt=\"\" /> -->

            <img class=\"img-responsive\" src=\"views/app/images/";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%s%s%s", "logo", ".", twig_get_attribute($this->env, $this->getSourceContext(), ($context["empresa_db"] ?? null), "ext_logo", array())), "html", null, true);
        echo "\" alt=\"Logo\">

            <!--<img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />-->

            <p id=\"profile-name\" class=\"profile-name-card\"></p>
            <form class=\"form-signin\" id=\"login_form\" method=\"POST\">
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" autofocus>
                <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\" name=\"remember\"> Recuerdame
                    </label>
                </div>
                <button type=\"button\" class=\"btn btn-lg btn-success btn-block btn-signin\" id=\"login\">INICIAR</button>
                <button type=\"button\" class=\"btn btn-lg btn-primary btn-block btn-signin\" data-toggle=\"modal\" data-target=\"#lostpass\">RECUPERAR</button>
            </form><!-- /form -->
            ";
        // line 23
        $this->loadTemplate("home/lostpass", "home/home.twig", 23)->display($context);
        // line 24
        echo "        </div><!-- /card-container -->

    </div><!-- /container -->
";
    }

    // line 28
    public function block_appScript($context, array $blocks = array())
    {
        // line 29
        echo "    <script src=\"views/app/js/login/login.js\"></script>
    <script src=\"views/app/js/lostpass/lostpass.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 29,  66 => 28,  59 => 24,  57 => 23,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}
{% block appBody %}
   <div class=\"container\">
           <div class=\"card card-container\">
            <!-- <img class=\"profile-img-card\" src=\"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" alt=\"\" /> -->

            <img class=\"img-responsive\" src=\"views/app/images/{{ '%s%s%s'|format('logo','.',empresa_db.ext_logo) }}\" alt=\"Logo\">

            <!--<img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />-->

            <p id=\"profile-name\" class=\"profile-name-card\"></p>
            <form class=\"form-signin\" id=\"login_form\" method=\"POST\">
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" autofocus>
                <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\" name=\"remember\"> Recuerdame
                    </label>
                </div>
                <button type=\"button\" class=\"btn btn-lg btn-success btn-block btn-signin\" id=\"login\">INICIAR</button>
                <button type=\"button\" class=\"btn btn-lg btn-primary btn-block btn-signin\" data-toggle=\"modal\" data-target=\"#lostpass\">RECUPERAR</button>
            </form><!-- /form -->
            {% include 'home/lostpass' %}
        </div><!-- /card-container -->

    </div><!-- /container -->
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/login/login.js\"></script>
    <script src=\"views/app/js/lostpass/lostpass.js\"></script>
{% endblock %}
", "home/home.twig", "C:\\xampp\\htdocs\\helpdesk\\app\\templates\\home\\home.twig");
    }
}
