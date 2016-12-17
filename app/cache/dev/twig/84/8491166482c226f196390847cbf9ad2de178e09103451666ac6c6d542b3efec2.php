<?php

/* products/show.html.twig */
class __TwigTemplate_b3c62db5abd2c280db602e42211895e54b969aa0d4251b442de7ec02d6f31c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
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
        $__internal_4799b6febe0d76dd78143422b6e11fe3b1d01ee371455a4521bfaabec7582c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4799b6febe0d76dd78143422b6e11fe3b1d01ee371455a4521bfaabec7582c24->enter($__internal_4799b6febe0d76dd78143422b6e11fe3b1d01ee371455a4521bfaabec7582c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_b13eb2a83fdb6c5800358d60204ccced22c4534e7c93b8c6d13ab3002a575fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13eb2a83fdb6c5800358d60204ccced22c4534e7c93b8c6d13ab3002a575fe1->enter($__internal_b13eb2a83fdb6c5800358d60204ccced22c4534e7c93b8c6d13ab3002a575fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4799b6febe0d76dd78143422b6e11fe3b1d01ee371455a4521bfaabec7582c24->leave($__internal_4799b6febe0d76dd78143422b6e11fe3b1d01ee371455a4521bfaabec7582c24_prof);

        
        $__internal_b13eb2a83fdb6c5800358d60204ccced22c4534e7c93b8c6d13ab3002a575fe1->leave($__internal_b13eb2a83fdb6c5800358d60204ccced22c4534e7c93b8c6d13ab3002a575fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8734ee9438c6c8ad52c8fe035d3f65a8a1ed3a509fcbd5a6394af3a34252ab6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8734ee9438c6c8ad52c8fe035d3f65a8a1ed3a509fcbd5a6394af3a34252ab6a->enter($__internal_8734ee9438c6c8ad52c8fe035d3f65a8a1ed3a509fcbd5a6394af3a34252ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee722ffb3a34481ce8e131ddadcf038a90aaa4ce090c522a863e5d2abc4bbc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee722ffb3a34481ce8e131ddadcf038a90aaa4ce090c522a863e5d2abc4bbc63->enter($__internal_ee722ffb3a34481ce8e131ddadcf038a90aaa4ce090c522a863e5d2abc4bbc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcategory</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "idCategory", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Img</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "img", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ee722ffb3a34481ce8e131ddadcf038a90aaa4ce090c522a863e5d2abc4bbc63->leave($__internal_ee722ffb3a34481ce8e131ddadcf038a90aaa4ce090c522a863e5d2abc4bbc63_prof);

        
        $__internal_8734ee9438c6c8ad52c8fe035d3f65a8a1ed3a509fcbd5a6394af3a34252ab6a->leave($__internal_8734ee9438c6c8ad52c8fe035d3f65a8a1ed3a509fcbd5a6394af3a34252ab6a_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Idcategory</th>
                <td>{{ product.idCategory }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ product.title }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
            <tr>
                <th>Img</th>
                <td>{{ product.img }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('products_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('products_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "products/show.html.twig", "C:\\OpenServer\\domains\\symfony.local\\app\\Resources\\views\\products\\show.html.twig");
    }
}
