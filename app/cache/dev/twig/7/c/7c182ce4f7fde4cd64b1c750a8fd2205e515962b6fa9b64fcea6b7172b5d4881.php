<?php

/* AdminBundle:Admin:submenudetalle.html.twig */
class __TwigTemplate_7c182ce4f7fde4cd64b1c750a8fd2205e515962b6fa9b64fcea6b7172b5d4881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "AdminBundle:Admin:submenudetalle.html.twig", 1);
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
        echo "Detalle Submenu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
     ";
        // line 7
        $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 8
        echo "     ";
        $context["system"] = "/proyecto/web/admin/detallesubmenu/1/";
        // line 9
        echo "     ";
        $context["interfaces"] = "/proyecto/web/admin/detallesubmenu/2/";
        // line 10
        echo "     ";
        $context["firewall"] = "/proyecto/web/admin/detallesubmenu/3/";
        echo " 
     ";
        // line 11
        $context["services"] = "/proyecto/web/admin/detallesubmenu/4/";
        echo " 
     ";
        // line 12
        $context["vpn"] = "/proyecto/web/admin/detallesubmenu/5/";
        echo " 
     ";
        // line 13
        $context["status"] = "/proyecto/web/admin/detallesubmenu/6/";
        echo "   
     ";
        // line 14
        $context["diagnostics"] = "/proyecto/web/admin/detallesubmenu/7/";
        echo " 

<div class=\"ibox-content\">
<div class=\"forum-item active\">
<div class=\"row\">
<div class=\"col-md-12\">
 <h1>Lista submenú</h1><br />
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/home"), "html", null, true);
        echo "\">Home</a></li>
        <li class=\"active\">Detalle Sumenú</li>
    </ol>
    </div>
</div>
</div>
     
   

     <div class=\"row\">
        <div class=\"col-xm-12 col-sm-12 col-md-12\">
            <div class=\"panel-heading\">
                <div class=\"panel-options\">
                    <ul class=\"nav nav-tabs\">
                        <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/listasubmenu"), "html", null, true);
        echo "\">Todo</a></li>
                        <li ";
        // line 37
        if (((isset($context["system"]) ? $context["system"] : $this->getContext($context, "system")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/1"), "html", null, true);
        echo "\">System</a></li>
                        <li ";
        // line 38
        if (((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/2"), "html", null, true);
        echo "\">Interfaces</a></li>
                        <li ";
        // line 39
        if (((isset($context["firewall"]) ? $context["firewall"] : $this->getContext($context, "firewall")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/3"), "html", null, true);
        echo "\">Firewall</a></li>
                        <li ";
        // line 40
        if (((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/4"), "html", null, true);
        echo "\">Services</a></li>
                        <li ";
        // line 41
        if (((isset($context["vpn"]) ? $context["vpn"] : $this->getContext($context, "vpn")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/5"), "html", null, true);
        echo "\">VPN</a></li>
                        <li ";
        // line 42
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/6"), "html", null, true);
        echo "\">Status</a></li>
                        <li ";
        // line 43
        if (((isset($context["diagnostics"]) ? $context["diagnostics"] : $this->getContext($context, "diagnostics")) == (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/7"), "html", null, true);
        echo "\">Diagnostics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <br />
    <div class=\"row\">
        <div class=\"col-md-12\">
    <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <th>Menú</th>
            <th>Submenú</th>
            <th>&nbsp;</th>
        </tbody>
        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosm"]) ? $context["datosm"] : $this->getContext($context, "datosm")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 61
            echo "        <tr>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dato"], "menu", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>
                 <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/editsubmenu"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" title=\"Editar\" class=\"btn btn-outline btn-primary\">Editar</a>
                
                 <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/deletesubmenu"), "html", null, true);
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
        // line 71
        echo "    </table>
</div>
    <br /><br />
 </div>
</div>

<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/addsubmenu"), "html", null, true);
        echo "\" title=\"Agregar\" class=\"btn btn-outline btn-success\">Agregar</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:submenudetalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 77,  205 => 71,  193 => 67,  186 => 65,  181 => 63,  177 => 62,  174 => 61,  170 => 60,  146 => 43,  138 => 42,  130 => 41,  122 => 40,  114 => 39,  106 => 38,  98 => 37,  94 => 36,  77 => 22,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
