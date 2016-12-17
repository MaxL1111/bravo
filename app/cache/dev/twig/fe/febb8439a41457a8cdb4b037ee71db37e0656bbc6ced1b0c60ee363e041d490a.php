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
        $__internal_eab05ab57e24b6e0357832d2cd34e10a0e9cdb40eea2e66981432250ac09da8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab05ab57e24b6e0357832d2cd34e10a0e9cdb40eea2e66981432250ac09da8b->enter($__internal_eab05ab57e24b6e0357832d2cd34e10a0e9cdb40eea2e66981432250ac09da8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bea71a7582361f2489f3362500cebed3351c4e05cd860f46e8adcf427c40e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea71a7582361f2489f3362500cebed3351c4e05cd860f46e8adcf427c40e888->enter($__internal_bea71a7582361f2489f3362500cebed3351c4e05cd860f46e8adcf427c40e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <li class=\"active\" role=\"presentation\"><a href=\"index.php\">Главная</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Новости</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"comment.php\">Отзыв о магазине</a></li>
                        <!-- [YK] пока лишнееli class=\"menu-item\" role=\"presentation\"><a href=\"#\">Как купить</a></li-->
                        <!-- [YK] пока лишнее li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Гарантия</a></li-->
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
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    <div class = \"footer row\">
        <div class=\"col-md-3\">
            <p class = \"copy\">
                <a href=\"index.html\">i-shop.by © 2016</a>&nbsp;|&nbsp;
                <a href=\"#\">Privacy Policy</a>
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
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admin/js/dataTables.min.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_eab05ab57e24b6e0357832d2cd34e10a0e9cdb40eea2e66981432250ac09da8b->leave($__internal_eab05ab57e24b6e0357832d2cd34e10a0e9cdb40eea2e66981432250ac09da8b_prof);

        
        $__internal_bea71a7582361f2489f3362500cebed3351c4e05cd860f46e8adcf427c40e888->leave($__internal_bea71a7582361f2489f3362500cebed3351c4e05cd860f46e8adcf427c40e888_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4048a46feebe44bc5f841e249b3c507f8fad013fc7a4a72f1832d1d98bdab851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4048a46feebe44bc5f841e249b3c507f8fad013fc7a4a72f1832d1d98bdab851->enter($__internal_4048a46feebe44bc5f841e249b3c507f8fad013fc7a4a72f1832d1d98bdab851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d5f114cc775435f0404ae5e1975390de9c5cf7281cc642aa937c8e882f9b79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5f114cc775435f0404ae5e1975390de9c5cf7281cc642aa937c8e882f9b79e->enter($__internal_7d5f114cc775435f0404ae5e1975390de9c5cf7281cc642aa937c8e882f9b79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d5f114cc775435f0404ae5e1975390de9c5cf7281cc642aa937c8e882f9b79e->leave($__internal_7d5f114cc775435f0404ae5e1975390de9c5cf7281cc642aa937c8e882f9b79e_prof);

        
        $__internal_4048a46feebe44bc5f841e249b3c507f8fad013fc7a4a72f1832d1d98bdab851->leave($__internal_4048a46feebe44bc5f841e249b3c507f8fad013fc7a4a72f1832d1d98bdab851_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28c7f7744e04453a0dc91c081461638613513c3aa7d530dfc97a4702639b7e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c7f7744e04453a0dc91c081461638613513c3aa7d530dfc97a4702639b7e34->enter($__internal_28c7f7744e04453a0dc91c081461638613513c3aa7d530dfc97a4702639b7e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8bbc90ca24e9db9e06cba729385d8c9df55ffa78ec10868ca54d2a736cab862e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbc90ca24e9db9e06cba729385d8c9df55ffa78ec10868ca54d2a736cab862e->enter($__internal_8bbc90ca24e9db9e06cba729385d8c9df55ffa78ec10868ca54d2a736cab862e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8bbc90ca24e9db9e06cba729385d8c9df55ffa78ec10868ca54d2a736cab862e->leave($__internal_8bbc90ca24e9db9e06cba729385d8c9df55ffa78ec10868ca54d2a736cab862e_prof);

        
        $__internal_28c7f7744e04453a0dc91c081461638613513c3aa7d530dfc97a4702639b7e34->leave($__internal_28c7f7744e04453a0dc91c081461638613513c3aa7d530dfc97a4702639b7e34_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2fc87551b065c885eeac37e3725a63cd655e99c40248e7d51bf318a95603ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fc87551b065c885eeac37e3725a63cd655e99c40248e7d51bf318a95603ff4->enter($__internal_a2fc87551b065c885eeac37e3725a63cd655e99c40248e7d51bf318a95603ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37df1178f337cc8e4dcf7021b6022befcd03e41c0b04f788dfa92beaf5798df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37df1178f337cc8e4dcf7021b6022befcd03e41c0b04f788dfa92beaf5798df0->enter($__internal_37df1178f337cc8e4dcf7021b6022befcd03e41c0b04f788dfa92beaf5798df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37df1178f337cc8e4dcf7021b6022befcd03e41c0b04f788dfa92beaf5798df0->leave($__internal_37df1178f337cc8e4dcf7021b6022befcd03e41c0b04f788dfa92beaf5798df0_prof);

        
        $__internal_a2fc87551b065c885eeac37e3725a63cd655e99c40248e7d51bf318a95603ff4->leave($__internal_a2fc87551b065c885eeac37e3725a63cd655e99c40248e7d51bf318a95603ff4_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6005b65bf4b40714056034a94e61480667d01169ff616f2399e66572a31f12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6005b65bf4b40714056034a94e61480667d01169ff616f2399e66572a31f12a->enter($__internal_d6005b65bf4b40714056034a94e61480667d01169ff616f2399e66572a31f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4625b204968ca8571f74fce715f2397e1b9e476bbf2f1d75ead9d10143086702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4625b204968ca8571f74fce715f2397e1b9e476bbf2f1d75ead9d10143086702->enter($__internal_4625b204968ca8571f74fce715f2397e1b9e476bbf2f1d75ead9d10143086702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4625b204968ca8571f74fce715f2397e1b9e476bbf2f1d75ead9d10143086702->leave($__internal_4625b204968ca8571f74fce715f2397e1b9e476bbf2f1d75ead9d10143086702_prof);

        
        $__internal_d6005b65bf4b40714056034a94e61480667d01169ff616f2399e66572a31f12a->leave($__internal_d6005b65bf4b40714056034a94e61480667d01169ff616f2399e66572a31f12a_prof);

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
        return array (  233 => 77,  216 => 76,  199 => 6,  181 => 5,  168 => 95,  149 => 78,  146 => 77,  144 => 76,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                        <li class=\"active\" role=\"presentation\"><a href=\"index.php\">Главная</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Новости</a></li>
                        <li class=\"menu-item\" role=\"presentation\"><a href=\"comment.php\">Отзыв о магазине</a></li>
                        <!-- [YK] пока лишнееli class=\"menu-item\" role=\"presentation\"><a href=\"#\">Как купить</a></li-->
                        <!-- [YK] пока лишнее li class=\"menu-item\" role=\"presentation\"><a href=\"#\">Гарантия</a></li-->
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
                <a href=\"#\">Privacy Policy</a>
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
