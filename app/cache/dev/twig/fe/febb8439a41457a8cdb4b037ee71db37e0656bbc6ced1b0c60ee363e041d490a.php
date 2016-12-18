<?php

/* base.html.twig */
class __TwigTemplate_e6afe2d6f65331bd95622a34d8bb6ba0b6f62c5e8e233d708bc6c42cbb4982a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9e6fe2df581e1be2d55c9634e86b328a965d8bd46bae66fef07b7184ece015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9e6fe2df581e1be2d55c9634e86b328a965d8bd46bae66fef07b7184ece015->enter($__internal_8b9e6fe2df581e1be2d55c9634e86b328a965d8bd46bae66fef07b7184ece015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_276519aafd543285bbe800262d3fe9b9f036eecbf2787030beb77c3c193a85c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276519aafd543285bbe800262d3fe9b9f036eecbf2787030beb77c3c193a85c2->enter($__internal_276519aafd543285bbe800262d3fe9b9f036eecbf2787030beb77c3c193a85c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/css/datatables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/all_pages.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/func.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div class = \"menu-wrap\">
    <div class = \"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav>
                    <ul class=\"nav nav-pills\">
                        <li class=\"active\" role=\"presentation\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bravo_shop_homepage");
        echo "\">Главная</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Новости</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Отзыв о магазине</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Контакты</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Войти или зарегистрироваться</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class = \"container\">
    <div class=\"header row\">
        <div class = \"block-height col-md-4\">
            <a href=\"index.php\">
                <div class=\"logo\"></div>
                <div class=\"logo2\">
                    <p>i-shop.by</p>
                </div>
            </a>
        </div>
        <div class = \"block-height col-md-4\">
            <div class=\"search\">
                <form class=\"navbar-form navbar-left\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Поиск по каталогу\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-search\">Найти</button>
                </form>
            </div>
        </div>
        <div class = \"block-height col-md-2\">
            <div class=\"telefon\">
                <ul>
                    <li>+375(29)666-66-99</li>
                    <li>+375(25)666-66-99</li>
                    <li>+375(232)77-77-77</li>
                </ul>
            </div>
        </div>
        <div class = \"block-height col-md-2\">
            <div class=\"corzina\">
                <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
                <a href=\"#\">Корзина <span class=\"badge\">3</span></a>
            </div>
        </div>
    </div>
    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "    <div class = \"footer row\">
        <div class=\"col-md-3\">
            <p class = \"copy\">
                <a href=\"index.html\">i-shop.by © 2016</a>&nbsp;|&nbsp;
                <a href=\"#\">bravo team</a>
            </p>
        </div>
        <div class=\"col-md-7\">

        </div>
        <div class=\"col-md-2 text-right\">
            <span id = \"dateTime\" class = \"date-now\"></span>
        </div>
    </div>

</div>
</body>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/js/dataTables.min.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_8b9e6fe2df581e1be2d55c9634e86b328a965d8bd46bae66fef07b7184ece015->leave($__internal_8b9e6fe2df581e1be2d55c9634e86b328a965d8bd46bae66fef07b7184ece015_prof);

        
        $__internal_276519aafd543285bbe800262d3fe9b9f036eecbf2787030beb77c3c193a85c2->leave($__internal_276519aafd543285bbe800262d3fe9b9f036eecbf2787030beb77c3c193a85c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_700b790202791ef10a596aef60ba97cfc5798a0f727b2728dd0690f0287baf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700b790202791ef10a596aef60ba97cfc5798a0f727b2728dd0690f0287baf63->enter($__internal_700b790202791ef10a596aef60ba97cfc5798a0f727b2728dd0690f0287baf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12ebf50b760333a3d656672c40dc212c23fc778eff41df68b5ab64640d86c750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ebf50b760333a3d656672c40dc212c23fc778eff41df68b5ab64640d86c750->enter($__internal_12ebf50b760333a3d656672c40dc212c23fc778eff41df68b5ab64640d86c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12ebf50b760333a3d656672c40dc212c23fc778eff41df68b5ab64640d86c750->leave($__internal_12ebf50b760333a3d656672c40dc212c23fc778eff41df68b5ab64640d86c750_prof);

        
        $__internal_700b790202791ef10a596aef60ba97cfc5798a0f727b2728dd0690f0287baf63->leave($__internal_700b790202791ef10a596aef60ba97cfc5798a0f727b2728dd0690f0287baf63_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b273bdaff84feeebf5ec0c2c527a60fff5fc3b4cbd0d733f2950ea44cf991af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b273bdaff84feeebf5ec0c2c527a60fff5fc3b4cbd0d733f2950ea44cf991af2->enter($__internal_b273bdaff84feeebf5ec0c2c527a60fff5fc3b4cbd0d733f2950ea44cf991af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_807a55f757e0509e236b29fee3388536f075d4d5101e755c47a26914c9efaa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807a55f757e0509e236b29fee3388536f075d4d5101e755c47a26914c9efaa58->enter($__internal_807a55f757e0509e236b29fee3388536f075d4d5101e755c47a26914c9efaa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_807a55f757e0509e236b29fee3388536f075d4d5101e755c47a26914c9efaa58->leave($__internal_807a55f757e0509e236b29fee3388536f075d4d5101e755c47a26914c9efaa58_prof);

        
        $__internal_b273bdaff84feeebf5ec0c2c527a60fff5fc3b4cbd0d733f2950ea44cf991af2->leave($__internal_b273bdaff84feeebf5ec0c2c527a60fff5fc3b4cbd0d733f2950ea44cf991af2_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b3019938820cce1f35306355094cfe985b58912a4d83c5f29710698c14d7dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3019938820cce1f35306355094cfe985b58912a4d83c5f29710698c14d7dcf->enter($__internal_8b3019938820cce1f35306355094cfe985b58912a4d83c5f29710698c14d7dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcd5e8cad9d6a11d4bdda837dc6989a0257f2073ef9b652231f9e852dcc23e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd5e8cad9d6a11d4bdda837dc6989a0257f2073ef9b652231f9e852dcc23e31->enter($__internal_bcd5e8cad9d6a11d4bdda837dc6989a0257f2073ef9b652231f9e852dcc23e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcd5e8cad9d6a11d4bdda837dc6989a0257f2073ef9b652231f9e852dcc23e31->leave($__internal_bcd5e8cad9d6a11d4bdda837dc6989a0257f2073ef9b652231f9e852dcc23e31_prof);

        
        $__internal_8b3019938820cce1f35306355094cfe985b58912a4d83c5f29710698c14d7dcf->leave($__internal_8b3019938820cce1f35306355094cfe985b58912a4d83c5f29710698c14d7dcf_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_254f54cef1086247f13907e1b7e5343e9a44ff04f405535aa9129dd7228a8dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254f54cef1086247f13907e1b7e5343e9a44ff04f405535aa9129dd7228a8dd7->enter($__internal_254f54cef1086247f13907e1b7e5343e9a44ff04f405535aa9129dd7228a8dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa2a6b5e7eddf86a157ae4b0b7dcf9888f19cc467f8b803361c93f0126a9d102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2a6b5e7eddf86a157ae4b0b7dcf9888f19cc467f8b803361c93f0126a9d102->enter($__internal_aa2a6b5e7eddf86a157ae4b0b7dcf9888f19cc467f8b803361c93f0126a9d102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa2a6b5e7eddf86a157ae4b0b7dcf9888f19cc467f8b803361c93f0126a9d102->leave($__internal_aa2a6b5e7eddf86a157ae4b0b7dcf9888f19cc467f8b803361c93f0126a9d102_prof);

        
        $__internal_254f54cef1086247f13907e1b7e5343e9a44ff04f405535aa9129dd7228a8dd7->leave($__internal_254f54cef1086247f13907e1b7e5343e9a44ff04f405535aa9129dd7228a8dd7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 75,  217 => 74,  200 => 6,  182 => 5,  169 => 93,  150 => 76,  147 => 75,  145 => 74,  95 => 27,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('bundles/bravoshop/css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/bravoshop/css/bootstrap.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/bravoshop/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/admin/css/datatables.min.css') }}\" type=\"text/css\" rel=\"stylesheet\">

    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/ajax.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/all_pages.js') }}\"></script>
    <script src=\"{{ asset('bundles/bravoshop/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('bundles/bravoshop/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/bravoshop/js/func.js') }}\"></script>
</head>
<body>
<div class = \"menu-wrap\">
    <div class = \"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav>
                    <ul class=\"nav nav-pills\">
                        <li class=\"active\" role=\"presentation\"><a href=\"{{ path(\"bravo_shop_homepage\") }}\">Главная</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Новости</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Отзыв о магазине</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Контакты</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Войти или зарегистрироваться</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class = \"container\">
    <div class=\"header row\">
        <div class = \"block-height col-md-4\">
            <a href=\"index.php\">
                <div class=\"logo\"></div>
                <div class=\"logo2\">
                    <p>i-shop.by</p>
                </div>
            </a>
        </div>
        <div class = \"block-height col-md-4\">
            <div class=\"search\">
                <form class=\"navbar-form navbar-left\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Поиск по каталогу\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-search\">Найти</button>
                </form>
            </div>
        </div>
        <div class = \"block-height col-md-2\">
            <div class=\"telefon\">
                <ul>
                    <li>+375(29)666-66-99</li>
                    <li>+375(25)666-66-99</li>
                    <li>+375(232)77-77-77</li>
                </ul>
            </div>
        </div>
        <div class = \"block-height col-md-2\">
            <div class=\"corzina\">
                <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
                <a href=\"#\">Корзина <span class=\"badge\">3</span></a>
            </div>
        </div>
    </div>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <div class = \"footer row\">
        <div class=\"col-md-3\">
            <p class = \"copy\">
                <a href=\"index.html\">i-shop.by © 2016</a>&nbsp;|&nbsp;
                <a href=\"#\">bravo team</a>
            </p>
        </div>
        <div class=\"col-md-7\">

        </div>
        <div class=\"col-md-2 text-right\">
            <span id = \"dateTime\" class = \"date-now\"></span>
        </div>
    </div>

</div>
</body>
    <script src=\"{{ asset('bundles/admin/js/dataTables.min.js') }}\"></script>
</html>
", "base.html.twig", "C:\\OpenServer\\domains\\symfony.local\\app\\Resources\\views\\base.html.twig");
    }
}
