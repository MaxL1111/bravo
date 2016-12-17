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
        $__internal_3a0d75d245bc15c436db0843b97e155f7073ee1ac313aaa8774fe7ce9ced737c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0d75d245bc15c436db0843b97e155f7073ee1ac313aaa8774fe7ce9ced737c->enter($__internal_3a0d75d245bc15c436db0843b97e155f7073ee1ac313aaa8774fe7ce9ced737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_344c54f5fe3d51284059bcb561715924138f986f27146f95b93dd383246177dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344c54f5fe3d51284059bcb561715924138f986f27146f95b93dd383246177dd->enter($__internal_344c54f5fe3d51284059bcb561715924138f986f27146f95b93dd383246177dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/all_pages.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/js/func.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
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
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
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
</html>
";
        
        $__internal_3a0d75d245bc15c436db0843b97e155f7073ee1ac313aaa8774fe7ce9ced737c->leave($__internal_3a0d75d245bc15c436db0843b97e155f7073ee1ac313aaa8774fe7ce9ced737c_prof);

        
        $__internal_344c54f5fe3d51284059bcb561715924138f986f27146f95b93dd383246177dd->leave($__internal_344c54f5fe3d51284059bcb561715924138f986f27146f95b93dd383246177dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_283cad14fcb66e00c9dd90d122ae1b55b3e7de49fc810af362067f0515c91767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283cad14fcb66e00c9dd90d122ae1b55b3e7de49fc810af362067f0515c91767->enter($__internal_283cad14fcb66e00c9dd90d122ae1b55b3e7de49fc810af362067f0515c91767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22f1f8f1f93717e473628fdb47918b82ab047225deeed38106ca1bcf69a910ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f1f8f1f93717e473628fdb47918b82ab047225deeed38106ca1bcf69a910ef->enter($__internal_22f1f8f1f93717e473628fdb47918b82ab047225deeed38106ca1bcf69a910ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22f1f8f1f93717e473628fdb47918b82ab047225deeed38106ca1bcf69a910ef->leave($__internal_22f1f8f1f93717e473628fdb47918b82ab047225deeed38106ca1bcf69a910ef_prof);

        
        $__internal_283cad14fcb66e00c9dd90d122ae1b55b3e7de49fc810af362067f0515c91767->leave($__internal_283cad14fcb66e00c9dd90d122ae1b55b3e7de49fc810af362067f0515c91767_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bea7524d289a24860ef9fbe8ab555c45cc0f5289e9babc93fe676b4c0987d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bea7524d289a24860ef9fbe8ab555c45cc0f5289e9babc93fe676b4c0987d32->enter($__internal_6bea7524d289a24860ef9fbe8ab555c45cc0f5289e9babc93fe676b4c0987d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_faa67bf4fcb36139e69dcf089716421f0a0f604d345acf695f3a4dc8587a38a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa67bf4fcb36139e69dcf089716421f0a0f604d345acf695f3a4dc8587a38a8->enter($__internal_faa67bf4fcb36139e69dcf089716421f0a0f604d345acf695f3a4dc8587a38a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_faa67bf4fcb36139e69dcf089716421f0a0f604d345acf695f3a4dc8587a38a8->leave($__internal_faa67bf4fcb36139e69dcf089716421f0a0f604d345acf695f3a4dc8587a38a8_prof);

        
        $__internal_6bea7524d289a24860ef9fbe8ab555c45cc0f5289e9babc93fe676b4c0987d32->leave($__internal_6bea7524d289a24860ef9fbe8ab555c45cc0f5289e9babc93fe676b4c0987d32_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_3007b969897362fe830f8c4a03e6e399d5142f6e6ee9cd7350c21d0553aec306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3007b969897362fe830f8c4a03e6e399d5142f6e6ee9cd7350c21d0553aec306->enter($__internal_3007b969897362fe830f8c4a03e6e399d5142f6e6ee9cd7350c21d0553aec306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af1a9bff8bf0a62b474b99fc23ce7d8fa5bff3727f9ae5847dc28acab73318e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1a9bff8bf0a62b474b99fc23ce7d8fa5bff3727f9ae5847dc28acab73318e2->enter($__internal_af1a9bff8bf0a62b474b99fc23ce7d8fa5bff3727f9ae5847dc28acab73318e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af1a9bff8bf0a62b474b99fc23ce7d8fa5bff3727f9ae5847dc28acab73318e2->leave($__internal_af1a9bff8bf0a62b474b99fc23ce7d8fa5bff3727f9ae5847dc28acab73318e2_prof);

        
        $__internal_3007b969897362fe830f8c4a03e6e399d5142f6e6ee9cd7350c21d0553aec306->leave($__internal_3007b969897362fe830f8c4a03e6e399d5142f6e6ee9cd7350c21d0553aec306_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6531d824ee12fa49d3d9c03b9e2563c1e9581f1b42af5341b0a9bb364b0cb73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6531d824ee12fa49d3d9c03b9e2563c1e9581f1b42af5341b0a9bb364b0cb73b->enter($__internal_6531d824ee12fa49d3d9c03b9e2563c1e9581f1b42af5341b0a9bb364b0cb73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82c5cb58da4b971f50fe0bed700c5490968ed67bf87b7ed83d5d45b4797ff990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c5cb58da4b971f50fe0bed700c5490968ed67bf87b7ed83d5d45b4797ff990->enter($__internal_82c5cb58da4b971f50fe0bed700c5490968ed67bf87b7ed83d5d45b4797ff990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82c5cb58da4b971f50fe0bed700c5490968ed67bf87b7ed83d5d45b4797ff990->leave($__internal_82c5cb58da4b971f50fe0bed700c5490968ed67bf87b7ed83d5d45b4797ff990_prof);

        
        $__internal_6531d824ee12fa49d3d9c03b9e2563c1e9581f1b42af5341b0a9bb364b0cb73b->leave($__internal_6531d824ee12fa49d3d9c03b9e2563c1e9581f1b42af5341b0a9bb364b0cb73b_prof);

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
        return array (  206 => 57,  189 => 56,  172 => 6,  154 => 5,  126 => 58,  123 => 57,  121 => 56,  79 => 17,  75 => 16,  71 => 15,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/ajax.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bravoshop/js/all_pages.js') }}\"></script>

    <script src=\"{{ asset('bundles/bravoshop/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('bundles/bravoshop/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/bravoshop/js/func.js') }}\"></script>
</head>
<body>
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
</html>
", "base.html.twig", "C:\\OpenServer\\domains\\symfony.local\\app\\Resources\\views\\base.html.twig");
    }
}
