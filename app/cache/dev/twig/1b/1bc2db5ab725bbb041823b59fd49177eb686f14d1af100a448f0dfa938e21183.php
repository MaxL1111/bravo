<?php

/* products/index.html.twig */
class __TwigTemplate_3ef4df96525019659b9e98e1640c97611b815f36063f3783bc38f6fdf09b7bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/index.html.twig", 1);
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
        $__internal_99b103ec1d9f701797d17684e6f2fd1b049631e2168c66d5ff0bff31536b83c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b103ec1d9f701797d17684e6f2fd1b049631e2168c66d5ff0bff31536b83c4->enter($__internal_99b103ec1d9f701797d17684e6f2fd1b049631e2168c66d5ff0bff31536b83c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $__internal_9e7377c5adbf25bbaa4ee7a7b8931bd2b8e83cdd9ac01f25c4f96164682978dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7377c5adbf25bbaa4ee7a7b8931bd2b8e83cdd9ac01f25c4f96164682978dc->enter($__internal_9e7377c5adbf25bbaa4ee7a7b8931bd2b8e83cdd9ac01f25c4f96164682978dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b103ec1d9f701797d17684e6f2fd1b049631e2168c66d5ff0bff31536b83c4->leave($__internal_99b103ec1d9f701797d17684e6f2fd1b049631e2168c66d5ff0bff31536b83c4_prof);

        
        $__internal_9e7377c5adbf25bbaa4ee7a7b8931bd2b8e83cdd9ac01f25c4f96164682978dc->leave($__internal_9e7377c5adbf25bbaa4ee7a7b8931bd2b8e83cdd9ac01f25c4f96164682978dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c03458b363902e94e159c930fb976fc59721e5bef3fa79f2f1b938415588c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c03458b363902e94e159c930fb976fc59721e5bef3fa79f2f1b938415588c3->enter($__internal_64c03458b363902e94e159c930fb976fc59721e5bef3fa79f2f1b938415588c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c420db3774fc2544ff8ba40149d9186e92cf802ac3a0ae1f39d3aee4c11eb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c420db3774fc2544ff8ba40149d9186e92cf802ac3a0ae1f39d3aee4c11eb54->enter($__internal_1c420db3774fc2544ff8ba40149d9186e92cf802ac3a0ae1f39d3aee4c11eb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>
    ";
        // line 6
        echo "    <table class = \"table table-responsive\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcategory</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Img</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "idCategory", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_1c420db3774fc2544ff8ba40149d9186e92cf802ac3a0ae1f39d3aee4c11eb54->leave($__internal_1c420db3774fc2544ff8ba40149d9186e92cf802ac3a0ae1f39d3aee4c11eb54_prof);

        
        $__internal_64c03458b363902e94e159c930fb976fc59721e5bef3fa79f2f1b938415588c3->leave($__internal_64c03458b363902e94e159c930fb976fc59721e5bef3fa79f2f1b938415588c3_prof);

    }

    public function getTemplateName()
    {
        return "products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  121 => 39,  109 => 33,  103 => 30,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Products list</h1>
    {#data-url = \"{{ path('bootstrapdata') }}\"#}
    <table class = \"table table-responsive\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcategory</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Img</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('products_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.idCategory }}</td>
                <td>{{ product.title }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.img }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('products_show', { 'id': product.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('products_edit', { 'id': product.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('products_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}
", "products/index.html.twig", "C:\\OpenServer\\domains\\symfony.local\\app\\Resources\\views\\products\\index.html.twig");
    }
}
