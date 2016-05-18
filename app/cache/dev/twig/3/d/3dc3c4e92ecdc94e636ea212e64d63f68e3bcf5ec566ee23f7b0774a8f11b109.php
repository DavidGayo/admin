<?php

/* AdminBundle:Admin:wdintselect.html.twig */
class __TwigTemplate_3dc3c4e92ecdc94e636ea212e64d63f68e3bcf5ec566ee23f7b0774a8f11b109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("base.html.twig") : ("frontend.html.twig")), "AdminBundle:Admin:wdintselect.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div>
   <div class=\"col-md-3\">
       <select class=\"form-control\" id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "html", null, true);
        echo "\">
         <option >seleccione submenu</option>
         ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosm"]) ? $context["datosm"] : $this->getContext($context, "datosm")));
        foreach ($context['_seq'] as $context["prueba"] => $context["dato"]) {
            // line 10
            echo "         ";
            $context["a"] = $this->getAttribute($context["dato"], "id", array());
            // line 11
            echo "          <option   value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdinttabla", array("id" => (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</option>  
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['prueba'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "       </select>
       <br />
       </div>
  </div>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "  <script>
   
   \$(document).ready(function(){
   \$('#1').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#system').load(url);
   });

   \$('#2').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#interfaces').load(url);
   });

   \$('#3').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#firewall').load(url);
   });

   \$('#4').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#services').load(url);
   });

   \$('#5').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#vpn').load(url);
   });

   \$('#6').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#status').load(url);
   });

   \$('#7').click(function(event){
        event.preventDefault(); 
       var url =this.value;
        \$('#diagnostics').load(url);
   });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:wdintselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  66 => 19,  58 => 13,  47 => 11,  44 => 10,  40 => 9,  35 => 7,  31 => 5,  28 => 4,  19 => 1,);
    }
}
