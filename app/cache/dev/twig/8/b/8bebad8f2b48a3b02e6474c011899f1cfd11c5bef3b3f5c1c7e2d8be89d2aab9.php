<?php

/* AdminBundle:Admin:wdfimselect.html.twig */
class __TwigTemplate_8bebad8f2b48a3b02e6474c011899f1cfd11c5bef3b3f5c1c7e2d8be89d2aab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div>
   <div class=\"col-md-3\">
       <select class=\"form-control\" id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "html", null, true);
        echo "\">
         <option >seleccione submenu</option>
         ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosm"]) ? $context["datosm"] : $this->getContext($context, "datosm")));
        foreach ($context['_seq'] as $context["prueba"] => $context["dato"]) {
            // line 7
            echo "         ";
            $context["a"] = $this->getAttribute($context["dato"], "id", array());
            // line 8
            echo "          <option   value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfimtabla", array("id" => (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</option>  
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['prueba'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "       </select>
       <br />
       </div>
  </div>


";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
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
        return "AdminBundle:Admin:wdfimselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 16,  48 => 10,  37 => 8,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
