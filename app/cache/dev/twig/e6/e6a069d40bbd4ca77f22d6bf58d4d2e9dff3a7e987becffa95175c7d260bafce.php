<?php

/* BravoShopBundle:shopping:index.html.twig */
class __TwigTemplate_051508305206a8ce1d0b69710660de1639c206ec1ae0b166c4018a5480cd84b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BravoShopBundle:shopping:index.html.twig", 1);
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
        $__internal_2b699c298fb65449a902c99cd968ec4a2748de9892deba55ccc9d2d9d1c2b443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b699c298fb65449a902c99cd968ec4a2748de9892deba55ccc9d2d9d1c2b443->enter($__internal_2b699c298fb65449a902c99cd968ec4a2748de9892deba55ccc9d2d9d1c2b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:shopping:index.html.twig"));

        $__internal_1d3af3ed7134b773a8374789fe95f0c249e72f6f9cf4c43dc2e68b9a6ed4a3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3af3ed7134b773a8374789fe95f0c249e72f6f9cf4c43dc2e68b9a6ed4a3cc->enter($__internal_1d3af3ed7134b773a8374789fe95f0c249e72f6f9cf4c43dc2e68b9a6ed4a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:shopping:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b699c298fb65449a902c99cd968ec4a2748de9892deba55ccc9d2d9d1c2b443->leave($__internal_2b699c298fb65449a902c99cd968ec4a2748de9892deba55ccc9d2d9d1c2b443_prof);

        
        $__internal_1d3af3ed7134b773a8374789fe95f0c249e72f6f9cf4c43dc2e68b9a6ed4a3cc->leave($__internal_1d3af3ed7134b773a8374789fe95f0c249e72f6f9cf4c43dc2e68b9a6ed4a3cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de8afe966236e9033ba978d72bf8ba45ad39a31c4d56bf385a11698b6ec6fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de8afe966236e9033ba978d72bf8ba45ad39a31c4d56bf385a11698b6ec6fd1->enter($__internal_7de8afe966236e9033ba978d72bf8ba45ad39a31c4d56bf385a11698b6ec6fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_688c26c8633c64b49c4efbff292bf4570286f3ce3463a42b5753607c34c1dba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688c26c8633c64b49c4efbff292bf4570286f3ce3463a42b5753607c34c1dba6->enter($__internal_688c26c8633c64b49c4efbff292bf4570286f3ce3463a42b5753607c34c1dba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class = \"discount row\">
        <div class=\"col-md-12\">
            <p>До конца акции: <span id = \"discountEnd\">00 дн. 00 часов 00 минут 00 секунд</span></p>
        </div>
    </div>
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
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
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a href = \"\"><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "\" alt=\"item\"/></a>
                    <div class=\"caption\">
                        <a class = \"product\" id = \"\" href = \"\"><h3>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</h3></a>
                        <p>Цена: ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " BYN</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\">В корзину</a>
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
";
        
        $__internal_688c26c8633c64b49c4efbff292bf4570286f3ce3463a42b5753607c34c1dba6->leave($__internal_688c26c8633c64b49c4efbff292bf4570286f3ce3463a42b5753607c34c1dba6_prof);

        
        $__internal_7de8afe966236e9033ba978d72bf8ba45ad39a31c4d56bf385a11698b6ec6fd1->leave($__internal_7de8afe966236e9033ba978d72bf8ba45ad39a31c4d56bf385a11698b6ec6fd1_prof);

    }

    public function getTemplateName()
    {
        return "BravoShopBundle:shopping:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  98 => 34,  94 => 33,  88 => 31,  84 => 29,  80 => 28,  64 => 14,  62 => 13,  60 => 12,  58 => 11,  56 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            {% for product in products %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a href = \"\"><img src=\"{{ asset('bundles/bravoshop/images/') }}{{product.img }}\" alt=\"item\"/></a>
                    <div class=\"caption\">
                        <a class = \"product\" id = \"\" href = \"\"><h3>{{product.title }}</h3></a>
                        <p>Цена: {{product.price }} BYN</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\">В корзину</a>
                        </p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "BravoShopBundle:shopping:index.html.twig", "C:\\OpenServer\\domains\\symfony.local\\src\\Bravo\\ShopBundle/Resources/views/shopping/index.html.twig");
    }
}
