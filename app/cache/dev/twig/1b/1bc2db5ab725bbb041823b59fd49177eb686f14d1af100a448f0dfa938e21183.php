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
        $__internal_dcbeb7f739dbee144c44d5788c0f8dfcf297b4c622882f5c7e3fa77916619dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbeb7f739dbee144c44d5788c0f8dfcf297b4c622882f5c7e3fa77916619dd5->enter($__internal_dcbeb7f739dbee144c44d5788c0f8dfcf297b4c622882f5c7e3fa77916619dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $__internal_8c81c7ffb03c05e68e5e566b94b0489448bf5768c0bc1da7e3479373d8d906cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c81c7ffb03c05e68e5e566b94b0489448bf5768c0bc1da7e3479373d8d906cb->enter($__internal_8c81c7ffb03c05e68e5e566b94b0489448bf5768c0bc1da7e3479373d8d906cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbeb7f739dbee144c44d5788c0f8dfcf297b4c622882f5c7e3fa77916619dd5->leave($__internal_dcbeb7f739dbee144c44d5788c0f8dfcf297b4c622882f5c7e3fa77916619dd5_prof);

        
        $__internal_8c81c7ffb03c05e68e5e566b94b0489448bf5768c0bc1da7e3479373d8d906cb->leave($__internal_8c81c7ffb03c05e68e5e566b94b0489448bf5768c0bc1da7e3479373d8d906cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01983de60708207610f027132d28ee54a0c2d8699c72fdbcdea17bd03b880bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01983de60708207610f027132d28ee54a0c2d8699c72fdbcdea17bd03b880bd8->enter($__internal_01983de60708207610f027132d28ee54a0c2d8699c72fdbcdea17bd03b880bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e128e06a667b238e76abe3d1c67bcc5e2292ab79eb4e19e2ace093e231bdb34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e128e06a667b238e76abe3d1c67bcc5e2292ab79eb4e19e2ace093e231bdb34c->enter($__internal_e128e06a667b238e76abe3d1c67bcc5e2292ab79eb4e19e2ace093e231bdb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>
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
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "idCategory", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
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
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_e128e06a667b238e76abe3d1c67bcc5e2292ab79eb4e19e2ace093e231bdb34c->leave($__internal_e128e06a667b238e76abe3d1c67bcc5e2292ab79eb4e19e2ace093e231bdb34c_prof);

        
        $__internal_01983de60708207610f027132d28ee54a0c2d8699c72fdbcdea17bd03b880bd8->leave($__internal_01983de60708207610f027132d28ee54a0c2d8699c72fdbcdea17bd03b880bd8_prof);

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
        return array (  126 => 43,  119 => 38,  107 => 32,  101 => 29,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
