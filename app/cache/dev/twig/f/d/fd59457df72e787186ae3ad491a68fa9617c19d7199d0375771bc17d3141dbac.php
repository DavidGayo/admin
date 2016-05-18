<?php

/* AdminBundle:Admin:menulista.html.twig */
class __TwigTemplate_fd59457df72e787186ae3ad491a68fa9617c19d7199d0375771bc17d3141dbac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "AdminBundle:Admin:menulista.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Menu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"ibox-content\">
<div class=\"row\">
 <h1>Lista Menú</h1><br />
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/home"), "html", null, true);
        echo "\">Home</a></li>
        <li class=\"active\">Lista Menú</li>
    </ol><hr /><br />
    </div>
     
     ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "    <span class=\"alert-success\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        <br /><br />
    </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "     
    <div class=\"row\">
     <div class=\"col-md-12\">   
    <table class=\"table table-bordered table-striped table-hover\">
        <tbody>
            <th>Nombre Menú</th>
            <th>&nbsp;</th>
        </tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datom"]) ? $context["datom"] : $this->getContext($context, "datom")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 31
            echo "        <tr>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>
                 <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/editmenu"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" title=\"Editar\" class=\"btn btn-outline btn-primary\">Editar</a>
                
                 <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/deletemenu"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" title=\"Eliminar\" class=\"btn btn-outline btn-danger\">Eliminar</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
    <br /><br />
 </div>
</div>

<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/addmenu"), "html", null, true);
        echo "\" title=\"Agregar\" class=\"btn btn-outline btn-success\">Agregar</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:menulista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  111 => 40,  99 => 36,  92 => 34,  87 => 32,  84 => 31,  80 => 30,  70 => 22,  60 => 18,  57 => 17,  53 => 16,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
