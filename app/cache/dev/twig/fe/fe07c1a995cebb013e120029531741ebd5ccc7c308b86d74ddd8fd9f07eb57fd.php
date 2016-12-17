<?php

/* default/index.html.twig */
class __TwigTemplate_640d3a5d55787c6178af9506c276a90533a5d8d919b83af011d8a429086e07da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8443c35dc0add0d46c369c1e1b2471a2bfdcef276686678d05706ba95a7f3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8443c35dc0add0d46c369c1e1b2471a2bfdcef276686678d05706ba95a7f3a7->enter($__internal_b8443c35dc0add0d46c369c1e1b2471a2bfdcef276686678d05706ba95a7f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a3a45cade98d54dd1e0acdb557172475b712a02555e7df6d3610b0bd608f5faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a45cade98d54dd1e0acdb557172475b712a02555e7df6d3610b0bd608f5faa->enter($__internal_a3a45cade98d54dd1e0acdb557172475b712a02555e7df6d3610b0bd608f5faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8443c35dc0add0d46c369c1e1b2471a2bfdcef276686678d05706ba95a7f3a7->leave($__internal_b8443c35dc0add0d46c369c1e1b2471a2bfdcef276686678d05706ba95a7f3a7_prof);

        
        $__internal_a3a45cade98d54dd1e0acdb557172475b712a02555e7df6d3610b0bd608f5faa->leave($__internal_a3a45cade98d54dd1e0acdb557172475b712a02555e7df6d3610b0bd608f5faa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b10c72e45f56e862fa445c33f93a9a656662832d1db81dbfc1478653184c991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b10c72e45f56e862fa445c33f93a9a656662832d1db81dbfc1478653184c991->enter($__internal_0b10c72e45f56e862fa445c33f93a9a656662832d1db81dbfc1478653184c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c0d3ceb69be479dd6f5305c57c899ed97762089720f83c2611cbac5e6c99216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0d3ceb69be479dd6f5305c57c899ed97762089720f83c2611cbac5e6c99216->enter($__internal_7c0d3ceb69be479dd6f5305c57c899ed97762089720f83c2611cbac5e6c99216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class = \"discount row\">
        <div class=\"col-md-12\">
            <p>До конца акции: <span id = \"discountEnd\">00 дн. 00 часов 00 минут 00 секунд</span></p>
        </div>
    </div>
    ";
        // line 10
        echo "        ";
        // line 11
        echo "            ";
        // line 12
        echo "        ";
        // line 13
        echo "    ";
        // line 14
        echo "    <div class=\"content row\">
        <div class=\"col-md-3\">
            <nav>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\" role=\"presentation\"><a href=\"#\">Комплектующие</a></li>
                    <li role=\"presentation\"><a href=\"#\">Ноутбуки и планшеты</a></li>
                    <li role=\"presentation\"><a href=\"#\">Компьютеры</a></li>
                    <li role=\"presentation\"><a href=\"#\">Цифровое фото и видео</a></li>
                    <li role=\"presentation\"><a href=\"#\">Аудио-видео техника</a></li>
                    <li role=\"presentation\"><a href=\"#\">Телефоны</a></li>
                </ul>
            </nav>
        </div>
        <div class=\"col-md-9\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">

                    <a href = \"\"><img src=\"images/\" alt=\"item\"/></a>

                    <div class=\"caption\">
                        <a class = \"product\" id = \"\" href = \"\"><h3>Acer</h3></a>
                        <p>HGHGHGHGHG</p>

                        <p>Цена: 900 BYN</p>

                        <p>
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\">В корзину</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7c0d3ceb69be479dd6f5305c57c899ed97762089720f83c2611cbac5e6c99216->leave($__internal_7c0d3ceb69be479dd6f5305c57c899ed97762089720f83c2611cbac5e6c99216_prof);

        
        $__internal_0b10c72e45f56e862fa445c33f93a9a656662832d1db81dbfc1478653184c991->leave($__internal_0b10c72e45f56e862fa445c33f93a9a656662832d1db81dbfc1478653184c991_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  62 => 13,  60 => 12,  58 => 11,  56 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class = \"discount row\">
        <div class=\"col-md-12\">
            <p>До конца акции: <span id = \"discountEnd\">00 дн. 00 часов 00 минут 00 секунд</span></p>
        </div>
    </div>
    {#{% if and or is null is not null is defined %}#}
        {#{% for key, value in array %}#}
            {#{{ value }}#}
        {#{% endfor %}#}
    {#{% endif %}   #}
    <div class=\"content row\">
        <div class=\"col-md-3\">
            <nav>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\" role=\"presentation\"><a href=\"#\">Комплектующие</a></li>
                    <li role=\"presentation\"><a href=\"#\">Ноутбуки и планшеты</a></li>
                    <li role=\"presentation\"><a href=\"#\">Компьютеры</a></li>
                    <li role=\"presentation\"><a href=\"#\">Цифровое фото и видео</a></li>
                    <li role=\"presentation\"><a href=\"#\">Аудио-видео техника</a></li>
                    <li role=\"presentation\"><a href=\"#\">Телефоны</a></li>
                </ul>
            </nav>
        </div>
        <div class=\"col-md-9\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">

                    <a href = \"\"><img src=\"images/\" alt=\"item\"/></a>

                    <div class=\"caption\">
                        <a class = \"product\" id = \"\" href = \"\"><h3>Acer</h3></a>
                        <p>HGHGHGHGHG</p>

                        <p>Цена: 900 BYN</p>

                        <p>
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\">В корзину</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\OpenServer\\domains\\symfony.local\\app\\Resources\\views\\default\\index.html.twig");
    }
}
