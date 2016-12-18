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
        $__internal_6c207dee558cc62d43734ed177d9ad96f55e05ad28fb4a0b60bf95ed4b4ca5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c207dee558cc62d43734ed177d9ad96f55e05ad28fb4a0b60bf95ed4b4ca5fe->enter($__internal_6c207dee558cc62d43734ed177d9ad96f55e05ad28fb4a0b60bf95ed4b4ca5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:shopping:index.html.twig"));

        $__internal_912aff0f500bfbc3bbeebbf98d73d4af0a8a131b8efabe88b221fc016702df34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912aff0f500bfbc3bbeebbf98d73d4af0a8a131b8efabe88b221fc016702df34->enter($__internal_912aff0f500bfbc3bbeebbf98d73d4af0a8a131b8efabe88b221fc016702df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:shopping:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c207dee558cc62d43734ed177d9ad96f55e05ad28fb4a0b60bf95ed4b4ca5fe->leave($__internal_6c207dee558cc62d43734ed177d9ad96f55e05ad28fb4a0b60bf95ed4b4ca5fe_prof);

        
        $__internal_912aff0f500bfbc3bbeebbf98d73d4af0a8a131b8efabe88b221fc016702df34->leave($__internal_912aff0f500bfbc3bbeebbf98d73d4af0a8a131b8efabe88b221fc016702df34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f91cadaf4562a402578df585ac38995c7ab8fe5a58cda4278466b923d37d956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f91cadaf4562a402578df585ac38995c7ab8fe5a58cda4278466b923d37d956->enter($__internal_7f91cadaf4562a402578df585ac38995c7ab8fe5a58cda4278466b923d37d956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a50669bd3885b3a49360b87b9f1f709242edfc8d5e1191700c0b00f8df442cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50669bd3885b3a49360b87b9f1f709242edfc8d5e1191700c0b00f8df442cc2->enter($__internal_a50669bd3885b3a49360b87b9f1f709242edfc8d5e1191700c0b00f8df442cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class = \"discount row\">
        <div class=\"col-md-12\">
            <p>До конца акции: <span id = \"discountEnd\">00 дн. 00 часов 00 минут 00 секунд</span></p>
        </div>
    </div>
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
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a href = \"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bravoshop/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "\" alt=\"item\"/></a>
                    <div class=\"caption\">
                        <a href = \"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</h3></a>
                        <p>Цена: ";
            // line 29
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
        // line 37
        echo "        </div>
    </div>
";
        
        $__internal_a50669bd3885b3a49360b87b9f1f709242edfc8d5e1191700c0b00f8df442cc2->leave($__internal_a50669bd3885b3a49360b87b9f1f709242edfc8d5e1191700c0b00f8df442cc2_prof);

        
        $__internal_7f91cadaf4562a402578df585ac38995c7ab8fe5a58cda4278466b923d37d956->leave($__internal_7f91cadaf4562a402578df585ac38995c7ab8fe5a58cda4278466b923d37d956_prof);

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
        return array (  106 => 37,  92 => 29,  86 => 28,  78 => 26,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
                    <a href = \"{{ path('products_show', { 'id': product.id }) }}\"><img src=\"{{ asset('bundles/bravoshop/images/') }}{{product.img }}\" alt=\"item\"/></a>
                    <div class=\"caption\">
                        <a href = \"{{ path('products_show', { 'id': product.id }) }}\"><h3>{{product.title }}</h3></a>
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
